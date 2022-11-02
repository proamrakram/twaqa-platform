<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\UserService;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view('Website.pages.index');
    }

    public function aboutUs()
    {
        return view('Website.pages.about_us');
    }

    public function visionMision()
    {
        return view('Website.pages.vision_mision');
    }

    public function courses()
    {
        return view('Website.pages.courses');
    }

    public function packages()
    {
        return view('Website.pages.packages');
    }

    public function teachers()
    {
        return view('Website.pages.teachers');
    }

    public function vidWatch()
    {
        return view('Website.pages.vid_watch');
    }

    public function contactUs()
    {
        return view('Website.pages.contact_us');
    }

    public function jobs()
    {
        return view('Website.pages.jobs');
    }

    public function signIn()
    {
        return view('Website.auth.signIn');
    }

    public function signUp()
    {
        return view('Website.auth.signUp');
    }

    public function teacherDataBasic()
    {
        $user = auth()->user();
        return view('Website.pages.teacher-data-basic', compact(['user']));
    }

    public function allSubject()
    {
        return view('Website.pages.all_subjects');
    }
}
