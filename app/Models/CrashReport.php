<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrashReport extends Model
{
    //
    protected $fillable = ['name', 'email', 'phone', 'description', 'images'];

    public function getImageUrlsAttribute($value)
    {
        return json_decode($value);
    }
}
