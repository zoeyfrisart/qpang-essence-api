<?php

namespace Tests\Feature\Api\Player;

use App\Models\Player;
use App\Models\User;
use Tests\TestCase;

class ShowTest extends TestCase
{
    public function test()
    {
        $user = factory(User::class)->create();

        $player = factory(Player::class)->create([
            'user_id' => $user->getKey(),
        ]);

        $response = $this->json('GET', 'api/player/' . $player->name);

        $response->assertOk();

        $response->assertJsonStructure([
            'data' => [
                'name',
                'level',
                'experience',
                'prestige',
                'rank',
                'playtime',
                'created_at',
                'updated_at',
            ],
        ]);
    }

    public function testDoesNotShowPlayerById()
    {
        $user = factory(User::class)->create();

        $player = factory(Player::class)->create([
            'user_id' => $user->getKey(),
        ]);

        $response = $this->json('GET', 'api/player/' . $player->getKey());

        $response->assertNotFound();
    }
}