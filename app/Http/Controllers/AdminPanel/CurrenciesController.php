<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Hash;
use App\Models\LessonType;
use App\Models\Currency;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\WebsiteSetting;

class CurrenciesController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    
    $default_currency = WebsiteSetting::where('key','default_currency')->first()->value;
    $currencies = Currency::where('is_delete', 0)->get();
    return view('AdminPanel.Settings.currencies.index')->with('currencies', $currencies)
    ->with('default_currency', $default_currency);
  }

  public function edit($id)
  {
    $currency = Currency::find($id);
    if (is_null($currency) || $currency->is_delete == 1) {
      $this->massage('error', 'Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }

    return view('AdminPanel.Settings.currencies.edit')->with('currency', $currency);
  }

  public function update(Request $request, $id)
  {
    $currency = Currency::find($id);
    if (is_null($currency) || $currency->is_delete == 1) {
      $this->massage('error', 'Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }

    $this->validate($request, [
      'name' => 'required|string|max:255',
      'egp' => 'required',
      'dollar' => 'required',
      'euro' => 'required',
      'riyal' => 'required',
    ]);

    $currency->update([
      'name' => $request->name,
      'egp' => $request->egp,
      'dollar' => $request->dollar,
      'euro' => $request->euro,
      'riyal' => $request->riyal,
    ]);

    $this->massage(
      'success',
      'The data has been modified successfully',
      'تم تعديل البيانات بنجاح ',
      'Los datos han sido modificados con éxito'
    );
    return redirect()->route('admin.currencies.index');
  }


  
  public function default(Request $request)
  {
    $currency = WebsiteSetting::where('key','default_currency')->first();
    if (is_null($currency)) {
      $this->massage('error', 'Not found', 'غير موجود', 'No encontrado');
      return redirect()->back();
    }
    $this->validate($request, [
      'default_currency' => 'required|exists:currencies,id',
    ]);

    
$previous_currency = Currency::find($currency->value);
$new_currency = Currency::find($request->default_currency);

    $currency->update([
      'value' => $request->default_currency,
    ]);

    foreach(Course::all() as $course){
      $course->update([
        'teacher_price' => $course->teacher_price * $previous_currency->{$new_currency->slug_name},
        'student_price' => $course->student_price * $previous_currency->{$new_currency->slug_name},
      ]);
    }

    $this->massage(
      'success',
      'The data has been modified successfully',
      'تم تعديل البيانات بنجاح ',
      'Los datos han sido modificados con éxito'
    );
    return redirect()->route('admin.currencies.index');
  }
}
