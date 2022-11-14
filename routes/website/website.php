<?php

use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ServicesController;
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

Route::controller(HomeController::class)->prefix('')->as('')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/get-cities-by-country', 'getCitiesByCountry')->name('get.cities.by.country');
    Route::get('instructions', 'instructions')->name('instructions');
    Route::get('absence-policy', 'absencePolicy')->name('absence.policy');


    Route::middleware('auth')->group(function () {
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

        #Teacher Updating Routes
        Route::controller(ServicesController::class)->group(function () {
            Route::post('/update-teacher/{form}/{id?}', 'updateTeacher')->name('teacher.update');
            Route::post('/store-teacher/{form}', 'storeTeacher')->name('teacher.store');
            Route::get('/delete-teacher/{form}/{id?}', 'deleteTeacher')->name('teacher.delete');
        });
    });


    Route::get('/about-us', 'aboutUs')->name('about.us');
    Route::get('/vision-mision', 'visionMision')->name('vision.mision');
    Route::get('/courses', 'courses')->name('courses');
    Route::get('/packages', 'packages')->name('packages');
    Route::get('/vid-watch', 'vidWatch')->name('vid_watch');
    Route::get('/contact-us', 'contactUs')->name('contact_us');
    Route::get('/jobs', 'jobs')->name('jobs');
    Route::get('/all-subjects', 'allSubject')->name('all.subject');

    #Auth
    Route::middleware('guest')->group(function () {
        Route::get('/sign-in', 'signIn')->name('signin');
        Route::get('/sign-up', 'signUp')->name('signup');
    });
});
