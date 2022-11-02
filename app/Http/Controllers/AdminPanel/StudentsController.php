<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;
use App\Models\User;

class StudentsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $users = User::where('is_delete',0)->where('user_type','student')->get();
    return view('AdminPanel.students.index')->with('users', $users);
  }

  public function create()
  {
    return view('AdminPanel.students.create');
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
        'whatsapp' => 'required|string|max:255',
        'facebook' => 'required|string|max:255',
        'twitter' => 'required|string|max:255',
        'position' => 'nullable|string|max:255',
        'parent_position' => 'nullable|string|max:255',
        'registered_at' => 'required|date',
        'department' => 'required|in:children,men,women',
        'gender' => 'required|in:male,female',
        'active' => 'nullable|boolean',
    ]);
    if($request->has('active')){
      $request->active =1;
      }else{
        $request->active =0;
      }
      

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
      'whatsapp'=>$request->whatsapp,
      'facebook'=>$request->facebook,
      'twitter'=>$request->twitter,
      'position'=>$request->position,
      'parent_position'=>$request->parent_position,
      //'qualification'=>$request->qualification,
      'registered_at'=>$request->registered_at,
      'department'=>$request->department,
      'gender'=>$request->gender,
      'active'=>$request->active,
      'user_type'=>'student',
    ]);
    
    $this->massage('success', 'The data has been created successfully','تم اضافة البيانات بنجاح ',
    'Los datos han sido creados con éxito');
    return redirect()->route('admin.students.index');
  }

  public function edit($id)
  {
    $user = User::find($id);
    if(is_null($user) || $user->is_delete == 1  || $user->user_type != 'student') {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    
    return view('AdminPanel.students.edit')->with('user', $user);
  }

  public function update(Request $request, $id)
  {
    
    $user = User::find($id);
    if (is_null($user)  || $user->is_delete == 1  || $user->user_type != 'student') {
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
      'phonenumber' => 'required|string|max:255',
      'phonenumber2' => 'required|string|max:255',
      'whatsapp' => 'required|string|max:255',
      'facebook' => 'required|string|max:255',
      'twitter' => 'required|string|max:255',
      'position' => 'nullable|string|max:255',
      'parent_position' => 'nullable|string|max:255',
      'registered_at' => 'required|date',
      'department' => 'required|in:children,men,women',
      'gender' => 'required|in:male,female',
      'active' => 'nullable|boolean',
  ]);
  if($request->has('active')){
    $request->active =1;
    }else{
      $request->active =0;
    }
    
  $user->update([
    'img'=>$request->avatar,
    'name'=>$request->name,
    'age'=>$request->age,
    'country'=>$request->country,
    'state'=>$request->state,
    'email'=>$request->email,
    'phonenumber'=>$request->phonenumber,
    'phonenumber2'=>$request->phonenumber2,
    'whatsapp'=>$request->whatsapp,
    'facebook'=>$request->facebook,
    'twitter'=>$request->twitter,
    'position'=>$request->position,
    'parent_position'=>$request->parent_position,
    //'qualification'=>$request->qualification,
    'registered_at'=>$request->registered_at,
    'department'=>$request->department,
    'gender'=>$request->gender,
    'active'=>$request->active,
  ]);
    

    $this->massage('success', 'The data has been modified successfully','تم تعديل البيانات بنجاح ',
     'Los datos han sido modificados con éxito');
     return redirect()->route('admin.students.index');
  }


  
  public function update_password(Request $request, $id)
  {
    
    $user = User::find($id);
    if (is_null($user)  || $user->is_delete == 1  || $user->user_type != 'student') {
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
     return redirect()->route('admin.students.index');
  }


  public function destroy($id)
  {
    $user = User::find($id);
    if (is_null($user)  || $user->is_delete == 1  || $user->user_type != 'student') {
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
    if (is_null($user)  || $user->is_delete == 1  || $user->user_type != 'student') {
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
