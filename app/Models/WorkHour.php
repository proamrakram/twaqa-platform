<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkHour extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'time_from',
        'time_to',
        'day',
        'user_id',
        'is_delete',
    ];

    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    
    public function getDay()
    {
        if($this->day == 'Saturday'){
            return "السبت";
        }elseif($this->day == 'Sunday'){
            return "الأحد";
        }elseif($this->day == 'Monday'){
            return "الاثنين";
        }elseif($this->day == 'Tuesday'){
            return "الثلاثاء";
        }elseif($this->day == 'Wednesday'){
            return "الأربعاء";
        }elseif($this->day == 'Thursday'){
            return "الخميس";
        }elseif($this->day == 'Firday'){
            return "الجمعة";
        }
    }
}
