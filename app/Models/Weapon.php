<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'item_id', 'code_name', 'damage',
    ];
}
