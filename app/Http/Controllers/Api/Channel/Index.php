<?php

namespace App\Http\Controllers\Api\Channel;

use App\Http\Resources\Api\ChannelResource;
use App\Models\Channel;
use Illuminate\Http\Request;

class Index
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke(Request $request)
    {
        return ChannelResource::collection(Channel::all());
    }
}
