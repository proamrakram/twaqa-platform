<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherService extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    #Teacher
    public function teachers()
    {
        $teachers = User::where('user_type', 'teacher')->get();
        return view('Website.pages.teacher.teachers', compact(['teachers']));
    }

    public function teacherHome()
    {
        return view('Website.pages.teacher.teacher-home');
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
        $courses = Course::where('teacher_id', $user->id)->get();
        return view('Website.pages.teacher.teacher-courses', compact(['user', 'courses']));
    }

    public function teacherStds()
    {
        $user = auth()->user();
        $courses_stds_ids = Course::where('teacher_id', $user->id)->get()->pluck('students')->toArray()[0];
        $students = User::findMany($courses_stds_ids);
        return view('Website.pages.teacher.teacher-stds', compact(['students']));
    }

    public function teacherSingle(User $teacher)
    {
        return view('Website.pages.teacher.teacher-single', compact(['teacher']));
    }

    public function calanderLessons()
    {
        return view('Website.pages.teacher.calander-lessons');
    }

    public function  books()
    {
        return view('Website.pages.teacher.books');
    }

    public function  videos()
    {
        dd('videos');
        return view('Website.pages.teacher-videos');
    }

    public function subjects()
    {
        return view('Website.pages.teacher.subjects');
    }

    public function teacherForms()
    {
        return view('Website.pages.teacher.teacher-forms');
    }

    public function certificates()
    {
        return view('Website.pages.teacher.certificates');
    }
}
