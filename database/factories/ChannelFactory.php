<?php

use App\Models\Channel;
use Faker\Generator as Faker;

$factory->define(Channel::class, function (Faker $faker) {
    return [
        'name'        => $faker->name,
        'min_level'   => $faker->numberBetween(0, 30),
        'max_level'   => $faker->numberBetween(30, 45),
        'max_players' => $faker->numberBetween(10, 500),
        'min_rank'    => $faker->numberBetween(1, 4),
        'ip'          => $faker->ipv4,
    ];
});
