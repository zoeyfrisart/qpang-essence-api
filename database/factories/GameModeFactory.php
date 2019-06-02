<?php

use App\Models\GameMode;
use Faker\Generator as Faker;

$factory->define(GameMode::class, function (Faker $faker) {
    return [
        'mode_id' => $faker->numberBetween(0, 9),
        'name'    => $faker->firstName,
    ];
});
