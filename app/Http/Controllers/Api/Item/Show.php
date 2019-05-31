<?php

namespace App\Http\Controllers\Api\Item;

use App\Http\Resources\Api\ItemResource;
use App\Models\Item;

class Show
{
    /**
     * @param \App\Models\Item $item
     * @return \App\Http\Resources\Api\ItemResource
     */
    public function __invoke(Item $item)
    {
        return new ItemResource($item);
    }
}
