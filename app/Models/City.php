<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'city_name_ar',
        'city_name_en',
        'city_name_sp',
        'city_flag',
        'city_code',
        'status',
        'is_delete',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function getCityNameAttribute()
    {
        $lang = session('lang');

        if ($lang == 'ar') {
            return $this->attributes['city_name_ar'];
        } elseif ($lang == 'en') {
            return $this->attributes['city_name_en'];
        } elseif ($lang == 'fr') {
            return $this->attributes['city_name_sp'];
        } else {
            return $this->attributes['city_name_ar'];
        }
    }

    public function scopeData($query)
    {
        return $query->select([
            'id',
            'country_id',
            'city_name_ar',
            'city_name_en',
            'city_name_sp',
            'city_flag',
            'city_code',
            'status',
            'is_delete',
        ]);
    }
}
