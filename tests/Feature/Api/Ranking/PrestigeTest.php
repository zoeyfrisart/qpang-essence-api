<?php

namespace Tests\Feature\Api\Ranking;

use App\Models\Player;
use App\Models\User;
use Tests\TestCase;

class PrestigeTest extends TestCase
{
    public function test()
    {
        $user = factory(User::class)->create();

        factory(Player::class, 10)->create([
            'user_id' => $user->getKey()
        ]);

        $response = $this->json('GET', 'api/ranking/prestige');

        $response->assertOk();

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

    public function testOnlyReturns10Results()
    {
        $user = factory(User::class)->create();

        factory(Player::class, 12)->create([
            'user_id' => $user->getKey(),
        ]);

        $response = $this->json('GET', 'api/ranking/prestige');

        $response->assertJsonCount(10, 'data');
    }

    public function testIsOrdered()
    {
        $user = factory(User::class)->create();

        $player1 = factory(Player::class)->create([
            'user_id'    => $user->getKey(),
            'prestige' => 2,
        ]);

        $player2 = factory(Player::class)->create([
            'user_id'    => $user->getKey(),
            'prestige' => 1,
        ]);

        $player3 = factory(Player::class)->create([
            'user_id'    => $user->getKey(),
            'prestige' => 3,
        ]);

        $response = $this->json('GET', 'api/ranking/prestige');

        $response->assertJson([
            'data' => [
                [
                    'prestige' => $player3->prestige,
                ],
                [
                    'prestige' => $player1->prestige,
                ],
                [
                    'prestige' => $player2->prestige,
                ],
            ],
        ]);
    }
}