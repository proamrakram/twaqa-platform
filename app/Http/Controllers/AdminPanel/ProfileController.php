<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $user = auth()->user();
    return view('AdminPanel.profile')->with('user', $user);
  }


  public function update(Request $request)
  {
    $this->validate($request,[
      'avatar' => 'nullable',
      'name' => 'required|string|max:255',
      'country' => 'required|string|max:255',
      'state' => 'required|string|max:255',
      'email' => 'required|email|unique:users,email,'.auth()->user()->id,
      'phonenumber' => 'required|string|max:255',
      'phonenumber2' => 'required|string|max:255',
      'gender' => 'required|in:male,female',
      'active' => 'nullable|boolean',
  ]);
  if($request->has('active')){
    $request->active =1;
    }else{
      $request->active =0;
    }
    
    User::find(auth()->user()->id)->update([
    'img'=>$request->avatar,
    'name'=>$request->name,
    'country'=>$request->country,
    'state'=>$request->state,
    'email'=>$request->email,
    'phonenumber'=>$request->phonenumber,
    'phonenumber2'=>$request->phonenumber2,
    'gender'=>$request->gender,
    'active'=>$request->active,
  ]);
    

    $this->massage('success', 'The data has been modified successfully','تم تعديل البيانات بنجاح ',
     'Los datos han sido modificados con éxito');
     return redirect()->route('admin.profile');
  }


  
  public function update_password(Request $request)
  {
    
      
    $this->validate($request,[
      'password' => 'required|string|min:8|confirmed',
  ]);

  User::find(auth()->user()->id)->update([
      'password'=> Hash::make($request->password),
    ]);

    $this->massage('success', 'The data has been modified successfully','تم تعديل البيانات بنجاح ',
     'Los datos han sido modificados con éxito');
     return redirect()->route('admin.profile');
  }

}
