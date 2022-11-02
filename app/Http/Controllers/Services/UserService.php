<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserService extends Controller
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function teacherImage()
    {
        $user = User::find(auth()->id());
        $user->update([
            'img' => $this->request->image
        ]);

        return redirect()->back()->with('success', 'Your photo has been updated successfully');
    }

    public function teacherPhoneNumbers()
    {
        $user = User::find(auth()->id());

        $user->update([
            'phonenumber' => $this->request->phonenumber,
            'phonenumber2' => $this->request->phonenumber2
        ]);

        return redirect()->back()->with('success', 'Your phone numbers has been updated successfully');
    }

    public function teacherBasic()
    {
        $user = User::find(auth()->id());

        $user->update([
            'full_name' => $this->request->full_name,
            'gender' => $this->request->gender,
            'description' => $this->request->description,
            'birthday' => $this->request->birthday,
            'age' => $this->request->age,
            'position' => $this->request->position,
        ]);

        return redirect()->back()->with('success', 'Your basic data has been updated successfully');
    }

    public function teacherLinks()
    {
        $user = User::find(auth()->id());

        $user->update([
            'facebook' => $this->request->facebook,
            'twitter' => $this->request->twitter,
            'whatsapp' => $this->request->whatsapp,
        ]);

        return redirect()->back()->with('success', 'Your links has been updated successfully');
    }
}
