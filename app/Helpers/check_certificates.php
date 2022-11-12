<?php

use App\Models\User;

if (!function_exists('check_certificates')) {
    function check_certificates()
    {
        $user = auth()->user();
        if ($user) {
            $check = User::where('id', $user->id)->first()->teacherCertificates->where('is_delete', '0')->count();
            return $check;
        }
        return false;
    }
}
