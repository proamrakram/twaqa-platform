<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\CourseCategory;
use App\Models\User;
use App\Models\WorkHour;

class TeachersController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $users = User::where('is_delete',0)->where('user_type','teacher')->get();
    return view('AdminPanel.teachers.index')->with('users', $users);
  }


  
  public function new()
  {
    $users = User::where('is_delete',0)->where('user_type','teacher')->get();
    return view('AdminPanel.teachers.new')->with('users', $users);
  }

  public function create()
  {
    $categories = CourseCategory::where('is_delete',0)->where('active',1)->get();
    return view('AdminPanel.teachers.create')->with('categories', $categories);
  }



  public function store(Request $request)
  {
   
    $this->validate($request,[
        'avatar' => 'nullable',
        'name' => 'required|string|max:255',
        'age' => 'required|numeric',
        'country' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'phonenumber' => 'required|string|max:255',
        'phonenumber2' => 'required|string|max:255',
        //'whatsapp' => 'required|string|max:255',
        'facebook' => 'required|string|max:255',
        'twitter' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'qualification' => 'required|string|max:255',
        //'parent_position' => 'required|string|max:255',
        'registered_at' => 'required|date',
        //'department' => 'required|in:children,men,women',
        'category' => 'required|exists:course_categories,id',
        'gender' => 'required|in:male,female',
        'active' => 'nullable|boolean',
        
        'certificate' => 'required|array',
        'working_hours' => 'required|array',
        'certificate.*.name' => 'required|string|max:255',
        'certificate*.date_from' => 'required|date',
        'certificate*.date_to' => 'required|date',
        'certificate*.file' => 'required',
        'working_hours.*.day' => 'required|string|max:255',
        'working_hours.*.time_from' => 'required',
        'working_hours.*.time_to' => 'required',
    ]);

    if($request->has('active')){
      $request->active =1;
      }else{
        $request->active =0;
      }
      
if(is_null($request->avatar)){
    $user = User::create([
      'name'=>$request->name,
      'age'=>$request->age,
      'country'=>$request->country,
      'state'=>$request->state,
      'email'=>$request->email,
      'password'=> Hash::make($request->password),
      'phonenumber'=>$request->phonenumber,
      'phonenumber2'=>$request->phonenumber2,
      //'whatsapp'=>$request->whatsapp,
      'facebook'=>$request->facebook,
      'twitter'=>$request->twitter,
      'position'=>$request->position,
      //'parent_position'=>$request->parent_position,
      'qualification'=>$request->qualification,
      'category'=>$request->category,
      'registered_at'=>$request->registered_at,
      //'department'=>$request->department,
      'gender'=>$request->gender,
      'active'=>$request->active,
      'user_type'=>'teacher',
    ]);
  }else{
    $user = User::create([
      'img'=>$request->avatar,
      'name'=>$request->name,
      'age'=>$request->age,
      'country'=>$request->country,
      'state'=>$request->state,
      'email'=>$request->email,
      'password'=> Hash::make($request->password),
      'phonenumber'=>$request->phonenumber,
      'phonenumber2'=>$request->phonenumber2,
      //'whatsapp'=>$request->whatsapp,
      'facebook'=>$request->facebook,
      'twitter'=>$request->twitter,
      'position'=>$request->position,
      //'parent_position'=>$request->parent_position,
      'qualification'=>$request->qualification,
      'category'=>$request->category,
      'registered_at'=>$request->registered_at,
      //'department'=>$request->department,
      'gender'=>$request->gender,
      'active'=>$request->active,
      'user_type'=>'teacher',
    ]);
  }

  foreach ($request->certificate as $certificate) {
    Certificate::create([
      'name'=>$certificate['name'],
      'date_from'=>$certificate['date_from'],
      'date_to'=>$certificate['date_to'],
      'file'=>$certificate['file'],
      'user_id'=>$user->id,
  
    ]);
    
  }

  
  foreach ($request->working_hours as $w) {

    WorkHour::create([
      'day'=>$w['day'],
      'time_from'=>$w['time_from'],
      'time_to'=>$w['time_to'],
      'user_id'=>$user->id,
  
    ]);
    
  }
  
    
    $this->massage('success', 'The data has been created successfully','تم اضافة البيانات بنجاح ',
    'Los datos han sido creados con éxito');
    return redirect()->route('admin.teachers.index');
  }

  public function edit($id)
  {
    $user = User::find($id);
    if(is_null($user) || $user->is_delete == 1  || $user->user_type != 'teacher') {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    
    $categories = CourseCategory::where('is_delete',0)->where('active',1)->get();
    return view('AdminPanel.teachers.edit')->with('user', $user)->with('categories', $categories);
  }

  public function update(Request $request, $id)
  {
    
    $user = User::find($id);
    if (is_null($user)  || $user->is_delete == 1  || $user->user_type != 'teacher') {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }

  
      
    $this->validate($request,[
      'avatar' => 'nullable',
      'name' => 'required|string|max:255',
      'age' => 'required|numeric',
      'country' => 'required|string|max:255',
      'state' => 'required|string|max:255',
      'email' => 'required|email|unique:users,email,'.$user->id,
      //'password' => 'required|string|min:8|confirmed',
      'phonenumber' => 'required|string|max:255',
      'phonenumber2' => 'required|string|max:255',
      //'whatsapp' => 'required|string|max:255',
      'facebook' => 'required|string|max:255',
      'twitter' => 'required|string|max:255',
      'position' => 'required|string|max:255',
      'qualification' => 'required|string|max:255',
      //'parent_position' => 'required|string|max:255',
      'registered_at' => 'required|date',
      //'department' => 'required|in:children,men,women',
      'category' => 'required|exists:course_categories,id',
      'gender' => 'required|in:male,female',
      'active' => 'nullable|boolean',

      
  ]);  
  if($request->has('active')){
    $request->active =1;
    }else{
      $request->active =0;
    }
if(is_null($request->avatar)){
  $user->update([
    'name'=>$request->name,
    'age'=>$request->age,
    'country'=>$request->country,
    'state'=>$request->state,
    'email'=>$request->email,
    'phonenumber'=>$request->phonenumber,
    'phonenumber2'=>$request->phonenumber2,
    //'whatsapp'=>$request->whatsapp,
    'facebook'=>$request->facebook,
    'twitter'=>$request->twitter,
    'position'=>$request->position,
    //'parent_position'=>$request->parent_position,
    'category'=>$request->category,
    'qualification'=>$request->qualification,
    'registered_at'=>$request->registered_at,
    //'department'=>$request->department,
    'gender'=>$request->gender,
    'active'=>$request->active,
  ]);
}else{
  $user->update([
    'img'=>$request->avatar,
    'name'=>$request->name,
    'age'=>$request->age,
    'country'=>$request->country,
    'state'=>$request->state,
    'email'=>$request->email,
    'phonenumber'=>$request->phonenumber,
    'phonenumber2'=>$request->phonenumber2,
    //'whatsapp'=>$request->whatsapp,
    'facebook'=>$request->facebook,
    'twitter'=>$request->twitter,
    'position'=>$request->position,
    //'parent_position'=>$request->parent_position,
    'category'=>$request->category,
    'qualification'=>$request->qualification,
    'registered_at'=>$request->registered_at,
    //'department'=>$request->department,
    'gender'=>$request->gender,
    'active'=>$request->active,
  ]);
}



    $this->massage('success', 'The data has been modified successfully','تم تعديل البيانات بنجاح ',
     'Los datos han sido modificados con éxito');
     return redirect()->route('admin.teachers.index');
  }


  public function update_certificates(Request $request, $id)
  {
    
    $user = User::find($id);
    if (is_null($user)  || $user->is_delete == 1  || $user->user_type != 'teacher') {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
      
    $this->validate($request,[
      'certificate' => 'required|array',
      'certificate.*.name' => 'required|string|max:255',
      'certificate*.date_from' => 'required|date',
      'certificate*.date_to' => 'required|date',
      'certificate*.file' => 'nullable',

  ]);
  

$array = array();
    foreach ($request->certificate as $r) {
      $array[] = $r['id'];
    }
    $result = array_diff(Certificate::where('user_id',$user->id)->pluck(['id'])->toArray(), $array);
    foreach ($result as $r) {
      $certificate = Certificate::find($r);
      $certificate->delete();
    }


    foreach ($request->certificate as $certificate) {
      if (!array_key_exists('file', $certificate)) {
        Certificate::updateOrCreate([
          'id' => $certificate['id']
        ], [

          'name'=>$certificate['name'],
          'date_from'=>$certificate['date_from'],
          'date_to'=>$certificate['date_to'],
          'user_id'=>$user->id,
      
        ]);
      } else {
        Certificate::updateOrCreate([
          'id' => $certificate['id']
        ], [

          'name'=>$certificate['name'],
          'date_from'=>$certificate['date_from'],
          'date_to'=>$certificate['date_to'],
          'file'=>$certificate['file'],
          'user_id'=>$user->id,
      
        ]);
      }
    }

    $this->massage('success', 'The data has been modified successfully','تم تعديل البيانات بنجاح ',
     'Los datos han sido modificados con éxito');
     return redirect()->route('admin.teachers.index');
  }


  public function update_working_hours(Request $request, $id)
  {
    
    $user = User::find($id);
    if (is_null($user)  || $user->is_delete == 1  || $user->user_type != 'teacher') {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
      
    $this->validate($request,[
      'working_hours' => 'required|array',
      'working_hours.*.day' => 'required|string|max:255',
      'working_hours.*.time_from' => 'required',
      'working_hours.*.time_to' => 'required',

  ]);
 
    

$array = array();
foreach ($request->working_hours as $r) {
  $array[] = $r['id'];
}
$result = array_diff(WorkHour::where('user_id',$user->id)->pluck(['id'])->toArray(), $array);
foreach ($result as $r) {
  $working_hours = WorkHour::find($r);
  $working_hours->delete();
}


foreach ($request->working_hours as $w) {
  WorkHour::updateOrCreate([
      'id' => $w['id']
    ], [

      'day'=>$w['day'],
      'time_from'=>$w['time_from'],
      'time_to'=>$w['time_to'],
      'user_id'=>$user->id,
  
    ]);
  
}
    

    $this->massage('success', 'The data has been modified successfully','تم تعديل البيانات بنجاح ',
     'Los datos han sido modificados con éxito');
     return redirect()->route('admin.teachers.index');
  }


  
  public function update_password(Request $request, $id)
  {
    
    $user = User::find($id);
    if (is_null($user)  || $user->is_delete == 1  || $user->user_type != 'teacher') {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
      
    $this->validate($request,[
      'password' => 'required|string|min:8|confirmed',
  ]);

    $user->update([
      'password'=> Hash::make($request->password),
    ]);

    $this->massage('success', 'The data has been modified successfully','تم تعديل البيانات بنجاح ',
     'Los datos han sido modificados con éxito');
     return redirect()->route('admin.teachers.index');
  }


  public function destroy($id)
  {
    $user = User::find($id);
    if (is_null($user)  || $user->is_delete == 1  || $user->user_type != 'teacher') {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }

    $user->is_delete = 1;
    $user->save();
    
    $this->massage('success', 'The data has been deleted successfully','تم حذف البيانات بنجاح ',
    'Los datos se han eliminado con éxito');
    return redirect()->back();
  }

  
  public function change_status($id)
  {
    $user = User::find($id);
    if (is_null($user)  || $user->is_delete == 1  || $user->user_type != 'teacher') {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    if($user->active == 0){
      $user->active =1;
    }else{
      $user->active =0;
    }
    $user->save();
    
    $this->massage('success', 'The status of the data has been changed successfully','تم تغيير الحالة للبيانات بنجاح ',
    'El estado de los datos ha sido cambiado con éxito');
    return redirect()->back();
  }
}
