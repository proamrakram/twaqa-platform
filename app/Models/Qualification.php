<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'qualification_degree',
        'specialization',
        'university',
        'country_id',
        'year',
        'is_delete'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function getCountryNameAttribute()
    {
        if ($this->country) {
            return $this->university . ',' . $this->country->country_name;
        };
    }
}
