<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Country;

class CountriesController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $countries = Country::where('is_delete',0)->get();
    return view('AdminPanel.settings.countries.index')->with('countries', $countries);
  }


  public function create()
  {
    
    return view('AdminPanel.settings.countries.create');
    }

  public function store(Request $request)
  {
    $this->validate($request,[
        'country_name_en' => 'required|string|max:255',
        'country_name_ar' => 'required|string|max:255',
        'country_name_sp' => 'required|string|max:255',
        'country_flag' => 'required',
        'country_code' => 'required|string|max:255',
        'status' => 'nullable|in:active,inactive',
      ]);
  if($request->has('status')){
  $request->status ='active';
  }else{
    $request->status ='inactive';
  }


    $country = Country::create([
      'country_name_en'=>$request->country_name_en,
      'country_name_ar'=>$request->country_name_ar,
      'country_name_sp'=>$request->country_name_sp,
      'country_flag'=>$request->country_flag,
      'country_code'=>$request->country_code,
      'status'=>$request->status,
    ]);
    
    $this->massage('success', 'The data has been created successfully','تم اضافة البيانات بنجاح ',
    'Los datos han sido creados con éxito');
    return redirect()->route('admin.countries.index');
  }

  public function edit($id)
  {
    $country = Country::find($id);
    if(is_null($country) || $country->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    
    return view('AdminPanel.settings.countries.edit')->with('country', $country);
  }

  public function update(Request $request, $id)
  {
    
    $country = Country::find($id);
    if (is_null($country)  || $country->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
      
    $this->validate($request,[
      'country_name_en' => 'required|string|max:255',
      'country_name_ar' => 'required|string|max:255',
      'country_name_sp' => 'required|string|max:255',
      'country_flag' => 'required',
      'country_code' => 'required|string|max:255',
      'status' => 'nullable|in:active,inactive',
    ]);
if($request->has('status') ){
$request->status ='active';
}else{
  $request->status ='inactive';
}


    $country->update([
      'country_name_en'=>$request->country_name_en,
      'country_name_ar'=>$request->country_name_ar,
      'country_name_sp'=>$request->country_name_sp,
      'country_flag'=>$request->country_flag,
      'country_code'=>$request->country_code,
      'status'=>$request->status,
    ]);

    $this->massage('success', 'The data has been modified successfully','تم تعديل البيانات بنجاح ',
     'Los datos han sido modificados con éxito');
     return redirect()->route('admin.countries.index');
  }

  public function destroy($id)
  {
    $country = Country::find($id);
    if (is_null($country)  || $country->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }

    $country->is_delete = 1;
    $country->save();
    
    $this->massage('success', 'The data has been deleted successfully','تم حذف البيانات بنجاح ',
    'Los datos se han eliminado con éxito');
    return redirect()->back();
  }

  
  public function change_status($id)
  {
    $country = Country::find($id);
    if (is_null($country)  || $country->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    if($country->status == 'active'){
      $country->status ='inactive';
    }else{
      $country->status ='active';
    }
    $country->save();
    
    $this->massage('success', 'The status of the data has been changed successfully','تم تغيير الحالة للبيانات بنجاح ',
    'El estado de los datos ha sido cambiado con éxito');
    return redirect()->back();
  }
}
