<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Qualification;
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
        $title = Page::getPageContent('user_privacy_title');
        $description = Page::getPageContent('user_privacy_description');
        return view('Website.pages.student.std-academy-policy', [
            'title' => $title,
            'description' => $description,
        ]);
    }


    public function stdAbsence()
    {
        $title = Page::getPageContent('user_absence_title');
        $description = Page::getPageContent('user_absence_description');
        return view('Website.pages.student.std-absence', [
            'title' => $title,
            'description' => $description
        ]);
    }

    public function examps()
    {
        $title = Page::getPageContent('user_exams_title');
        $description = Page::getPageContent('user_exams_description');
        return view('Website.pages.student.std-examps', [
            'title' => $title,
            'description' => $description
        ]);
    }

    public function subscrption()
    {
        $title = Page::getPageContent('user_subscriptions_title');
        $description = Page::getPageContent('user_subscriptions_description');
        return view('Website.pages.student.std-subscriptions', [
            'title' => $title,
            'description' => $description
        ]);
    }

    public function stdCertificatesHonors()
    {
        $title = Page::getPageContent('user_certificates_title');
        $description = Page::getPageContent('user_certificates_description');
        return view('Website.pages.student.std-certificates-honors', [
            'title' => $title,
            'description' => $description
        ]);
    }

    public function qualifications()
    {
        $qualifications = Qualification::data()->where('user_id', auth()->id())->get();
        return view('Website.pages.student.std-qualifications', [
            'qualifications' => $qualifications
        ]);
    }

    public function accountDetails()
    {
        return view('Website.pages.student.std-account-details');
    }
}
