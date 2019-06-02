<?php

use App\Models\Player;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class)->create()->getKey(),
        'name' => $faker->firstName,
        'rank' => 1,
        'prestige' => 0,
        'level' => 1,
    ];
});
