<?php

namespace Tests\Feature\Api\Item;

use App\Models\Item;
use Tests\TestCase;

class IndexTest extends TestCase
{
    public function test()
    {
        factory(Item::class, 10)->create();

        $response = $this->json('GET', 'api/item');

        $response->assertJsonStructure([
            'data' => [
                [
                    'id',
                    'item_id',
                    'name',
                    'type',
                    'sold_count',
                ],
            ],
            'meta',
            'links',
        ]);
    }

    public function testDoesNotReturnMoreThan25()
    {
        factory(Item::class, 27)->create();

        $response = $this->json('GET', 'api/item');

        $response->assertJsonCount(25, 'data');
    }
}