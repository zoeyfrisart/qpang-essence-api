<?php

use App\Models\ApiKey;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(/**
 * @param \Faker\Generator $faker
 * @return array
 */
    ApiKey::class, function (Faker $faker) {
    return [
        'key'        => Str::random(32),
        'permission' => 1,
    ];
});
