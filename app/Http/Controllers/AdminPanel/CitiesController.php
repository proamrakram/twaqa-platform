<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use DB;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;

class CitiesController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $cities = City::where('is_delete',0)->get();
    return view('AdminPanel.settings.cities.index')->with('cities', $cities);
  }


  public function create()
  {
    $countries = Country::where('is_delete',0)->get();
    return view('AdminPanel.settings.cities.create')->with('countries',$countries);
    }

  public function store(Request $request)
  {
    $this->validate($request,[
        'city_name_en' => 'required|string|max:255',
        'city_name_ar' => 'required|string|max:255',
        'city_name_sp' => 'required|string|max:255',
        'status' => 'nullable|in:active,inactive',
        'country_id' => 'required|exists:countries,id',
      ]);
  if($request->has('status')){
  $request->status ='active';
  }else{
    $request->status ='inactive';
  }


    $city = City::create([
      'city_name_en'=>$request->city_name_en,
      'city_name_ar'=>$request->city_name_ar,
      'city_name_sp'=>$request->city_name_sp,
      'status'=>$request->status,
      'country_id'=>$request->country_id,
    ]);
    
    $this->massage('success', 'The data has been created successfully','تم اضافة البيانات بنجاح ',
    'Los datos han sido creados con éxito');
    return redirect()->route('admin.cities.index');
  }

  public function edit($id)
  {
    
    $countries = Country::where('is_delete',0)->get();
    $city = City::find($id);
    if(is_null($city) || $city->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    
    return view('AdminPanel.settings.cities.edit')->with('city', $city)->with('countries',$countries);
  }

  public function update(Request $request, $id)
  {
    
    $city = City::find($id);
    if (is_null($city)  || $city->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
      
    $this->validate($request,[
      'city_name_en' => 'required|string|max:255',
      'city_name_ar' => 'required|string|max:255',
      'city_name_sp' => 'required|string|max:255',
      'status' => 'nullable|in:active,inactive',
      'country_id' => 'required|exists:countries,id',
    ]);
if($request->has('status') ){
$request->status ='active';
}else{
  $request->status ='inactive';
}


    $city->update([
      'city_name_en'=>$request->city_name_en,
      'city_name_ar'=>$request->city_name_ar,
      'city_name_sp'=>$request->city_name_sp,
      'status'=>$request->status,
      'country_id'=>$request->country_id,
    ]);

    $this->massage('success', 'The data has been modified successfully','تم تعديل البيانات بنجاح ',
     'Los datos han sido modificados con éxito');
     return redirect()->route('admin.cities.index');
  }

  public function destroy($id)
  {
    $city = City::find($id);
    if (is_null($city)  || $city->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }

    $city->is_delete = 1;
    $city->save();
    
    $this->massage('success', 'The data has been deleted successfully','تم حذف البيانات بنجاح ',
    'Los datos se han eliminado con éxito');
    return redirect()->back();
  }

  
  public function change_status($id)
  {
    $city = City::find($id);
    if (is_null($city)  || $city->is_delete == 1) {
      $this->massage('error','Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    if($city->status == 'active'){
      $city->status ='inactive';
    }else{
      $city->status ='active';
    }
    $city->save();
    
    $this->massage('success', 'The status of the data has been changed successfully','تم تغيير الحالة للبيانات بنجاح ',
    'El estado de los datos ha sido cambiado con éxito');
    return redirect()->back();
  }
}
