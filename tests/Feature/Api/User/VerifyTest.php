<?php

namespace Tests\Feature\Api\User;

use App\Models\ApiKey;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

//TODO: The whitelist feature will be removed soon.. should change tests.

class VerifyTest extends TestCase
{
    public function test()
    {
        $user = factory(User::class)->create([
            'password'    => Hash::make('password'),
            'whitelisted' => true,
        ]);

        $apiKey = factory(ApiKey::class)->create([
            'permission' => ApiKey::SERVER,
        ]);

        $this->withHeader('X-Api-Key', $apiKey->key);

        $response = $this->json('POST', 'api/user/verify', [
            'name'     => $user->name,
            'password' => 'password',
        ]);

        $response->assertOk();

        $this->assertEquals($user->getKey(), $response->content());
    }

    public function testIsUnauthorizedWhenNotWhitelisted()
    {
        $user = factory(User::class)->create([
            'password'    => Hash::make('password'),
        ]);

        $apiKey = factory(ApiKey::class)->create([
            'permission' => ApiKey::SERVER,
        ]);

        $this->withHeader('X-Api-Key', $apiKey->key);

        $response = $this->json('POST', 'api/user/verify', [
            'name'     => $user->name,
            'password' => 'password',
        ]);

        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
    }
}