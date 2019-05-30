<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'key', 'permission'
    ];
}
