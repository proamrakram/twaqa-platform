<?php

use App\Models\User;

if (!function_exists('check_basic_teacher_data')) {
    function check_basic_teacher_data()
    {
        $user = auth()->user();
        if ($user) {
            $check = User::where('id', $user->id)->first()->EmptyBasicTeacherData();
            return $check;
        }
        return false;
    }
}
