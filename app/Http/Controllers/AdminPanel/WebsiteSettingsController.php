<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\WebsiteSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteSettingsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
      $this->setting = WebsiteSetting::select('key', 'value')->pluck('value', 'key')->toArray();
    }
  
    
  public function global()
  {
    $setting = $this->setting;
    return view('AdminPanel.Settings.global')->with('setting', $setting);
  }

  public function  update_global(Request $request)
  {
    $this->validate($request, [
      'platform_name_ar' => 'nullable|string|max:255',
      'platform_name_en' => 'nullable|string|max:255',
      'platform_name_sp' => 'nullable|string|max:255',
      'platform_details_ar' => 'nullable|string',
      'platform_details_en' => 'nullable|string',
      'platform_details_sp' => 'nullable|string',
      'platform_logo' => 'nullable',
    ]);
    return $this->update($request);
  }

  public function social_media_links()
  {
    $setting = $this->setting;
    return view('AdminPanel.Settings.social')->with('setting', $setting);
  }

  
  public function  update_social_media_links(Request $request)
  {
    $this->validate($request, [
      'facebook' => 'nullable|string|max:255',
      'twitter' => 'nullable|string|max:255',
      'youtube' => 'nullable|string|max:255',
      'instagram' => 'nullable|string|max:255',
      'linkedin' => 'nullable|string|max:255',
      'tiktok' => 'nullable|string|max:255',
    ]);

    return $this->update($request);
  }


  
  public function balance_period_hold()
  {
    $setting = WebsiteSetting::where('key','balance_period_hold')->first();
    
    return view('AdminPanel.Settings.balance_hold_period')->with('setting', $setting);
  }

  
  public function  update_balance_period_hold(Request $request)
  {
    $this->validate($request, [
      'balance_period_hold' => 'required|numeric',
    ]);

    return $this->update($request);
  }


  
  public function update($request)
  {
    foreach($request->all() as $key => $input)
        {
          if($key != '_token' && $key != 'avatar_remove'){

            if($key == 'platform_logo')
            {
                $i = $input->store('images/website_setting', 'public');
                $input = $input->hashName();
                
            WebsiteSetting::updateOrCreate([
              'key'=>$key
            ],[
                'value' => $input
            ]);
            }else{

              WebsiteSetting::updateOrCreate([
                'key'=>$key
              ],[
                  'value' => $input
              ]);
            }

          }
          
        }


    $this->massage('success', 'The data has been modified successfully','تم تعديل البيانات بنجاح ',
     'Los datos han sido modificados con éxito');
    return redirect()->back();
}

}
