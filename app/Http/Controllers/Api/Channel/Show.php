<?php

namespace App\Http\Controllers\Api\Channel;

use App\Http\Resources\Api\ChannelResource;
use App\Models\Channel;

class Show
{
    /**
     * @param \App\Models\Channel $channel
     * @return \App\Http\Resources\Api\ChannelResource
     */
    public function __invoke(Channel $channel)
    {
        return new ChannelResource($channel);
    }
}
