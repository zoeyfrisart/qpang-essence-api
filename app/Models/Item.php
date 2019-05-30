<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'seq_id', 'item_id', 'name', 'type', 'aid', 'pay_type',
        'price', 'use_up', 'period', 'level', 'status', 'sold_count', 'stock'
    ];

}
