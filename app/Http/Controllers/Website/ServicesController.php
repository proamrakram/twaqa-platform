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

    public function updateTeacher($form, $id = null)
    {
        if ($form == 'image') {
            return $this->user_service->teacherImage();
        } elseif ($form == 'basic') {
            return $this->user_service->teacherBasic();
        } elseif ($form == 'links') {
            return $this->user_service->teacherLinks();
        } elseif ($form == 'calling') {
            return $this->user_service->teacherPhoneNumbers();
        } elseif ($form == 'update-qualification') {
            return $this->user_service->updateTeacherQualifications($id);
        } elseif ($form == 'teacher-certificate') {
            return $this->user_service->updateTeacherCertificates($id);
        } elseif ($form == 'ejazats') {
            return $this->user_service->updateTeacherEjazats($id);
        } elseif ($form == 'teacher-video-audio') {
            return $this->user_service->updateTeacherVideoAudio($id);
        } elseif ($form == 'email') {
            return $this->user_service->updateTeacherEmail();
        } elseif ($form == 'password') {
            return $this->user_service->updateTeacherPassword();
        }
    }

    public function storeTeacher($form)
    {
        if ($form == 'qualifications') {
            return $this->user_service->storeTeacherQualifications();
        } elseif ($form == 'teacher-certificate') {
            return $this->user_service->storeTeacherCertificates();
        } elseif ($form == 'ejazats') {
            return $this->user_service->storeTeacherEjazats();
        } elseif ($form == 'teacher-video-audio') {
            return $this->user_service->storeTeacherVideoAudio();
        }
    }

    public function deleteTeacher($form, $id)
    {
        if ($form == 'qualifications') {
            return $this->user_service->deleteTeacherQualification($id);
        } elseif ($form == 'teacher-certificate') {
            return $this->user_service->deleteTeacherCertificate($id);
        } elseif ($form == 'ejazats') {
            return $this->user_service->deleteTeacherEjazats($id);
        } elseif ($form == 'teacher-video-audio') {
            return $this->user_service->deleteTeacherVideoAudio($id);
        }
    }
}
