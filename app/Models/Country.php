<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillalbe = [
        'country_name_en',
        'country_name_ar',
        'country_name_fr',
        'country_flag',
        'country_code',
        'status',
        'is_delete',
    ];

    public function qualification()
    {
        return $this->hasMany(Qualification::class, 'country_id', 'id');
    }

    public function getCountryNameAttribute()
    {
        $lang = session('lang');

        if ($lang == 'ar') {
            return $this->attributes['country_name_ar'];
        } elseif ($lang == 'en') {
            return $this->attributes['country_name_en'];
        } elseif ($lang == 'fr') {
            return $this->attributes['country_name_fr'];
        } else {
            return $this->attributes['country_name_ar'];
        }
    }
}
