<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\UserService;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    protected $user_service;

    public function __construct(UserService $user_service)
    {
        $this->user_service = $user_service;
    }

    public function updateTeacher($form)
    {
        if ($form == 'image') {
            return $this->user_service->teacherImage();
        } elseif ($form == 'basic') {
            return $this->user_service->teacherBasic();
        } elseif ($form == 'links') {
            return $this->user_service->teacherLinks();
        } elseif ($form == 'calling') {
            return $this->user_service->teacherPhoneNumbers();
        }
    }
}
