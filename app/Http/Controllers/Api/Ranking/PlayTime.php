<?php

namespace App\Http\Controllers\Api\Ranking;

use App\Http\Resources\Api\PlayerResource;
use App\Models\Player;

class PlayTime
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke()
    {
        return PlayerResource::collection(Player::query()->orderByDesc('playtime')->paginate(10));
    }
}
