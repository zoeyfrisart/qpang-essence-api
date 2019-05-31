<?php

namespace App\Http\Controllers\Api\Player;

use App\Http\Resources\Api\PlayerResource;
use App\Models\Player;

class Show
{
    /**
     * @param \App\Models\Player $player
     * @return \App\Http\Resources\Api\PlayerResource
     */
    public function __invoke(Player $player)
    {
        return new PlayerResource($player);
    }
}
