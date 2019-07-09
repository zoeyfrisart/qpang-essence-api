<?php

namespace Tests\Feature\Api\Channel;

use App\Models\Channel;
use Tests\TestCase;

class IndexTest extends TestCase
{
    public function test()
    {
        factory(Channel::class, 10)->create();

        $response = $this->json('GET', 'api/channel');

        $response->assertJsonStructure([
            'data' => [
                [
                    'id',
                    'name',
                    'min_rank',
                    'min_level',
                    'max_level',
                    'max_players',
                    'created_at',
                    'updated_at',
                ],
            ],
        ]);
    }
}