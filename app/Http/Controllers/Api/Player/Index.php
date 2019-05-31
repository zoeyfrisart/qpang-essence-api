<?php

namespace App\Http\Controllers\Api\Player;

use App\Http\Resources\Api\PlayerResource;
use App\Models\Player;

class Index
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke()
    {
        return PlayerResource::collection(Player::query()->paginate(10));
    }
}
