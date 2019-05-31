<?php

namespace App\Http\Controllers\Api\Ranking;

use App\Http\Resources\Api\PlayerResource;
use App\Models\Player;

class Experience
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke()
    {
        return PlayerResource::collection(Player::query()->orderByDesc('experience')->paginate(10));
    }
}
