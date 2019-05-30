<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'min_level', 'max_level', 'max_players', 'min_rank', 'ip'
    ];
}
