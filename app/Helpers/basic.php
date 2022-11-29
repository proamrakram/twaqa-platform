<?php

use App\Models\City;
use App\Models\Country;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\User;
use App\Models\WebsiteSetting;

if (!function_exists('getUserName')) {
    function getUserName()
    {
        $user = auth()->user();
        if ($user) {
            return $user->full_name;
        }
        return 'خلل في جلب الاسم';
    }
}

if (!function_exists('getUserImage')) {
    function getUserImage()
    {
        $user = auth()->user();
        if ($user) {
            return $user->img;
        }
        return 'خلل في جلب الصورة';
    }
}


if (!function_exists('getCities')) {
    function getCities()
    {
        return City::data()->get();
    }
}

if (!function_exists('getTeachers')) {
    function getTeachers()
    {
        return User::where('user_type', 'teacher')->get();
    }
}

if (!function_exists('getCoursesTypes')) {
    function getCoursesTypes()
    {
        return CourseType::all();
    }
}


if (!function_exists('getCourses')) {
    function getCourses()
    {
        return Course::all();
    }
}


if (!function_exists('getCountries')) {
    function getCountries()
    {
        return Country::data()->get();
    }
}

if (!function_exists('getCountryName')) {
    function getCountryName($country_id)
    {
        $country = Country::find($country_id);
        if ($country) {
            return $country->name;
        }
        return 'خلل في جلب الاسم';
    }
}

if (!function_exists('getTeacherCourses')) {
    function getTeacherCourses($teacher_id)
    {
        return Course::where('teacher_id', $teacher_id)->get();
    }
}


if (!function_exists('getOutstandingTeachers')) {
    function getOutstandingTeachers()
    {
        return User::where('user_type', 'teacher')->get();
    }
}


if (!function_exists('getLink')) {
    function getLink($type)
    {
        $link = WebsiteSetting::where('key', $type)->first();
        if ($link) {
            return $link->value;
        } else {
            return null;
        }
    }
}





if (!function_exists('getCitiesCountry')) {
    function getCitiesCountry($country_id)
    {
        $country = Country::find($country_id);
        if ($country) {
            return $country->cities;
        }
    }
}

if (!function_exists('getStudents')) {
    function getStudents($course)
    {
        $students_ids = $course->students;
        return User::findMany($students_ids);
    }
}
