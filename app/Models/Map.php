<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Map extends Model
{
    const GARDEN = 0;
    const DIORAMA = 1;
    const FLY = 2;
    const KEEP = 3;
    const DOLL = 4;
    const SWEETY = 5;
    const RIVER = 6;
    const PRACTICE = 7;
    const BUNKER = 8;
    const TEMPLE = 9;
    const BRIDGE = 11;
    const CASTAWAY = 12;
    const STAGE_1 = 21;
    const STAGE_2 = 22;
    const STAGE_3 = 23;
    const TUTORIAL = 98;
    const PLAZA = 99;

    /**
     * @var array
     */
    protected $fillable = [
        'map_id', 'name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function spawns(): HasMany
    {
        return $this->hasMany(MapSpawn::class);
    }
}
