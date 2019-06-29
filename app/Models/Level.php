<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'level', 'experience', 'don_reward', 'cash_reward', 'coin_reward',
    ];
}
