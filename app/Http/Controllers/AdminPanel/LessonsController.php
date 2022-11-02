<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Status;
use App\Models\User;
use App\Models\UserLesson;
use App\Models\WorkHour;

class LessonsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $lessons = Lesson::where('is_delete', 0)->get();
    return view('AdminPanel.lessons.index')->with('lessons', $lessons);
  }

  public function edit_time($id)
  {
    $lesson = Lesson::find($id);

    if (is_null($lesson) || $lesson->is_delete == 1) {
      $this->massage('error', 'Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    $course = $lesson->course;
    $current_date = date('Y-m-d');
    $working_hours = array();
    $x = 0;
    for ($ii = 0; $ii < 7; $ii++) {

      $w = WorkHour::where('is_delete', 0)->where('user_id', $course->teacher_id)->where('day', date('l', strtotime($current_date)))->first();

      if (!is_null($w)) {
        $working_hours[$x]['day'] = $w->getDay();
        $working_hours[$x]['day_en'] = $w->day;
        $working_hours[$x]['date'] = $current_date;
        $start = $w->time_from;
        $end = $w->time_to;


        $int = $course->period * 60;
        $start = strtotime($start);
        $end = strtotime($end);
        $xx = 0;

        for ($i = $start; $i + $int <= $end;) {


          $time_from = date("H:i A", $i);
          $time_to =  date("H:i A", $i + $int);

          $lessons = Lesson::where('is_delete', 0)->where(function ($s) use ($time_from, $time_to) {
            $s->where(function ($s) use ($time_from, $time_to) {
              $s->where('time_from', '>=', $time_from)->where('time_from', '<', $time_to);
            })->orWhere(function ($s) use ($time_from, $time_to) {
              $s->where('time_to', '>', $time_from)->where('time_to', '<', $time_to);
            });
          })->where('teacher_id', $course->teacher_id)->where('date', $current_date);

          if ($lessons->count() == 0) {
            $working_hours[$x]['times'][$xx]['time_from'] = $time_from;
            $working_hours[$x]['times'][$xx]['time_to'] =  $time_to;
            $working_hours[$x]['times'][$xx]['checked'] =  0;
            $xx++;

            $i += $int;
          } else {
            if ($lessons->where('course_id', $course->id)->where('id', $lesson->id)->count() > 0) {
              $working_hours[$x]['times'][$xx]['time_from'] = $time_from;
              $working_hours[$x]['times'][$xx]['time_to'] =  $time_to;
              $working_hours[$x]['times'][$xx]['checked'] =  1;
              $xx++;
            }

            $i = strtotime(Lesson::where('is_delete', 0)->where(function ($s) use ($time_from, $time_to) {
              $s->where(function ($s) use ($time_from, $time_to) {
                $s->where('time_from', '>=', $time_from)->where('time_from', '<', $time_to);
              })->orWhere(function ($s) use ($time_from, $time_to) {
                $s->where('time_to', '>', $time_from)->where('time_to', '<', $time_to);
              });
            })->where('teacher_id', $course->teacher_id)->where('date', $current_date)->orderBy('time_to', 'desc')->first()->time_to);
          }
        }
        $x++;
      }
      $current_date = date('Y-m-d', strtotime("+1 day", strtotime($current_date)));
    }
    return view('AdminPanel.lessons.edit_time')->with('lesson', $lesson)
      ->with('working_hours', $working_hours);
  }

  public function update_time(Request $request, $id)
  {


    $lesson = Lesson::find($id);

    if (is_null($lesson) || $lesson->is_delete == 1) {
      $this->massage('error', 'Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }

    $this->validate($request, [
      'checkbox' => 'required|array|size:1',
    ]);

    foreach ($request->checkbox as $key => $working_hours) {
      $lesson = $lesson->update([
        'time_from' => date("H:i", strtotime($working_hours)),
        'time_to' => date("H:i", strtotime($working_hours) + ($lesson->course->period * 60)),
        'day' => date('l', strtotime($key)),
        'date' => date('Y-m-d', strtotime($key)),
      ]);
    }

    $this->massage(
      'success',
      'The data has been modified successfully',
      'تم تعديل البيانات بنجاح ',
      'Los datos han sido modificados con éxito'
    );
    return redirect()->route('admin.lessons.index');
  }

  
  public function edit_status($id)
  {
    $lesson = Lesson::find($id);

    if (is_null($lesson) || $lesson->is_delete == 1) {
      $this->massage('error', 'Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }

    $statuses = Status::where('is_delete',0)->get();
    return view('AdminPanel.lessons.edit_status')->with('lesson', $lesson)->with('statuses', $statuses);
  }

  public function update_status(Request $request, $id)
  {


    $lesson = Lesson::find($id);

    if (is_null($lesson) || $lesson->is_delete == 1) {
      $this->massage('error', 'Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }

    $this->validate($request, [
      'teacher_status' => 'required|exists:statuses,id',
      'student_statuses' => 'required|array',
      'teacher' => 'required|exists:users,id',
      'checkbox' => 'required|array|size:1',
    ]);

    
    $lesson->update([
      'status'=>$request->teacher_status,
            ]);


    if($request->teacher_status == 1){
      foreach ($request->student_statuses as $key => $value) {
        
        UserLesson::create([
          'lesson_id' => $id,
          'user_id' => $key,
          'status' => $value,
        ]);

        $student = User::find($key);
        $course = Lesson::find($id)->course;
        $student->update([
          'available_balance' => $student - $course->student_price,
        ]);

        $teacher = User::find($lesson->teacher_id);
        $teacher->update([
          'suspended_balance' => $teacher + $course->teacher_price,
        ]);
      }
  
    }else{
      $lesson->update([
          'postponement'=>1,
      ]);

      foreach ($request->checkbox as $key => $working_hours) {
        Lesson::create([
          'time_from' => date("H:i", strtotime($working_hours)),
          'time_to' => date("H:i", strtotime($working_hours) + ($lesson->course->period * 60)),
          'day' => date('l', strtotime($key)),
          'date' => date('Y-m-d', strtotime($key)),
          'course_id'=> $lesson->course_id,
          'teacher_id'=> $request->teacher,
        ]);
      }
    }


    $this->massage(
      'success',
      'The data has been modified successfully',
      'تم تعديل البيانات بنجاح ',
      'Los datos han sido modificados con éxito'
    );
    return redirect()->route('admin.lessons.index');
  }
}
