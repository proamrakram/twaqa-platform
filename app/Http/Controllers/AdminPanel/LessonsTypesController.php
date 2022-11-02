<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Hash;
use App\Models\LessonType;
use DB;
use App\Http\Controllers\Controller;

class LessonsTypesController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $types = LessonType::where('is_delete',0)->get();
    return view('AdminPanel.lessons_types.index')->with('types', $types);
  }



  public function store(Request $request)
  {
    $this->validate($request,[
        'title' => 'required|string|max:255',
        'description' => 'required|string',
    ]);


    $lesson_type = LessonType::create([
      'title'=>$request->title,
      'description'=>$request->description,
    ]);
    
    $this->massage('success', 'The data has been created successfully','تم اضافة البيانات بنجاح ',
    'Los datos han sido creados con éxito');
    return redirect()->route('admin.lessons-types.index');
  }

  public function edit($id)
  {
    $lesson_type = LessonType::find($id);
    if(is_null($lesson_type) || $lesson_type->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    
    return view('AdminPanel.lessons_types.edit')->with('type', $lesson_type);
  }

  public function update(Request $request, $id)
  {
    
    $lesson_type = LessonType::find($id);
    if (is_null($lesson_type)  || $lesson_type->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
      
    $this->validate($request,[
      'title' => 'required|string|max:255',
      'description' => 'required|string',
  ]);

    $lesson_type->update([
      'title'=>$request->title,
      'description'=>$request->description,
    ]);

    $this->massage('success', 'The data has been modified successfully','تم تعديل البيانات بنجاح ',
     'Los datos han sido modificados con éxito');
     return redirect()->route('admin.lessons-types.index');
  }

  public function destroy($id)
  {
    $lesson_type = LessonType::find($id);
    if (is_null($lesson_type)  || $lesson_type->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }

    $lesson_type->is_delete = 1;
    $lesson_type->save();
    
    $this->massage('success', 'The data has been deleted successfully','تم حذف البيانات بنجاح ',
    'Los datos se han eliminado con éxito');
    return redirect()->back();
  }

  
  public function change_status($id)
  {
    $lesson_type = LessonType::find($id);
    if (is_null($lesson_type)  || $lesson_type->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    if($lesson_type->active == 0){
      $lesson_type->active =1;
    }else{
      $lesson_type->active =0;
    }
    $lesson_type->save();
    
    $this->massage('success', 'The status of the data has been changed successfully','تم تغيير الحالة للبيانات بنجاح ',
    'El estado de los datos ha sido cambiado con éxito');
    return redirect()->back();
  }
}
