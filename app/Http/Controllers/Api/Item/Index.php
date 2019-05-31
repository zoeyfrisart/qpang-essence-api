<?php

namespace App\Http\Controllers\Api\Item;

use App\Http\Resources\Api\ItemResource;
use App\Models\Item;
use Illuminate\Http\Request;

class Index
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke(Request $request)
    {
        return ItemResource::collection(Item::query()->paginate(25));
    }
}
