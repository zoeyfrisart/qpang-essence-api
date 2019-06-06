<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GameMode extends Model
{
    const DEATH_MATCH = 1;
    const TEAM_DEATH_MATCH = 2;
    const PROTECT_ESSENCE = 3;
    const VIP = 4;
    const PRACTICE = 5;
    const PUBLIC_ENEMY = 8;
    const PVE = 9;
    /**
     * @var array
     */
    protected $fillable = [
        'mode_id', 'name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function spawns(): HasMany
    {
        return $this->hasMany(MapSpawn::class);
    }
}
