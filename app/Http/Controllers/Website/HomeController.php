<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\UserService;
use App\Models\City;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseType;
use App\Models\Faq;
use App\Models\LessonType;
use App\Models\Page;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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

        $faqs = Faq::getQuestions();
        $testimonials = Testimonial::lang();
        $courses_categories = CourseCategory::active()->get();
        $lessons_types = LessonType::active()->get();

        $vision = Page::getPageContent('vision');
        $message = Page::getPageContent('message');
        $about_description = Page::getPageContent('about_description');

        return view('Website.pages.main-web.index', compact(['courses_types', 'faqs', 'testimonials', 'courses_categories', 'lessons_types', 'vision', 'message', 'about_description']));
    }

    public function getCitiesByCountry(Request $request)
    {
        $data['states'] = City::where('status', 'active')->where("country_id", $request->country_id)->get();
        return response()->json($data);
    }

    public function instructions()
    {
        $title = Page::getPageContent('teacher_instructions_title');
        $description = Page::getPageContent('teacher_instructions_description');

        return view('Website.pages.main-web.instructions', [
            'description' => $description,
            'title' => $title,
        ]);
    }

    public function absencePolicy()
    {
        $title = Page::getPageContent('teacher_absence_policy_title');
        $description = Page::getPageContent('teacher_absence_policy_description');

        return view('Website.pages.teacher.absence-policy', [
            'title' => $title,
            'description' => $description,
        ]);
    }

    #Main Pages
    public function aboutUs()
    {
        $title = Page::getPageContent('about_title');
        $description = Page::getPageContent('about_description');
        return view('Website.pages.main-web.about_us', [
            'title' => $title,
            'description' => $description,
        ]);
    }

    public function visionMision()
    {

        $title = Page::getPageContent('vision_title');
        $vision = Page::getPageContent('vision');
        $message = Page::getPageContent('message');

        return view('Website.pages.main-web.vision_mision', [
            'title' => $title,
            'vision' => $vision,
            'message' => $message,
        ]);
    }

    public function courses()
    {
        $courses = Course::all();
        return view('Website.pages.main-web.courses', compact(['courses']));
    }




    public function packages()
    {
        return view('Website.pages.main-web.packages');
    }

    public function vidWatch()
    {
        return view('Website.pages.main-web.vid_watch');
    }

    public function contactUs()
    {
        return view('Website.pages.main-web.contact_us');
    }

    public function jobs()
    {
        return view('Website.pages.main-web.jobs');
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
        return view('Website.pages.main-web.all_subjects');
    }
}
