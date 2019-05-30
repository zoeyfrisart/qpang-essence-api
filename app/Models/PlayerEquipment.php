<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlayerEquipment extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'character_id', 'melee', 'primary', 'secondary',
        'throw', 'head', 'face', 'body', 'hands',
        'legs', 'shoes', 'back', 'side'
    ];

    /**
     * @return BelongsTo
     */
    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }

    /**
     * @return BelongsTo
     */
    public function melee(): BelongsTo
    {
        return $this->belongsTo(PlayerItem::class);
    }

    /**
     * @return BelongsTo
     */
    public function primary(): BelongsTo
    {
        return $this->belongsTo(PlayerItem::class);
    }

    /**
     * @return BelongsTo
     */
    public function secondary(): BelongsTo
    {
        return $this->belongsTo(PlayerItem::class);
    }

    /**
     * @return BelongsTo
     */
    public function throw(): BelongsTo
    {
        return $this->belongsTo(PlayerItem::class);
    }

    /**
     * @return BelongsTo
     */
    public function head(): BelongsTo
    {
        return $this->belongsTo(PlayerItem::class);
    }

    /**
     * @return BelongsTo
     */
    public function face(): BelongsTo
    {
        return $this->belongsTo(PlayerItem::class);
    }

    /**
     * @return BelongsTo
     */
    public function body(): BelongsTo
    {
        return $this->belongsTo(PlayerItem::class);
    }

    /**
     * @return BelongsTo
     */
    public function hands(): BelongsTo
    {
        return $this->belongsTo(PlayerItem::class);
    }

    /**
     * @return BelongsTo
     */
    public function legs(): BelongsTo
    {
        return $this->belongsTo(PlayerItem::class);
    }

    /**
     * @return BelongsTo
     */
    public function shoes(): BelongsTo
    {
        return $this->belongsTo(PlayerItem::class);
    }

    /**
     * @return BelongsTo
     */
    public function back(): BelongsTo
    {
        return $this->belongsTo(PlayerItem::class);
    }

    /**
     * @return BelongsTo
     */
    public function side(): BelongsTo
    {
        return $this->belongsTo(PlayerItem::class);
    }
}
