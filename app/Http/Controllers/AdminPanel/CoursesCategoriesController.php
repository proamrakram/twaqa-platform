<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Hash;
use App\Models\CourseCategory;
use DB;
use App\Http\Controllers\Controller;

class CoursesCategoriesController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $categories = CourseCategory::where('is_delete',0)->get();
    return view('AdminPanel.courses_categories.index')->with('categories', $categories);
  }



  public function create()
  {
    
    return view('AdminPanel.courses_categories.create');
    }

  public function store(Request $request)
  {

    $this->validate($request,[
      'avatar' => 'nullable',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'active' => 'nullable|in:0,1',
    ]);
if($request->has('active')){
$request->active =1;
}else{
  $request->active =0;
}

    $course_category = CourseCategory::create([
      'img'=>$request->avatar,
      'title'=>$request->title,
      'description'=>$request->description,
      'active'=>$request->active,
    ]);
    
    $this->massage('success', 'The data has been created successfully','تم اضافة البيانات بنجاح ',
    'Los datos han sido creados con éxito');
    return redirect()->route('admin.courses-categories.index');
  }

  public function edit($id)
  {
    $course_category = CourseCategory::find($id);
    if(is_null($course_category) || $course_category->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    
    return view('AdminPanel.courses_categories.edit')->with('category', $course_category);
  }

  public function update(Request $request, $id)
  {
    
    $course_category = CourseCategory::find($id);
    if (is_null($course_category)  || $course_category->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
      
    $this->validate($request,[
      'avatar' => 'nullable',
      'title' => 'required|string|max:255',
      'description' => 'required|string',
      'active' => 'nullable|in:0,1',
  ]);

  if($request->has('active')){
    $request->active =1;
    }else{
      $request->active =0;
    }
    
   $course_category->update([
      'img'=>$request->avatar,
      'title'=>$request->title,
      'description'=>$request->description,
      'active'=>$request->active,
    ]);

    $this->massage('success', 'The data has been modified successfully','تم تعديل البيانات بنجاح ',
     'Los datos han sido modificados con éxito');
     return redirect()->route('admin.courses-categories.index');
  }

  public function destroy($id)
  {
    $course_category = CourseCategory::find($id);
    if (is_null($course_category)  || $course_category->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }

    $course_category->is_delete = 1;
    $course_category->save();
    
    $this->massage('success', 'The data has been deleted successfully','تم حذف البيانات بنجاح ',
    'Los datos se han eliminado con éxito');
    return redirect()->back();
  }

  
  public function change_status($id)
  {
    $course_category = CourseCategory::find($id);
    if (is_null($course_category)  || $course_category->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    if($course_category->active == 0){
      $course_category->active =1;
    }else{
      $course_category->active =0;
    }
    $course_category->save();
    
    $this->massage('success', 'The status of the data has been changed successfully','تم تغيير الحالة للبيانات بنجاح ',
    'El estado de los datos ha sido cambiado con éxito');
    return redirect()->back();
  }
}
