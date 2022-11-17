<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'hours',
        'period',
        'students',
        'teacher_id',
        'department',
        'category',
        'course_type_id',
        'lesson_type_id',
        'renewed',
        'student_price',
        'teacher_price',
        'student_price_currency',
        'teacher_price_currency',
        'supervisor_id',
        'img',
        'is_delete',
        'active',
    ];

    protected $casts = [
        'students' => 'array',
    ];



    public function student_currency()
    {
        return $this->belongsTo('App\Models\Currency', 'student_price_currency');
    }
    public function teacher_currency()
    {
        return $this->belongsTo('App\Models\Currency', 'teacher_price_currency');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'teacher_id');
    }

    public function supervisor()
    {
        return $this->belongsTo('App\Models\User', 'supervisor_id');
    }

    public function course_type()
    {
        return $this->belongsTo('App\Models\CourseType');
    }

    public function lesson_type()
    {
        return $this->belongsTo('App\Models\LessonType');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\CourseCategory', 'category');
    }

    public function setImgAttribute($img)
    {
        if (!is_null($img)) {
            if (gettype($img) != 'string') {
                $i = $img->store('images/courses', 'public');
                $this->attributes['img'] = $img->hashName();
            } else {
                $this->attributes['img'] = $img;
            }
        }
    }

    public function getImgAttribute($img)
    {
        if (is_null($img)) {
            return null;
        }
        return asset('storage/images/courses') . '/' . $img;
    }

    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }
}
