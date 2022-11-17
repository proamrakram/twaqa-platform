<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;


    protected $fillable = [
        'image',
        'name',
        'opinion',
        'is_delete',
        'lang',
    ];



    public function setImageAttribute($image)
    {
        if (gettype($image) != 'string') {
            $i = $image->store('images/opinions', 'public');
            $this->attributes['image'] = $image->hashName();
        } else {
            $this->attributes['image'] = $image;
        }
    }

    public function getImageAttribute($image)
    {

        if (is_null($image)) {
            return   asset('assets/media/blank.svg');
        }
        return asset('storage/images/opinions') . '/' . $image;
    }

    public function scopeLang($query)
    {
        $lang = session('lang');
        return $query->where('lang', $lang)->get();
    }
}
