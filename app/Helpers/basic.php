<?php

use App\Models\User;

if (!function_exists('getUserName')) {
    function getUserName()
    {
        $user = auth()->user();
        if ($user) {
            return $user->name;
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
