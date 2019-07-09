<?php

namespace Tests\Feature\Api\Player;

use App\Models\Player;
use App\Models\User;
use Tests\TestCase;

class IndexTest extends TestCase
{
    public function test()
    {
        $user = factory(User::class)->create();

        factory(Player::class, 10)->create([
            'user_id' => $user->getKey(),
        ]);

        $response = $this->json('GET', 'api/player');

        $response->assertJsonStructure([
            'data' => [
                [
                    'name',
                    'level',
                    'experience',
                    'prestige',
                    'rank',
                    'playtime',
                    'created_at',
                    'updated_at',
                ],
            ],
            'meta',
            'links',
        ]);
    }

    public function testDoesNotReturnMoreThan10()
    {
        $user = factory(User::class)->create();

        factory(Player::class, 12)->create([
            'user_id' => $user->getKey(),
        ]);

        $response = $this->json('GET', 'api/player');

        $response->assertJsonCount(10, 'data');
    }
}