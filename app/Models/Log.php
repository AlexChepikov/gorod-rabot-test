<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'id',
        'path',
        'request',
        'created_at',
        'updated_at',
    ];
}
