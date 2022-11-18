<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'consultas'
    ];


    public function scopeData($query)
    {
        return $query->select([
            'id',
            'name',
            'email',
            'phone',
            'consultas'
        ]);
    }
}
