<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{

    /**
     * @var \App\Models\Item $resource
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
            'id'         => $this->resource->getKey(),
            'item_id'    => $this->resource->item_id,
            'name'       => $this->resource->name,
            'type'       => $this->resource->type,
            'sold_count' => $this->resource->sold_count,
        ];
    }
}
