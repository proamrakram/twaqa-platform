<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\UserService;

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

    #Teacher
    public function teachers()
    {
        return view('Website.pages.teacher.teachers');
    }

    public function teacherDataBasic()
    {
        $user = auth()->user();
        return view('Website.pages.teacher.teacher-data-basic', compact(['user']));
    }

    public function teacherQualifications()
    {
        $user = auth()->user();
        $qualifications = $user->qualifications->where('is_delete', '0');
        return view('Website.pages.teacher.teacher-qualifications', compact(['user', 'qualifications']));
    }

    public function teacherCertificates()
    {
        $user = auth()->user();
        $teacher_certificates = $user->teacherCertificates->where('is_delete', '0');
        return view('Website.pages.teacher.teacher-certificates', compact(['teacher_certificates', 'user']));
    }

    public function teacherEjazat()
    {
        $user = auth()->user();
        $ejazats = $user->ejazats->where('is_delete', '0');
        return view('Website.pages.teacher.teacher-ejazat', compact(['ejazats', 'user']));
    }

    public function teacherVideoAudio()
    {
        $user = auth()->user();
        $ejazats = $user->ejazats->where('is_delete', '0');
        return view('Website.pages.teacher.teacher-video-audio', compact(['ejazats', 'user']));
    }

    public function teacherAccountDetails()
    {
        $user = auth()->user();
        return view('Website.pages.teacher.teacher-account-details', compact(['user']));
    }

    public function teacherSalary()
    {
        $user = auth()->user();
        return view('Website.pages.teacher.teacher-salary', compact(['user']));
    }

    public function teacherCourses()
    {
        $user = auth()->user();
        return view('Website.pages.teacher.teacher-courses', compact(['user']));
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


    public function allSubject()
    {
        return view('Website.pages.all_subjects');
    }
}
