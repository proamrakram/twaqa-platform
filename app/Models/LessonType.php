<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'is_delete',
        'active',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }
}
