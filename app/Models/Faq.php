<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answer',
        'is_delete',
        'lang',
    ];

    public function scopeGetQuestions($query)
    {
        $lang = session('lang');
        return $query->where('lang', $lang)->get();
    }
}
