<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TawaqaTeacherCertificate extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'img',
        'title',
        'description',
        'is_delete',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    
    public function setImgAttribute($img)
    {
        if (!is_null($img)) {
            if (gettype($img) != 'string') {
                $i = $img->store('images/certificates', 'public');
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
        return asset('storage/images/certificates') . '/' . $img;
    }

}
