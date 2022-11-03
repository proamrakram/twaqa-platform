<?php

use App\Models\User;

if (!function_exists('check_ejazats')) {
    function check_ejazats()
    {
        $user = auth()->user();
        if ($user) {
            $check = User::where('id', $user->id)->first()->ejazats->where('is_delete', '0')->count();
            return $check;
        }
        return true;
    }
}
