<?php

namespace Tests\Feature\Api\Ranking;

use App\Models\Player;
use App\Models\User;
use Tests\TestCase;

class PlaytimeTest extends TestCase
{
    public function test()
    {
        $user = factory(User::class)->create();

        factory(Player::class, 10)->create([
            'user_id' => $user->getKey()
        ]);

        $response = $this->json('GET', 'api/ranking/playtime');

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

        $response = $this->json('GET', 'api/ranking/playtime');

        $response->assertJsonCount(10, 'data');
    }

    public function testIsOrdered()
    {
        $user = factory(User::class)->create();

        $player1 = factory(Player::class)->create([
            'user_id'    => $user->getKey(),
            'playtime' => 1337,
        ]);

        $player2 = factory(Player::class)->create([
            'user_id'    => $user->getKey(),
            'playtime' => 5,
        ]);

        $player3 = factory(Player::class)->create([
            'user_id'    => $user->getKey(),
            'playtime' => 5000,
        ]);

        $response = $this->json('GET', 'api/ranking/playtime');

        $response->assertJson([
            'data' => [
                [
                    'playtime' => $player3->playtime,
                ],
                [
                    'playtime' => $player1->playtime,
                ],
                [
                    'playtime' => $player2->playtime,
                ],
            ],
        ]);
    }
}