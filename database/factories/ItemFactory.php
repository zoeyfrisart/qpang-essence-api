<?php

use App\Models\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'seq_id'     => $faker->numberBetween(0, 10000),
        'item_id'    => $faker->numberBetween(0, 10000),
        'name'       => $faker->name,
        'type'       => $faker->numberBetween(0, 100),
        'aid'        => $faker->boolean,
        'pay_type'   => ! ! $faker->boolean ? 1 : 2,
        'price'      => $faker->numberBetween(0, 5000),
        'use_up'     => $faker->numberBetween(0, 3),
        'period'     => $faker->numberBetween(0, 100),
        'level'      => $faker->numberBetween(0, 45),
        'status'     => $faker->numberBetween(0, 5),
        'sold_count' => $faker->numberBetween(0, 1000),
        'stock'      => $faker->numberBetween(0, 1000),
    ];
});
