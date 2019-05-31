<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    const ANYONE = 1;
    const TRUSTED = 2;
    const SERVER = 3;

    /**
     * @var array
     */
    protected $fillable = [
        'key', 'permission'
    ];
}
