<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'title',
        'description',
        'is_delete',
        'active',
    ];


    public function setImgAttribute($img)
    {
        if (!is_null($img)) {
            if (gettype($img) != 'string') {
                $i = $img->store('images/categories', 'public');
                $this->attributes['img'] = $img->hashName();
            } else {
                $this->attributes['img'] = $img;
            }
        }
    }

    public function getImgAttribute($img)
    {
        if (is_null($img)) {
            return   asset('assets/media/300-1.jpg');
        }
        return asset('storage/images/categories') . '/' . $img;
    }

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }
}
