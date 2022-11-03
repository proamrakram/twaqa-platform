<?php

use App\Models\User;

if (!function_exists('check_qualifications')) {
    function check_qualifications()
    {
        $user = auth()->user();
        if ($user) {
            $check = User::where('id', $user->id)->first()->qualifications->where('is_delete', '0')->count();
            return $check;
        }
        return false;
    }
}
