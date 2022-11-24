<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StdController extends Controller
{
    public function __construct()
    {
    }

    public function home()
    {
        return view('Website.pages.student.std-home');
    }

    public function dataBasic()
    {
        return view('Website.pages.student.std-data-basic');
    }

    public function books()
    {
        return view('Website.pages.student.std-books');
    }

    public function posts()
    {
        return view('Website.pages.student.std-posts');
    }

    public function balance()
    {
        dd('balance');
    }

    public function achievements()
    {
        return view('Website.pages.student.std-achievements');
    }

    public function certificates()
    {
        return view('Website.pages.student.std-certificates');
    }

    public function subscrption()
    {
        return view('Website.pages.student.std-subscriptions');
    }

    public function chat()
    {
        return view('Website.pages.student.chat');
    }

    public function videos()
    {
        return view('Website.pages.student.std-videos');
    }

    public function teacherQuran()
    {
        return view('Website.pages.student.std-teacher-quran');
    }


    public function courses()
    {
        dd('courses');
    }

    public function academyPolicy()
    {
        return view('Website.pages.student.std-academy-policy');
    }

    public function examps()
    {
        return view('Website.pages.student.std-examps');
    }

    public function stdAbsence()
    {
        return view('Website.pages.student.std-absence');
    }

    public function stdCertificatesHonors()
    {
        return view('Website.pages.student.std-certificates-honors');
    }
}
