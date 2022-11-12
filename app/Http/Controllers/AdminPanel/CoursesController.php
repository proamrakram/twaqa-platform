<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Hash;
use App\Models\Course;
use DB;
use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\CourseType;
use App\Models\Currency;
use App\Models\Lesson;
use App\Models\LessonType;
use App\Models\User;
use App\Models\UserCourse;
use App\Models\WorkHour;

class CoursesController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }


  public function getWorkingHours(Request $request)
  {
    $current_date = date('Y-m-d');
    $working_hours = array();
    $x = 0;
    for ($ii = 0; $ii < 7; $ii++) {

      $w = WorkHour::where('is_delete', 0)->where('user_id', $request->teacher)->where('day', date('l', strtotime($current_date)))->first();

      if (!is_null($w)) {
        $working_hours[$x]['day'] = $w->getDay();
        $working_hours[$x]['day_en'] = $w->day;
        $working_hours[$x]['date'] = $current_date;
        $start = $w->time_from;
        $end = $w->time_to;


        $int = $request->period * 60;
        $start = strtotime($start);
        $end = strtotime($end);
        $xx = 0;

        for ($i = $start; $i + $int <= $end;) {

          $time_from = date("H:i A", $i);
          $time_to =  date("H:i A", $i + $int);

          if ($request->course == null) {
            $lessons = Lesson::where('is_delete', 0)->where(function ($s) use ($time_from, $time_to) {
              $s->where(function ($s) use ($time_from, $time_to) {
                $s->where('time_from', '>=', $time_from)->where('time_from', '<', $time_to);
              })->orWhere(function ($s) use ($time_from, $time_to) {
                $s->where('time_to', '>', $time_from)->where('time_to', '<', $time_to);
              });
            })->where('teacher_id', $request->teacher)->where('date', $current_date);
          } else {
            $lessons = Lesson::where('is_delete', 0)->where(function ($s) use ($time_from, $time_to) {
              $s->where(function ($s) use ($time_from, $time_to) {
                $s->where('time_from', '>=', $time_from)->where('time_from', '<', $time_to);
              })->orWhere(function ($s) use ($time_from, $time_to) {
                $s->where('time_to', '>', $time_from)->where('time_to', '<', $time_to);
              });
            })->where('teacher_id', $request->teacher)->where('date', $current_date)->where('course_id', '!=', $request->course);
          }

          if ($lessons->count() == 0) {
            $working_hours[$x]['times'][$xx]['time_from'] = $time_from;
            $working_hours[$x]['times'][$xx]['time_to'] =  $time_to;
            $working_hours[$x]['times'][$xx]['checked'] =  0;
            $xx++;

            $i += $int;
          } else {

            $i = strtotime($lessons->orderBy('time_to', 'desc')->first()->time_to);
          }
        }
        $x++;
      }
      $current_date = date('Y-m-d', strtotime("+1 day", strtotime($current_date)));
    }
    $data = $working_hours;

    return response()->json($data);
  }

  public function index()
  {
    $courses = Course::where('is_delete', 0)->get();

    return view('AdminPanel.courses.index')->with('courses', $courses);
  }



  public function create()
  {
    $students = User::where('is_delete', 0)->where('active', 1)->where('user_type', 'student')->get();
    $supervisors = User::where('is_delete', 0)->where('active', 1)->where('user_type', 'supervisor')->get();
    $teachers = User::where('is_delete', 0)->where('active', 1)->where('user_type', 'teacher')->get();
    $lesson_types = LessonType::where('is_delete', 0)->where('active', 1)->get();
    $course_types = CourseType::where('is_delete', 0)->where('active', 1)->get();
    $categories = CourseCategory::where('is_delete', 0)->where('active', 1)->get();
    $currencies = Currency::where('is_delete', 0)->get();
    return view('AdminPanel.courses.create')->with('students', $students)
      ->with('supervisors', $supervisors)
      ->with('teachers', $teachers)
      ->with('lesson_types', $lesson_types)
      ->with('course_types', $course_types)
      ->with('categories', $categories)
      ->with('currencies', $currencies);
  }


  public function store(Request $request)
  {


    $this->validate($request, [
      'name' => 'required|string|max:255',
      'description' => 'required|string',
      'hours' => 'required|numeric',
      'period' => 'required|numeric',
      'student_id' => 'required|array',
      'student_id.*' => 'required|exists:users,id',
      'teacher_id' => 'required|exists:users,id',
      'department' => 'required|in:children,men,women',
      'category' => 'required|exists:course_categories,id',
      'course_type_id' => 'required|exists:course_types,id',
      'lesson_type_id' => 'required|exists:lesson_types,id',
      'renewed' => 'nullable|boolean',
      'student_price' => 'required',
      'teacher_price' => 'required',
      'student_price_currency' => 'required|exists:currencies,id',
      'teacher_price_currency' => 'required|exists:currencies,id',
      'checkbox' => 'required|array',
      'supervisor_id' => 'required|exists:users,id',
      'checkbox' => 'required|array',
      'img' => 'nullable|string|max:255',
      'group_name' => 'nullable|string|max:255',
      'active' => 'nullable|boolean',
    ]);


    if (is_null($request->active)) {
      $request->active = 0;
    }
    if (is_null($request->renewed)) {
      $request->renewed = 0;
    }

    $request->student_id = implode(",", $request->student_id);

    $course = Course::create([
      'name' => $request->name,
      'description' => $request->description,
      'hours' => $request->hours,
      'period' => $request->period,
      'student_id' => $request->student_id,
      'teacher_id' => $request->teacher_id,
      'department' => $request->department,
      'category' => $request->category,
      'course_type_id' => $request->course_type_id,
      'lesson_type_id' => $request->lesson_type_id,
      'group_name' => $request->group_name,
      'renewed' => $request->renewed,
      'student_price' => $request->student_price,
      'teacher_price' => $request->teacher_price,
      'student_price_currency' => $request->student_price_currency,
      'teacher_price_currency' => $request->teacher_price_currency,
      'supervisor_id' => $request->supervisor_id,
      'img' => $request->img,
      'active' => $request->active,
    ]);

    $course->attach($request->student_id);

    foreach ($request->checkbox as $key => $working_hours) {
      foreach ($working_hours as $time) {
        Lesson::create([
          'time_from' => date("H:i", strtotime($time)),
          'time_to' => date("H:i", strtotime($time) + ($request->period * 60)),
          'day' => date('l', strtotime($key)),
          'date' => $key,
          'course_id' => $course->id,
          'teacher_id' => $request->teacher_id,
        ]);
      }
    }

    $this->massage(
      'success',
      'The data has been created successfully',
      'تم اضافة البيانات بنجاح ',
      'Los datos han sido creados con éxito'
    );
    return redirect()->route('admin.courses.index');
  }

  public function edit($id)
  {
    $course = Course::find($id);
    if (is_null($course) || $course->is_delete == 1) {
      $this->massage('error', 'Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }

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
            if ($lessons->where('course_id', $course->id)->count() > 0) {
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

    $students = User::where('is_delete', 0)->where('active', 1)->where('user_type', 'student')->get();
    $supervisors = User::where('is_delete', 0)->where('active', 1)->where('user_type', 'supervisor')->get();
    $teachers = User::where('is_delete', 0)->where('active', 1)->where('user_type', 'teacher')->get();
    $lesson_types = LessonType::where('is_delete', 0)->where('active', 1)->get();
    $course_types = CourseType::where('is_delete', 0)->where('active', 1)->get();
    $categories = CourseCategory::where('is_delete', 0)->where('active', 1)->get();
    $currencies = Currency::where('is_delete', 0)->get();
    return view('AdminPanel.courses.edit')->with('course', $course)->with('students', $students)
      ->with('supervisors', $supervisors)
      ->with('teachers', $teachers)
      ->with('lesson_types', $lesson_types)
      ->with('course_types', $course_types)
      ->with('working_hours', $working_hours)
      ->with('categories', $categories)
      ->with('currencies', $currencies);
  }

  public function update(Request $request, $id)
  {

    $course = Course::find($id);
    if (is_null($course)  || $course->is_delete == 1) {
      $this->massage('error', 'Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }

    $this->validate($request, [
      'name' => 'required|string|max:255',
      'description' => 'required|string',
      'hours' => 'required|numeric',
      'period' => 'required|numeric',
      'student_id' => 'required|array',
      'student_id.*' => 'required|exists:users,id',
      'teacher_id' => 'required|exists:users,id',
      'department' => 'required|in:children,men,women',
      'category' => 'required|exists:course_categories,id',
      'course_type_id' => 'required|exists:course_types,id',
      'lesson_type_id' => 'required|exists:lesson_types,id',
      'renewed' => 'nullable|boolean',
      'student_price' => 'required',
      'teacher_price' => 'required',
      'student_price_currency' => 'required|exists:currencies,id',
      'teacher_price_currency' => 'required|exists:currencies,id',
      'checkbox' => 'required|array',
      'supervisor_id' => 'required|exists:users,id',
      'img' => 'nullable|string|max:255',
      'group_name' => 'nullable|string|max:255',
      'active' => 'nullable|boolean',
    ]);
    if (is_null($request->active)) {
      $request->active = 0;
    }
    if (is_null($request->renewed)) {
      $request->renewed = 0;
    }

    $request->student_id = implode(",", $request->student_id);
    $course->update([
      'name' => $request->name,
      'description' => $request->description,
      'hours' => $request->hours,
      'period' => $request->period,
      'students' => $request->student_id,
      'teacher_id' => $request->teacher_id,
      'department' => $request->department,
      'category' => $request->category,
      'course_type_id' => $request->course_type_id,
      'lesson_type_id' => $request->lesson_type_id,
      'group_name' => $request->group_name,
      'renewed' => $request->renewed,
      'student_price' => $request->student_price,
      'teacher_price' => $request->teacher_price,
      'student_price_currency' => $request->student_price_currency,
      'teacher_price_currency' => $request->teacher_price_currency,
      'supervisor_id' => $request->supervisor_id,
      'img' => $request->img,
      'active' => $request->active,
    ]);
    
    foreach ($course->lessons as $lesson) {
      $lesson->delete();
    }

    foreach ($request->checkbox as $key => $working_hours) {
      foreach ($working_hours as $time) {
        Lesson::create([
          'time_from' => date("H:i", strtotime($time)),
          'time_to' => date("H:i", strtotime($time) + ($request->period * 60)),
          'day' => date('l', strtotime($key)),
          'date' => date('Y-m-d', strtotime($key)),
          'course_id' => $course->id,
          'teacher_id' => $request->teacher_id,
        ]);
      }
    }

    $this->massage(
      'success',
      'The data has been modified successfully',
      'تم تعديل البيانات بنجاح ',
      'Los datos han sido modificados con éxito'
    );
    return redirect()->route('admin.courses.index');
  }

  public function destroy($id)
  {
    $course = Course::find($id);
    if (is_null($course)  || $course->is_delete == 1) {
      $this->massage('error', 'Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }

    $course->is_delete = 1;
    $course->save();

    $this->massage(
      'success',
      'The data has been deleted successfully',
      'تم حذف البيانات بنجاح ',
      'Los datos se han eliminado con éxito'
    );
    return redirect()->back();
  }


  public function change_status($id)
  {
    $course = Course::find($id);
    if (is_null($course)  || $course->is_delete == 1) {
      $this->massage('error', 'Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    if ($course->active == 0) {
      $course->active = 1;
    } else {
      $course->active = 0;
    }
    $course->save();

    $this->massage(
      'success',
      'The status of the data has been changed successfully',
      'تم تغيير الحالة للبيانات بنجاح ',
      'El estado de los datos ha sido cambiado con éxito'
    );
    return redirect()->back();
  }
}
