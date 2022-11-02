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

    Route::middleware('auth')->group(function () {
        #Teacher Pages
        Route::get('/teachers', 'teachers')->name('teachers');
        Route::get('/teacher-data-basic', 'teacherDataBasic')->name('teacher.data.basic');

        #Teacher Updating Routes
        Route::controller(ServicesController::class)->group(function () {
            Route::post('/update-teacher/{form}', 'updateTeacher')->name('teacher.update');
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
