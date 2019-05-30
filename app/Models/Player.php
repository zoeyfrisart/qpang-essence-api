<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Player extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'rank', 'prestige', 'level', 'don', 'cash', 'coins', 'experience', 'playtime',
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany
     */
    public function memos(): HasMany
    {
        return $this->hasMany(Memo::class);
    }

    /**
     * @return HasMany
     */
    public function friends(): HasMany
    {
        return $this->hasMany(Friend::class, 'player_from');
    }

    /**
     * @return HasMany
     */
    public function items(): HasMany
    {
        return $this->hasMany(PlayerItem::class);
    }
    /**
     * @return HasMany
     */
    public function equipment(): HasMany
    {
        $this->hasMany(PlayerEquipment::class);
    }
}
