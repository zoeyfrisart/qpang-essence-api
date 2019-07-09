<?php

namespace Tests\Feature\Api\User;

use App\Models\User;
use Illuminate\Http\Response;
use Tests\TestCase;

class ShowTest extends TestCase
{
    public function test()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user, 'api')->json('GET', 'api/user');

        $response->assertOk();

        $response->assertJsonStructure([
            'data' => [
                'name',
                'email',
                'player',
                'created_at',
                'updated_at',
            ],
        ]);
    }

    public function testUnauthorized()
    {
        $response = $this->json('GET', 'api/user');

        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
    }
}