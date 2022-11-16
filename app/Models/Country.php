<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_name_en',
        'country_name_ar',
        'country_name_sp',
        'country_flag',
        'country_code',
        'status',
        'is_delete',
    ];

    public function qualification()
    {
        return $this->hasMany(Qualification::class, 'country_id', 'id');
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'country_id', 'id');
    }

    
    public function setCountryFlagAttribute($country_flag)
    {
        if (!is_null($country_flag)) {
            if (gettype($country_flag) != 'string') {
                $i = $country_flag->store('images/countries', 'public');
                $this->attributes['country_flag'] = $country_flag->hashName();
            } else {
                $this->attributes['country_flag'] = $country_flag;
            }
        }
    }

    public function getCountryFlagAttribute($country_flag)
    {
        if (is_null($country_flag)) {
            return   asset('assets/media/300-1.jpg');
        }
        return asset('storage/images/countries') . '/' . $country_flag;
    }


    public function getCountryNameAttribute()
    {
        $lang = session('lang');

        if ($lang == 'ar') {
            return $this->attributes['country_name_ar'];
        } elseif ($lang == 'en') {
            return $this->attributes['country_name_en'];
        } elseif ($lang == 'fr') {
            return $this->attributes['country_name_sp'];
        } else {
            return $this->attributes['country_name_ar'];
        }
    }

    public function scopeData($query)
    {
        return $query->select([
            'id',
            'country_name_en',
            'country_name_ar',
            'country_name_sp',
            'country_flag',
            'country_code',
            'status',
            'is_delete',
        ]);
    }
}
