<?php

namespace Tests\Feature\Api\Item;

use App\Models\Item;
use Tests\TestCase;

class ShowTest extends TestCase
{
    public function test()
    {
        $item = factory(Item::class)->create();

        $response = $this->json('GET', 'api/item/' . $item->getKey());

        $response->assertOk();

        $response->assertJson([
            'data' => [
                'id'         => $item->getKey(),
                'item_id'    => $item->item_id,
                'name'       => $item->name,
                'type'       => $item->type,
                'sold_count' => $item->sold_count,
            ],
        ]);
    }
}