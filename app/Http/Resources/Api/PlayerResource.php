<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayerResource extends JsonResource
{

    /**
     * @var \App\Models\Player $resource
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
            'name'       => $this->resource->name,
            'rank'       => $this->resource->rank,
            'prestige'   => $this->resource->prestige,
            'level'      => $this->resource->level,
            'experience' => $this->resource->experience,
            'playtime'   => $this->resource->playtime,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
