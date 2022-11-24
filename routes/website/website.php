<?php

use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ServicesController;
use App\Http\Controllers\Website\StdController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/setLang', function () {
    return redirect()->back()->with('message', 'لقد تم تغيراللغة بنجاح');
})->name('set.lang');


Route::group([
    // 'middleware' => ['auth'],
    'controller' => HomeController::class,
    'as' => '',
    'prefix' => '',
], function () {

    Route::get('/', 'index')->name('index');
    Route::post('/get-cities-by-country', 'getCitiesByCountry')->name('get.cities.by.country');
    Route::get('instructions', 'instructions')->name('instructions');
    Route::get('absence-policy', 'absencePolicy')->name('absence.policy');

    Route::get('/about-us', 'aboutUs')->name('about.us');
    Route::get('/vision-mision', 'visionMision')->name('vision.mision');
    Route::get('/courses', 'courses')->name('courses');
    Route::get('/packages', 'packages')->name('packages');
    Route::get('/vid-watch', 'vidWatch')->name('vid_watch');
    Route::get('/contact-us', 'contactUs')->name('contact_us');
    Route::get('/jobs', 'jobs')->name('jobs');
    Route::get('/all-subjects', 'allSubject')->name('all.subject');
});


Route::group([
    'middleware' => ['auth'],
    'controller' => HomeController::class,
    'as' => '',
    'prefix' => '',
], function () {

    #Teacher Pages
    Route::get('/teachers', 'teachers')->name('teachers');
    Route::get('/teacher-home', 'teacherHome')->name('teacher.home');
    Route::get('/teacher-data-basic', 'teacherDataBasic')->name('teacher.data.basic');
    Route::get('/teacher-qualifications', 'teacherQualifications')->name('teacher.qualifications');
    Route::get('/teacher-certificates', 'teacherCertificates')->name('teacher.certificates');
    Route::get('/teacher-ejazat', 'teacherEjazat')->name('teacher.ejazat');
    Route::get('/teacher-video-audio', 'teacherVideoAudio')->name('teacher.video.audio');
    Route::get('/teacher-account-details', 'teacherAccountDetails')->name('teacher.account.details');
    Route::get('/teacher-salary', 'teacherSalary')->name('teacher.salary');
    Route::get('/teacher-courses', 'teacherCourses')->name('teacher-courses');
    Route::get('/teacher-stds', 'teacherStds')->name('teacher.stds');
    Route::get('/teacher-single/{teacher}', 'teacherSingle')->name('teacher.single');

    Route::get('/books', 'books')->name('books');
    Route::get('/videos', 'videos')->name('videos');
    Route::get('/certificates', 'certificates')->name('certificates');
    Route::get('/subjects', 'subjects')->name('subjects');
    Route::get('/teacher-forms', 'teacherForms')->name('teacher.forms');

    Route::get('/calander-lessons', 'calanderLessons')->name('calander.lessons');
});

Route::group([
    'middleware' => ['auth'],
    'controller' => ServicesController::class,
    'as' => '',
    'prefix' => '',
], function () {
    Route::post('/update-teacher/{form}/{id?}', 'updateTeacher')->name('teacher.update');
    Route::post('/store-teacher/{form}', 'storeTeacher')->name('teacher.store');
    Route::get('/delete-teacher/{form}/{id?}', 'deleteTeacher')->name('teacher.delete');

    Route::withoutMiddleware('auth')->group(function () {
        Route::post('/store-call-us-message', 'storeCallUsMessage')->name('store.call.us.message');
    });
});



Route::group([
    'middleware' => ['auth', 'student'],
    'controller' => StdController::class,
    'as' => 'std.',
    'prefix' => 'std',
], function () {
    Route::get('/home', 'home')->name('home');
    Route::get('/data-basic', 'dataBasic')->name('data.basic');
    // Route::get('/teacher.data.basic', '')->name('teacher.data.basic');
    Route::get('/books', 'books')->name('books');
    Route::get('/posts', 'posts')->name('posts');
    Route::get('/balance', 'balance')->name('balance');
    Route::get('/achievements', 'achievements')->name('achievements');
    Route::get('/certificates', 'certificates')->name('certificates');
    Route::get('/subscrption', 'subscrption')->name('subscrption');
    Route::get('/chat', 'chat')->name('chat');
    Route::get('/videos', 'videos')->name('videos');
    Route::get('/teacher-quran', 'teacherQuran')->name('teacher.quran');
    Route::get('/courses', 'courses')->name('courses');
    Route::get('/academy-policy', 'academyPolicy')->name('academy.policy');
    Route::get('/examps', 'examps')->name('examps');
    Route::get('/absence', 'stdAbsence')->name('absence');
    Route::get('/std-certificates-honors', 'stdCertificatesHonors')->name('certificates.honors');
});



















Route::group([
    'middleware' => ['guest'],
    'controller' => HomeController::class,
    'as' => '',
    'prefix' => '',
], function () {
    Route::get('/sign-in', 'signIn')->name('signin');
    Route::get('/sign-up', 'signUp')->name('signup');
});
