<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
    ];



    public function getValueAttribute($value)
    {
        if($this->key == 'platform_logo'){
            return asset('storage/images/website_setting') . '/' . $value;
        }
        return $value;
    }


}
