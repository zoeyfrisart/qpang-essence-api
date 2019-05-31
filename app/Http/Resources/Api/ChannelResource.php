<?php

namespace App\Http\Resources\Api;

use App\Models\Channel;
use Illuminate\Http\Resources\Json\JsonResource;

class ChannelResource extends JsonResource
{
    /**
     * @var Channel $resource
     */
    public $resource;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'          => $this->resource->getKey(),
            'name'        => $this->resource->name,
            'min_rank'    => $this->resource->min_rank,
            'min_level'   => $this->resource->min_level,
            'max_level'   => $this->resource->max_level,
            'max_players' => $this->resource->max_players,
            'created_at'  => $this->resource->created_at,
            'updated_at'  => $this->resource->updated_at,
        ];
    }
}
