<?php

namespace Tests\Feature\Api\Channel;

use App\Models\Channel;
use Tests\TestCase;

class ShowTest extends TestCase
{
    public function test()
    {
        $channel = factory(Channel::class)->create();

        $response = $this->json('GET', 'api/channel/' . $channel->getKey());

        $response->assertOk();

        $response->assertJson([
            'data' => [
                'id'          => $channel->getKey(),
                'name'        => $channel->name,
                'min_rank'    => $channel->min_rank,
                'min_level'   => $channel->min_level,
                'max_level'   => $channel->max_level,
                'max_players' => $channel->max_players,
            ],
        ]);
    }
}