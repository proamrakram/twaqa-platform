<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Hash;
use App\Models\Notification;
use DB;
use App\Http\Controllers\Controller;
use App\Models\User;

class NotificationsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $notifications = Notification::where('is_delete',0)->get();
    return view('AdminPanel.notifications.index')->with('notifications', $notifications);
  }



  public function create()
  {
    
    return view('AdminPanel.notifications.create');
    }

  public function store(Request $request)
  {
    $this->validate($request,[
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'to' => 'required|in:teacher,student',
        'users' => 'required|array',
        'users.*' => 'required|numeric',
    ]);
    

    $request->users = implode(",", $request->users);
    $notification = Notification::create([
      'to'=>$request->to,
      'title'=>$request->title,
      'description'=>$request->description,
      'users'=>$request->users,
    ]);
    
    $this->massage('success', 'The data has been created successfully','تم اضافة البيانات بنجاح ',
    'Los datos han sido creados con éxito');
    return redirect()->route('admin.notifications.index');
  }

  public function edit($id)
  {
    $notification = Notification::find($id);
    if(is_null($notification) || $notification->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    $users = User::where('is_delete',0)->where('active',1)->get();
    return view('AdminPanel.notifications.edit')->with('notification', $notification)->with('users', $users);
  }

  public function update(Request $request, $id)
  {
    
    $notification = Notification::find($id);
    if (is_null($notification)  || $notification->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
      
    $this->validate($request,[
      'title' => 'required|string|max:255',
      'description' => 'required|string',
      'to' => 'required|in:teacher,student',
      'users' => 'required|array',
      'users.*' => 'required|numeric',
  ]);
  

  $request->users = implode(",", $request->users);
  
  $notification->update([
    'to'=>$request->to,
    'title'=>$request->title,
    'description'=>$request->description,
    'users'=>$request->users,
  ]);
   

    $this->massage('success', 'The data has been modified successfully','تم تعديل البيانات بنجاح ',
     'Los datos han sido modificados con éxito');
     return redirect()->route('admin.notifications.index');
  }

  public function destroy($id)
  {
    $notification = Notification::find($id);
    if (is_null($notification)  || $notification->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }

    $notification->is_delete = 1;
    $notification->save();
    
    $this->massage('success', 'The data has been deleted successfully','تم حذف البيانات بنجاح ',
    'Los datos se han eliminado con éxito');
    return redirect()->back();
  }

  
  public function change_status($id)
  {
    $notification = Notification::find($id);
    if (is_null($notification)  || $notification->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    if($notification->active == 0){
      $notification->active =1;
    }else{
      $notification->active =0;
    }
    $notification->save();
    
    $this->massage('success', 'The status of the data has been changed successfully','تم تغيير الحالة للبيانات بنجاح ',
    'El estado de los datos ha sido cambiado con éxito');
    return redirect()->back();
  }
}
