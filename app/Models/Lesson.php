<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'time_from',
        'time_to',
        'day',
        'date',
        'course_id',
        'teacher_id',
        'is_delete',
    ];

    
    
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    
    
    public function teacher()
    {
        return $this->belongsTo('App\Models\User','teacher_id');
    }
}
