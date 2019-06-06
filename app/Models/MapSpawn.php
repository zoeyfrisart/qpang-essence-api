<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MapSpawn extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'map_id', 'game_mode_id', 'x', 'y', 'z', 'team',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function map(): BelongsTo
    {
        return $this->belongsTo(Map::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mode(): BelongsTo
    {
        return $this->belongsTo(GameMode::class);
    }
}
