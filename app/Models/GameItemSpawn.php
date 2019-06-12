<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameItemSpawn extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'position_id', 'map_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function map()
    {
        return $this->belongsTo(Map::class);
    }
}
