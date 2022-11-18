<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
    ];

    public function scopeGetPageContent($query, $key)
    {
        $lang = session('lang');
        $key = $key . '_' . $lang;

        $model = $query->where('key', $key)->first();
        dd($model);
        if ($lang == 'ar') {
            $model = $query->where('key', $key)->first();
        }

        if ($lang == 'en') {
            $model = $query->where('key', $key)->first();
        }

        if ($lang == 'sp') {
            $model = $query->where('key', $key)->first();
        }

        if ($model) {
            return $model->value;
        }

        return 'not found';
    }
}
