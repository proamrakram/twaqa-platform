<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'currency_name_ar',
        'currency_name_en',
        'currency_name_sp',
        'is_default',
        'egp',
        'dollar',
        'riyal',
        'euro',
        'is_delete',
    ];

    
    public function getCurrencyNameAttribute()
    {
        $lang = session('lang');

        if ($lang == 'sp') {
            return $this->attributes['currency_name_sp'];
        } elseif ($lang == 'en')  {
            return $this->attributes['currency_name_en'];
        }else {
            return $this->attributes['currency_name_ar'];
        }
    }
}
