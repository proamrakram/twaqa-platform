<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Testimonial;

class PagesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->pages = Page::select('key', 'value')->pluck('value', 'key')->toArray();
  }


  public function about()
  {
    $pages = $this->pages;
    return view('AdminPanel.pages.about')->with('pages', $pages);
  }

  public function  update_about(Request $request)
  {

    $this->validate($request, [
      'about_title_ar' => 'nullable|string|max:255',
      'about_title_en' => 'nullable|string|max:255',
      'about_title_sp' => 'nullable|string|max:255',
      'about_description_ar' => 'nullable|string',
      'about_description_en' => 'nullable|string',
      'about_description_sp' => 'nullable|string',
    ]);

    return $this->update($request);
  }

  public function policy()
  {
    $pages = $this->pages;
    return view('AdminPanel.pages.policy')->with('pages', $pages);
  }

  public function  update_policy(Request $request)
  {

    $this->validate($request, [
      'policy_title_ar' => 'nullable|string|max:255',
      'policy_title_en' => 'nullable|string|max:255',
      'policy_title_sp' => 'nullable|string|max:255',
      'policy_description_ar' => 'nullable|string',
      'policy_description_en' => 'nullable|string',
      'policy_description_sp' => 'nullable|string',
    ]);

    return $this->update($request);
  }


  public function alert_tech()
  {
    $pages = $this->pages;
    return view('AdminPanel.pages.alert_tech')->with('pages', $pages);
  }

  public function  update_alert_tech(Request $request)
  {

    $this->validate($request, [
      'alert_tech_title_ar' => 'nullable|string|max:255',
      'alert_tech_title_en' => 'nullable|string|max:255',
      'alert_tech_title_sp' => 'nullable|string|max:255',
      'alert_tech_description_ar' => 'nullable|string',
      'alert_tech_description_en' => 'nullable|string',
      'alert_tech_description_sp' => 'nullable|string',
    ]);

    return $this->update($request);
  }


  public function vision_message()
  {
    $pages = $this->pages;
    return view('AdminPanel.pages.vision_message')->with('pages', $pages);
  }


  public function  update_vision_message(Request $request)
  {
    $this->validate($request, [
      'vision_title_ar' => 'nullable|string|max:255',
      'vision_title_en' => 'nullable|string|max:255',
      'vision_title_sp' => 'nullable|string|max:255',
      'message_ar' => 'nullable|string',
      'message_en' => 'nullable|string',
      'message_sp' => 'nullable|string',
      'vision_ar' => 'nullable|string',
      'vision_en' => 'nullable|string',
      'vision_sp' => 'nullable|string',
    ]);


    return $this->update($request);
  }


  public function faq()
  {
    $pages = $this->pages;
    $faq_ar = Faq::where('is_delete', 0)->where('lang', 'ar')->get();
    $faq_en = Faq::where('is_delete', 0)->where('lang', 'en')->get();
    $faq_sp = Faq::where('is_delete', 0)->where('lang', 'sp')->get();
    return view('AdminPanel.pages.faq')->with('faq_ar', $faq_ar)
      ->with('faq_en', $faq_en)->with('faq_en', $faq_en)->with('faq_ar', $faq_ar)->with('faq_sp', $faq_sp)->with('pages', $pages);
  }

  public function  update_faq(Request $request)
  {
    $this->validate($request, [
      'faq_page_title_ar' => 'nullable|string|max:255',
      'faq_page_title_en' => 'nullable|string|max:255',
      'faq_page_title_sp' => 'nullable|string|max:255',
      'faq_ar' => 'nullable|array',
      'faq_en' => 'nullable|array',
      'faq_sp' => 'nullable|array',
      'faq_ar.*.question' => 'nullable|string|max:255',
      'faq_en.*.question' => 'nullable|string|max:255',
      'faq_sp.*.question' => 'nullable|string|max:255',
      'faq_ar.*.answer' => 'nullable|string',
      'faq_en.*.answer' => 'nullable|string',
      'faq_sp.*.answer' => 'nullable|string',
    ]);

    Page::updateOrCreate([
      'key' => 'faq_page_title_ar'
    ], [
      'value' => $request->faq_page_title_ar
    ]);


    Page::updateOrCreate([
      'key' => 'faq_page_title_en'
    ], [
      'value' => $request->faq_page_title_en
    ]);

    Page::updateOrCreate([
      'key' => 'faq_page_title_sp'
    ], [
      'value' => $request->faq_page_title_sp
    ]);

    $array = array();
    
    if(!is_null($request->faq_ar))
    foreach ($request->faq_ar as $r) {
      $array[] = $r['id'];
    }
    
    if(!is_null($request->faq_en))
    foreach ($request->faq_en as $r) {
      $array[] = $r['id'];
    }
    
    if(!is_null($request->faq_sp))
    foreach ($request->faq_sp as $r) {
      $array[] = $r['id'];
    }
    $result = array_diff(Faq::all()->pluck(['id'])->toArray(), $array);
    foreach ($result as $r) {
      $faq = Faq::find($r);
      $faq->delete();
    }


    if(!is_null($request->faq_ar))
    foreach ($request->faq_ar as $faq) {

      Faq::updateOrCreate([
        'id' => $faq['id']
      ], [

        'question' => $faq['question'],
        'answer' => $faq['answer'],
        'lang' => 'ar'
      ]);
    }

    if(!is_null($request->faq_en))
    foreach ($request->faq_en as $faq) {

      Faq::updateOrCreate([
        'id' => $faq['id']
      ], [

        'question' => $faq['question'],
        'answer' => $faq['answer'],
        'lang' => 'en'
      ]);
    }

    if(!is_null($request->faq_sp))
    foreach ($request->faq_sp as $faq) {

      Faq::updateOrCreate([
        'id' => $faq['id']
      ], [

        'question' => $faq['question'],
        'answer' => $faq['answer'],
        'lang' => 'sp'
      ]);
    }





    $this->massage(
      'success',
      'The data has been modified successfully',
      'تم تعديل البيانات بنجاح ',
      'Los datos han sido modificados con éxito'
    );
    return redirect()->back();
  }

  public function testimonial()
  {
    $pages = $this->pages;
    $testimonial_ar = Testimonial::where('is_delete', 0)->where('lang', 'ar')->get();
    $testimonial_en = Testimonial::where('is_delete', 0)->where('lang', 'en')->get();
    $testimonial_sp = Testimonial::where('is_delete', 0)->where('lang', 'sp')->get();
    return view('AdminPanel.pages.testimonial')->with('testimonial_ar', $testimonial_ar)
      ->with('testimonial_en', $testimonial_en)->with('testimonial_en', $testimonial_en)->with('testimonial_ar', $testimonial_ar)
      ->with('testimonial_sp', $testimonial_sp)->with('pages', $pages);
  }

  public function  update_testimonial(Request $request)
  {
    $this->validate($request, [
      'testimonial_page_title_ar' => 'nullable|string|max:255',
      'testimonial_page_title_en' => 'nullable|string|max:255',
      'testimonial_page_title_sp' => 'nullable|string|max:255',
      'testimonial_ar' => 'nullable|array',
      'testimonial_en' => 'nullable|array',
      'testimonial_sp' => 'nullable|array',
      'testimonial_ar.*.name' => 'nullable|string|max:255',
      'testimonial_en.*.name' => 'nullable|string|max:255',
      'testimonial_sp.*.name' => 'nullable|string|max:255',
      'testimonial_ar.*.opinion' => 'nullable|string',
      'testimonial_en.*.opinion' => 'nullable|string',
      'testimonial_sp.*.opinion' => 'nullable|string',
      'testimonial_ar.*.image' => 'nullable',
      'testimonial_en.*.image' => 'nullable',
      'testimonial_sp.*.image' => 'nullable',
    ]);

    Page::updateOrCreate([
      'key' => 'testimonial_page_title_ar'
    ], [
      'value' => $request->testimonial_page_title_ar
    ]);


    Page::updateOrCreate([
      'key' => 'testimonial_page_title_en'
    ], [
      'value' => $request->testimonial_page_title_en
    ]);

    Page::updateOrCreate([
      'key' => 'testimonial_page_title_sp'
    ], [
      'value' => $request->testimonial_page_title_sp
    ]);

    $array = array();
    if(!is_null($request->testimonial_ar)){
    foreach ($request->testimonial_ar as $r) {
      $array[] = $r['id'];
    }}
    
    if(!is_null($request->testimonial_en)){
    foreach ($request->testimonial_en as $r) {
      $array[] = $r['id'];
    }}
    
    if(!is_null($request->testimonial_sp)){
    foreach ($request->testimonial_sp as $r) {
      $array[] = $r['id'];
    }}
    $result = array_diff(Testimonial::all()->pluck(['id'])->toArray(), $array);
    foreach ($result as $r) {
      $testimonial = Testimonial::find($r);
      $testimonial->delete();
    }


    if(!is_null($request->testimonial_ar)){
    foreach ($request->testimonial_ar as $testimonial) {
      if (!array_key_exists('image', $testimonial)) {
        Testimonial::updateOrCreate([
          'id' => $testimonial['id']
        ], [

          'name' => $testimonial['name'],
          'opinion' => $testimonial['opinion'],
          'lang' => 'ar'
        ]);
      } else {
        Testimonial::updateOrCreate([
          'id' => $testimonial['id']
        ], [

          'image' => $testimonial['image'],
          'name' => $testimonial['name'],
          'opinion' => $testimonial['opinion'],
          'lang' => 'ar'
        ]);
      }
    }}

    if(!is_null($request->testimonial_en)){
    foreach ($request->testimonial_en as $testimonial) {

      if (!array_key_exists('image', $testimonial)) {
        Testimonial::updateOrCreate([
          'id' => $testimonial['id']
        ], [

          'name' => $testimonial['name'],
          'opinion' => $testimonial['opinion'],
          'lang' => 'en'
        ]);
      } else {
        Testimonial::updateOrCreate([
          'id' => $testimonial['id']
        ], [

          'image' => $testimonial['image'],
          'name' => $testimonial['name'],
          'opinion' => $testimonial['opinion'],
          'lang' => 'en'
        ]);
      }
    }
  }

    if(!is_null($request->testimonial_sp)){
    foreach ($request->testimonial_sp as $testimonial) {

      if (!array_key_exists('image', $testimonial)) {
        Testimonial::updateOrCreate([
          'id' => $testimonial['id']
        ], [

          'name' => $testimonial['name'],
          'opinion' => $testimonial['opinion'],
          'lang' => 'sp'
        ]);
      } else {
        Testimonial::updateOrCreate([
          'id' => $testimonial['id']
        ], [

          'image' => $testimonial['image'],
          'name' => $testimonial['name'],
          'opinion' => $testimonial['opinion'],
          'lang' => 'sp'
        ]);
      }
    }
  }




    $this->massage(
      'success',
      'The data has been modified successfully',
      'تم تعديل البيانات بنجاح ',
      'Los datos han sido modificados con éxito'
    );
    return redirect()->back();
  }


  public function update($request)
  {
    foreach ($request->all() as $key => $input) {
      if ($key != '_token') {
        Page::updateOrCreate([
          'key' => $key
        ], [
          'value' => $input
        ]);
      }
    }


    $this->massage(
      'success',
      'The data has been modified successfully',
      'تم تعديل البيانات بنجاح ',
      'Los datos han sido modificados con éxito'
    );
    return redirect()->back();
  }
}
