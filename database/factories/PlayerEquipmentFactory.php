<?php

use App\Models\Player;
use App\Models\PlayerEquipment;
use Faker\Generator as Faker;

$factory->define(PlayerEquipment::class, function (Faker $faker) {
    return [
        'character_id' => 333,
    ];
});
