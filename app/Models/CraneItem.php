<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CraneItem extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'item_id', 'item_type', 'use_up', 'period', 'active'
    ];
}
