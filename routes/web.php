<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index']);

require __DIR__ . '/website/website.php';


Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
Route::get('lang/{lang}', [App\Http\Controllers\LanguageController::class, 'switchLang'])->name('lang.switch');


Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/settings/global', [App\Http\Controllers\AdminPanel\WebsiteSettingsController::class, 'global'])->name('admin.settings.global');
    Route::post('/settings/global', [App\Http\Controllers\AdminPanel\WebsiteSettingsController::class, 'update_global'])->name('admin.settings.update-global');
    Route::get('/settings/social', [App\Http\Controllers\AdminPanel\WebsiteSettingsController::class, 'social_media_links'])->name('admin.settings.social');
    Route::post('/settings/social', [App\Http\Controllers\AdminPanel\WebsiteSettingsController::class, 'update_social_media_links'])->name('admin.settings.update-social');
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/pages/about', [App\Http\Controllers\AdminPanel\PagesController::class, 'about'])->name('admin.pages.about');
    Route::post('/pages/about', [App\Http\Controllers\AdminPanel\PagesController::class, 'update_about'])->name('admin.pages.update-about');
    Route::get('/pages/alert-tech', [App\Http\Controllers\AdminPanel\PagesController::class, 'alert_tech'])->name('admin.pages.alert-tech');
    Route::post('/pages/alert-tech', [App\Http\Controllers\AdminPanel\PagesController::class, 'update_alert_tech'])->name('admin.pages.update-alert-tech');
    Route::get('/pages/faq', [App\Http\Controllers\AdminPanel\PagesController::class, 'faq'])->name('admin.pages.faq');
    Route::post('/pages/faq', [App\Http\Controllers\AdminPanel\PagesController::class, 'update_faq'])->name('admin.pages.update-faq');
    Route::get('/pages/teacher-absence-policy', [App\Http\Controllers\AdminPanel\PagesController::class, 'teacher_absence_policy'])->name('admin.pages.teacher-absence-policy');
    Route::post('/pages/teacher-absence-policy', [App\Http\Controllers\AdminPanel\PagesController::class, 'update_teacher_absence_policy'])->name('admin.pages.update-teacher-absence-policy');
    Route::get('/pages/teacher-instructions', [App\Http\Controllers\AdminPanel\PagesController::class, 'teacher_instructions'])->name('admin.pages.teacher-instructions');
    Route::post('/pages/teacher-instructions', [App\Http\Controllers\AdminPanel\PagesController::class, 'update_teacher_instructions'])->name('admin.pages.update-teacher-instructions');
    Route::get('/pages/user-privacy', [App\Http\Controllers\AdminPanel\PagesController::class, 'user_privacy'])->name('admin.pages.user-privacy');
    Route::post('/pages/user-privacy', [App\Http\Controllers\AdminPanel\PagesController::class, 'update_user_privacy'])->name('admin.pages.update-user-privacy');
    Route::get('/pages/user-absence', [App\Http\Controllers\AdminPanel\PagesController::class, 'user_absence'])->name('admin.pages.user-absence');
    Route::post('/pages/user-absence', [App\Http\Controllers\AdminPanel\PagesController::class, 'update_user_absence'])->name('admin.pages.update-user-absence');
    Route::get('/pages/user-exams', [App\Http\Controllers\AdminPanel\PagesController::class, 'user_exams'])->name('admin.pages.user-exams');
    Route::post('/pages/user-exams', [App\Http\Controllers\AdminPanel\PagesController::class, 'update_user_exams'])->name('admin.pages.update-user-exams');
    Route::get('/pages/user-subscriptions', [App\Http\Controllers\AdminPanel\PagesController::class, 'user_subscriptions'])->name('admin.pages.user-subscriptions');
    Route::post('/pages/user-subscriptions', [App\Http\Controllers\AdminPanel\PagesController::class, 'update_user_subscriptions'])->name('admin.pages.update-user-subscriptions');
    Route::get('/pages/user-certificates', [App\Http\Controllers\AdminPanel\PagesController::class, 'user_certificates'])->name('admin.pages.user-certificates');
    Route::post('/pages/user-certificates', [App\Http\Controllers\AdminPanel\PagesController::class, 'update_user_certificates'])->name('admin.pages.update-user-certificates');
    Route::get('/pages/testimonial', [App\Http\Controllers\AdminPanel\PagesController::class, 'testimonial'])->name('admin.pages.testimonial');
    Route::post('/pages/testimonial', [App\Http\Controllers\AdminPanel\PagesController::class, 'update_testimonial'])->name('admin.pages.update-testimonial');
    Route::get('/pages/vision-message', [App\Http\Controllers\AdminPanel\PagesController::class, 'vision_message'])->name('admin.pages.vision-message');
    Route::post('/pages/vision-message', [App\Http\Controllers\AdminPanel\PagesController::class, 'update_vision_message'])->name('admin.pages.update-vision-message');
    /////////////////////////////////////////////
    Route::get('/courses-types', [App\Http\Controllers\AdminPanel\CoursesTypesController::class, 'index'])->name('admin.courses-types.index');
    //Route::get('/courses-types/create', [App\Http\Controllers\AdminPanel\CoursesTypesController::class, 'create'])->name('admin.courses-types.create');
    Route::post('/courses-types/store', [App\Http\Controllers\AdminPanel\CoursesTypesController::class, 'store'])->name('admin.courses-types.store');
    Route::get('/courses-types/edit/{id}', [App\Http\Controllers\AdminPanel\CoursesTypesController::class, 'edit'])->name('admin.courses-types.edit');
    Route::post('/courses-types/update/{id}', [App\Http\Controllers\AdminPanel\CoursesTypesController::class, 'update'])->name('admin.courses-types.update');
    Route::get('/courses-types/delete/{id}', [App\Http\Controllers\AdminPanel\CoursesTypesController::class, 'destroy'])->name('admin.courses-types.delete');
    Route::get('/courses-types/change-status/{id}', [App\Http\Controllers\AdminPanel\CoursesTypesController::class, 'change_status'])->name('admin.courses-types.changeStatus');
    /////////////////////////////////////////////
    Route::get('/lessons-types', [App\Http\Controllers\AdminPanel\LessonsTypesController::class, 'index'])->name('admin.lessons-types.index');
    //Route::get('/lessons-types/create', [App\Http\Controllers\AdminPanel\LessonsTypesController::class, 'create'])->name('admin.lessons-types.create');
    Route::post('/lessons-types/store', [App\Http\Controllers\AdminPanel\LessonsTypesController::class, 'store'])->name('admin.lessons-types.store');
    Route::get('/lessons-types/edit/{id}', [App\Http\Controllers\AdminPanel\LessonsTypesController::class, 'edit'])->name('admin.lessons-types.edit');
    Route::post('/lessons-types/update/{id}', [App\Http\Controllers\AdminPanel\LessonsTypesController::class, 'update'])->name('admin.lessons-types.update');
    Route::get('/lessons-types/delete/{id}', [App\Http\Controllers\AdminPanel\LessonsTypesController::class, 'destroy'])->name('admin.lessons-types.delete');
    Route::get('/lessons-types/change-status/{id}', [App\Http\Controllers\AdminPanel\LessonsTypesController::class, 'change_status'])->name('admin.lessons-types.changeStatus');
    /////////////////////////////////////////////
    Route::get('/courses-categories', [App\Http\Controllers\AdminPanel\CoursesCategoriesController::class, 'index'])->name('admin.courses-categories.index');
    Route::get('/courses-categories/create', [App\Http\Controllers\AdminPanel\CoursesCategoriesController::class, 'create'])->name('admin.courses-categories.create');
    Route::post('/courses-categories/store', [App\Http\Controllers\AdminPanel\CoursesCategoriesController::class, 'store'])->name('admin.courses-categories.store');
    Route::get('/courses-categories/edit/{id}', [App\Http\Controllers\AdminPanel\CoursesCategoriesController::class, 'edit'])->name('admin.courses-categories.edit');
    Route::post('/courses-categories/update/{id}', [App\Http\Controllers\AdminPanel\CoursesCategoriesController::class, 'update'])->name('admin.courses-categories.update');
    Route::get('/courses-categories/delete/{id}', [App\Http\Controllers\AdminPanel\CoursesCategoriesController::class, 'destroy'])->name('admin.courses-categories.delete');
    Route::get('/courses-categories/change-status/{id}', [App\Http\Controllers\AdminPanel\CoursesCategoriesController::class, 'change_status'])->name('admin.courses-categories.changeStatus');
    /////////////////////////////////////////////
    Route::get('/courses', [App\Http\Controllers\AdminPanel\CoursesController::class, 'index'])->name('admin.courses.index');
    Route::get('/courses/create', [App\Http\Controllers\AdminPanel\CoursesController::class, 'create'])->name('admin.courses.create');
    Route::post('/courses/store', [App\Http\Controllers\AdminPanel\CoursesController::class, 'store'])->name('admin.courses.store');
    Route::get('/courses/edit/{id}', [App\Http\Controllers\AdminPanel\CoursesController::class, 'edit'])->name('admin.courses.edit');
    Route::post('/courses/update/{id}', [App\Http\Controllers\AdminPanel\CoursesController::class, 'update'])->name('admin.courses.update');
    Route::get('/courses/delete/{id}', [App\Http\Controllers\AdminPanel\CoursesController::class, 'destroy'])->name('admin.courses.delete');
    Route::get('/courses/change-status/{id}', [App\Http\Controllers\AdminPanel\CoursesController::class, 'change_status'])->name('admin.courses.changeStatus');
    /////////////////////////////////////////////
    Route::get('/notifications', [App\Http\Controllers\AdminPanel\NotificationsController::class, 'index'])->name('admin.notifications.index');
    Route::get('/notifications/create', [App\Http\Controllers\AdminPanel\NotificationsController::class, 'create'])->name('admin.notifications.create');
    Route::post('/notifications/store', [App\Http\Controllers\AdminPanel\NotificationsController::class, 'store'])->name('admin.notifications.store');
    Route::get('/notifications/edit/{id}', [App\Http\Controllers\AdminPanel\NotificationsController::class, 'edit'])->name('admin.notifications.edit');
    Route::post('/notifications/update/{id}', [App\Http\Controllers\AdminPanel\NotificationsController::class, 'update'])->name('admin.notifications.update');
    Route::get('/notifications/delete/{id}', [App\Http\Controllers\AdminPanel\NotificationsController::class, 'destroy'])->name('admin.notifications.delete');
    Route::get('/notifications/change-status/{id}', [App\Http\Controllers\AdminPanel\NotificationsController::class, 'change_status'])->name('admin.notifications.changeStatus');
    /////////////////////////////////////////////
    Route::get('/profile', [App\Http\Controllers\AdminPanel\ProfileController::class, 'index'])->name('admin.profile');
    Route::post('/profile/update', [App\Http\Controllers\AdminPanel\ProfileController::class, 'update'])->name('admin.profile.update');
    Route::post('/profile/update-password', [App\Http\Controllers\AdminPanel\ProfileController::class, 'update_password'])->name('admin.profile.update-password');
    /////////////////////////////////////////////
    Route::get('/students', [App\Http\Controllers\AdminPanel\StudentsController::class, 'index'])->name('admin.students.index');
    Route::get('/students/create', [App\Http\Controllers\AdminPanel\StudentsController::class, 'create'])->name('admin.students.create');
    Route::post('/students/store', [App\Http\Controllers\AdminPanel\StudentsController::class, 'store'])->name('admin.students.store');
    Route::get('/students/edit/{id}', [App\Http\Controllers\AdminPanel\StudentsController::class, 'edit'])->name('admin.students.edit');
    Route::post('/students/update/{id}', [App\Http\Controllers\AdminPanel\StudentsController::class, 'update'])->name('admin.students.update');
    Route::post('/students/update-password/{id}', [App\Http\Controllers\AdminPanel\StudentsController::class, 'update_password'])->name('admin.students.update-password');
    Route::get('/students/delete/{id}', [App\Http\Controllers\AdminPanel\StudentsController::class, 'destroy'])->name('admin.students.delete');
    Route::get('/students/change-status/{id}', [App\Http\Controllers\AdminPanel\StudentsController::class, 'change_status'])->name('admin.students.changeStatus');
    /////////////////////////////////////////////
    Route::get('/teachers', [App\Http\Controllers\AdminPanel\TeachersController::class, 'index'])->name('admin.teachers.index');
    Route::get('/teachers/new', [App\Http\Controllers\AdminPanel\TeachersController::class, 'new'])->name('admin.teachers.new');
    Route::get('/teachers/create', [App\Http\Controllers\AdminPanel\TeachersController::class, 'create'])->name('admin.teachers.create');
    Route::post('/teachers/store', [App\Http\Controllers\AdminPanel\TeachersController::class, 'store'])->name('admin.teachers.store');
    Route::get('/teachers/edit/{id}', [App\Http\Controllers\AdminPanel\TeachersController::class, 'edit'])->name('admin.teachers.edit');
    Route::post('/teachers/update/{id}', [App\Http\Controllers\AdminPanel\TeachersController::class, 'update'])->name('admin.teachers.update');
    Route::post('/teachers/update-password/{id}', [App\Http\Controllers\AdminPanel\TeachersController::class, 'update_password'])->name('admin.teachers.update-password');
    Route::post('/teachers/update-certificates/{id}', [App\Http\Controllers\AdminPanel\TeachersController::class, 'update_certificates'])->name('admin.teachers.update-certificates');
    Route::post('/teachers/update-qualifications/{id}', [App\Http\Controllers\AdminPanel\TeachersController::class, 'update_qualifications'])->name('admin.teachers.update-qualifications');
    Route::post('/teachers/update-working-hours/{id}', [App\Http\Controllers\AdminPanel\TeachersController::class, 'update_working_hours'])->name('admin.teachers.update-working-hours');
    Route::get('/teachers/delete/{id}', [App\Http\Controllers\AdminPanel\TeachersController::class, 'destroy'])->name('admin.teachers.delete');
    Route::get('/teachers/change-status/{id}', [App\Http\Controllers\AdminPanel\TeachersController::class, 'change_status'])->name('admin.teachers.changeStatus');
    /////////////////////////////////////////////
    Route::get('/supervisors', [App\Http\Controllers\AdminPanel\SupervisorsController::class, 'index'])->name('admin.supervisors.index');
    Route::get('/supervisors/create', [App\Http\Controllers\AdminPanel\SupervisorsController::class, 'create'])->name('admin.supervisors.create');
    Route::post('/supervisors/store', [App\Http\Controllers\AdminPanel\SupervisorsController::class, 'store'])->name('admin.supervisors.store');
    Route::get('/supervisors/edit/{id}', [App\Http\Controllers\AdminPanel\SupervisorsController::class, 'edit'])->name('admin.supervisors.edit');
    Route::post('/supervisors/update/{id}', [App\Http\Controllers\AdminPanel\SupervisorsController::class, 'update'])->name('admin.supervisors.update');
    Route::post('/supervisors/update-password/{id}', [App\Http\Controllers\AdminPanel\SupervisorsController::class, 'update_password'])->name('admin.supervisors.update-password');
    Route::post('/supervisors/update-certificates/{id}', [App\Http\Controllers\AdminPanel\SupervisorsController::class, 'update_certificates'])->name('admin.supervisors.update-certificates');
    Route::post('/supervisors/update-qualifications/{id}', [App\Http\Controllers\AdminPanel\SupervisorsController::class, 'update_qualifications'])->name('admin.supervisors.update-qualifications');
    Route::post('/supervisors/update-working-hours/{id}', [App\Http\Controllers\AdminPanel\SupervisorsController::class, 'update_working_hours'])->name('admin.supervisors.update-working-hours');
    Route::get('/supervisors/delete/{id}', [App\Http\Controllers\AdminPanel\SupervisorsController::class, 'destroy'])->name('admin.supervisors.delete');
    Route::get('/supervisors/change-status/{id}', [App\Http\Controllers\AdminPanel\SupervisorsController::class, 'change_status'])->name('admin.supervisors.changeStatus');

    /////////////////////////////////////////////
    Route::get('/lessons', [App\Http\Controllers\AdminPanel\LessonsController::class, 'index'])->name('admin.lessons.index');
    Route::get('/lessons/edit-time/{id}', [App\Http\Controllers\AdminPanel\LessonsController::class, 'edit_time'])->name('admin.lessons.edit-time');
    Route::post('/lessons/update-time/{id}', [App\Http\Controllers\AdminPanel\LessonsController::class, 'update_time'])->name('admin.lessons.update-time');
    Route::get('/lessons/edit-status/{id}', [App\Http\Controllers\AdminPanel\LessonsController::class, 'edit_status'])->name('admin.lessons.edit-status');
    Route::post('/lessons/update-status/{id}', [App\Http\Controllers\AdminPanel\LessonsController::class, 'update_status'])->name('admin.lessons.update-status');

    Route::post('/get-working-hours', [App\Http\Controllers\AdminPanel\CoursesController::class, 'getWorkingHours'])->name('get-working-hours');


    Route::post('/get-users-by-type', [App\Http\Controllers\HomeController::class, 'getUser'])->name('get-users-by-type');
    Route::post('/get-cities-by-country', [App\Http\Controllers\AdminPanel\StoresController::class, 'getCity'])->name('get-cities-by-country');
    /////////////////////////////////////////////
    Route::get('/currencies', [App\Http\Controllers\AdminPanel\CurrenciesController::class, 'index'])->name('admin.currencies.index');
    Route::post('/currencies/default', [App\Http\Controllers\AdminPanel\CurrenciesController::class, 'default'])->name('admin.currencies.default');
    Route::get('/currencies/edit/{id}', [App\Http\Controllers\AdminPanel\CurrenciesController::class, 'edit'])->name('admin.currencies.edit');
    Route::post('/currencies/update/{id}', [App\Http\Controllers\AdminPanel\CurrenciesController::class, 'update'])->name('admin.currencies.update');
    Route::get('/balance-period-hold', [App\Http\Controllers\AdminPanel\WebsiteSettingsController::class, 'balance_period_hold'])->name('admin.balance-period-hold');
    Route::post('/balance-period-hold', [App\Http\Controllers\AdminPanel\WebsiteSettingsController::class, 'update_balance_period_hold'])->name('admin.balance-period-hold.update');
    /////////////////////////////////////////////
    Route::get('/countries', [App\Http\Controllers\AdminPanel\CountriesController::class, 'index'])->name('admin.countries.index');
    Route::get('/countries/create', [App\Http\Controllers\AdminPanel\CountriesController::class, 'create'])->name('admin.countries.create');
    Route::post('/countries/store', [App\Http\Controllers\AdminPanel\CountriesController::class, 'store'])->name('admin.countries.store');
    Route::get('/countries/edit/{id}', [App\Http\Controllers\AdminPanel\CountriesController::class, 'edit'])->name('admin.countries.edit');
    Route::post('/countries/update/{id}', [App\Http\Controllers\AdminPanel\CountriesController::class, 'update'])->name('admin.countries.update');
    Route::get('/countries/delete/{id}', [App\Http\Controllers\AdminPanel\CountriesController::class, 'destroy'])->name('admin.countries.delete');
    Route::get('/countries/change-status/{id}', [App\Http\Controllers\AdminPanel\CountriesController::class, 'change_status'])->name('admin.countries.changeStatus');
    /////////////////////////////////////////////
    Route::get('/cities', [App\Http\Controllers\AdminPanel\CitiesController::class, 'index'])->name('admin.cities.index');
    Route::get('/cities/create', [App\Http\Controllers\AdminPanel\CitiesController::class, 'create'])->name('admin.cities.create');
    Route::post('/cities/store', [App\Http\Controllers\AdminPanel\CitiesController::class, 'store'])->name('admin.cities.store');
    Route::get('/cities/edit/{id}', [App\Http\Controllers\AdminPanel\CitiesController::class, 'edit'])->name('admin.cities.edit');
    Route::post('/cities/update/{id}', [App\Http\Controllers\AdminPanel\CitiesController::class, 'update'])->name('admin.cities.update');
    Route::get('/cities/delete/{id}', [App\Http\Controllers\AdminPanel\CitiesController::class, 'destroy'])->name('admin.cities.delete');
    Route::get('/cities/change-status/{id}', [App\Http\Controllers\AdminPanel\CitiesController::class, 'change_status'])->name('admin.cities.changeStatus');
    /////////////////////////////////////////////



    Route::get('/reports/profits', [App\Http\Controllers\AdminPanel\ReportsController::class, 'profits'])->name('admin.reports.profits');
});
