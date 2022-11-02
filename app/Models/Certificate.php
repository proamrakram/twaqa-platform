<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'name',
        'date_from',
        'date_to',
        'file',
        'user_id',
        'is_delete',
    ];

    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    
    public function setFileAttribute($file)
    {
        if(gettype($file) != 'string') {
            $i = $file->store('images/certificates', 'public');
            $this->attributes['file'] = $file->hashName();
        } else {
            $this->attributes['file'] = $file;
        }
    }

    public function getFileAttribute($file)
    {
        return asset('storage/images/certificates') . '/' . $file;
    }

    
}
