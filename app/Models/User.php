<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'age',
        'img',
        'full_name',
        'first_name',
        'second_name',
        'country',
        'state',
        'phonenumber',
        'phonenumber2',
        'whatsapp',
        'facebook',
        'twitter',
        'position',
        'parent_position',
        'qualification',
        'registered_at',
        'department',
        'category',
        'gender',
        'user_type',
        'is_delete',
        'available_balance',
        'suspended_balance',
        'active',
        'description',
        'birthday'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function certificates()
    {
        return $this->hasMany('App\Models\Certificate');
    }


    public function working_hours()
    {
        return $this->hasMany('App\Models\WorkHour');
    }

    public function scopeActive($query)
    {
        $query->where('is_delete', '0');
    }

    public function setImgAttribute($img)
    {
        if (!is_null($img)) {
            if (gettype($img) != 'string') {
                $i = $img->store('images/profile', 'public');
                $this->attributes['img'] = $img->hashName();
            } else {
                $this->attributes['img'] = $img;
            }
        }
    }

    public function getImgAttribute($img)
    {
        if (is_null($img)) {
            return   asset('assets/media/300-1.jpg');
        }
        return asset('storage/images/profile') . '/' . $img;
    }


    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson', 'teacher_id');
    }

    public function qualifications()
    {
        return $this->hasMany(Qualification::class, 'user_id', 'id');
    }

    public function teacherCertificates()
    {
        return $this->hasMany(TeacherCertificate::class, 'user_id', 'id');
    }

    public function ejazats()
    {
        return $this->hasMany(Ejazat::class, 'user_id', 'id');
    }

    public function scopeEmptyBasicTeacherData($query)
    {
        $user = $query
            ->where('id', $this->id)
            ->where('user_type', 'teacher')->first();

        if ($user) {
            if (
                !$user->birthday || !$user->description || !$user->position ||
                !$user->phonenumber || !$user->phonenumber2 ||
                !$user->whatsapp || !$user->facebook || !$user->twitter
            ) {
                return $user;
            }
        }

        return false;
    }
}
