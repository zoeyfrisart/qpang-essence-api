<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlayerItem extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'item_id', 'period', 'period_type', 'type', 'opened', 'giftable', 'boosted', 'boost_level', 'time'
    ];

    /**
     * @return BelongsTo
     */
    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }
}
