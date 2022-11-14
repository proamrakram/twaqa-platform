<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\UserService;
use App\Models\City;
use App\Models\Course;
use App\Models\CourseType;
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
        $courses_types = CourseType::all();
        return view('Website.pages.index', compact(['courses_types']));
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

    public function getCitiesByCountry(Request $request)
    {
        $data['states'] = City::where('status', 'active')->where("country_id", $request->country_id)->get();
        return response()->json($data);
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
        return view('Website.pages.certificates');
    }

    public function  books()
    {
        return view('Website.pages.books');
    }

    public function  videos()
    {
        return view('Website.pages.videos');
    }

    public function instructions()
    {
        return view('Website.pages.instructions');
    }

    public function absencePolicy()
    {
        return view('Website.pages.absence-policy');
    }





    #Main Pages
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
        $courses = Course::all();
        return view('Website.pages.courses', compact(['courses']));
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
