<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Item extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'seq_id', 'item_id', 'name', 'type', 'aid', 'pay_type',
        'price', 'use_up', 'period', 'level', 'status', 'sold_count', 'stock'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function stats(): HasOne
    {
        return $this->hasOne(Weapon::class, 'item_id', 'item_id');
    }
}
