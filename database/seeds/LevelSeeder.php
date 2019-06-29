<?php

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::query()->create([
            'name'        => 'Schildknaap I',
            'level'       => 1,
            'experience'  => 0,
            'don_reward'  => 0,
            'cash_reward' => 0,
            'coin_reward' => 0,
        ]);

        Level::query()->create([
            'name'        => 'Schildknaap II',
            'level'       => 2,
            'experience'  => 1000,
            'don_reward'  => 2500,
            'cash_reward' => 25,
            'coin_reward' => 0,
        ]);

        Level::query()->create([
            'name'        => 'Schildknaap III',
            'level'       => 3,
            'experience'  => 3000,
            'don_reward'  => 2500,
            'cash_reward' => 25,
            'coin_reward' => 0,
        ]);

        Level::query()->create([
            'name'        => 'Schildknaap IV',
            'level'       => 4,
            'experience'  => 5000,
            'don_reward'  => 2500,
            'cash_reward' => 25,
            'coin_reward' => 0,
        ]);

        Level::query()->create([
            'name'        => 'Ridder I',
            'level'       => 5,
            'experience'  => 8000,
            'don_reward'  => 5000,
            'cash_reward' => 50,
            'coin_reward' => 1,
        ]);

        Level::query()->create([
            'name'        => 'Ridder II',
            'level'       => 6,
            'experience'  => 11000,
            'don_reward'  => 5000,
            'cash_reward' => 50,
            'coin_reward' => 0,
        ]);

        Level::query()->create([
            'name'        => 'Ridder III',
            'level'       => 7,
            'experience'  => 14000,
            'don_reward'  => 5000,
            'cash_reward' => 50,
            'coin_reward' => 1,
        ]);

        Level::query()->create([
            'name'        => 'Ridder IV',
            'level'       => 8,
            'experience'  => 17000,
            'don_reward'  => 5000,
            'cash_reward' => 50,
            'coin_reward' => 0,
        ]);

        Level::query()->create([
            'name'        => 'Jonkheer I',
            'level'       => 9,
            'experience'  => 22000,
            'don_reward'  => 7500,
            'cash_reward' => 75,
            'coin_reward' => 1,
        ]);

        Level::query()->create([
            'name'        => 'Jonkheer II',
            'level'       => 10,
            'experience'  => 27000,
            'don_reward'  => 7500,
            'cash_reward' => 75,
            'coin_reward' => 0,
        ]);

        Level::query()->create([
            'name'        => 'Jonkheer III',
            'level'       => 11,
            'experience'  => 32000,
            'don_reward'  => 7500,
            'cash_reward' => 75,
            'coin_reward' => 1,
        ]);

        Level::query()->create([
            'name'        => 'Jonkheer IV',
            'level'       => 12,
            'experience'  => 37000,
            'don_reward'  => 7500,
            'cash_reward' => 75,
            'coin_reward' => 0,
        ]);

        Level::query()->create([
            'name'        => 'Baron I',
            'level'       => 13,
            'experience'  => 47000,
            'don_reward'  => 10000,
            'cash_reward' => 100,
            'coin_reward' => 2,
        ]);

        Level::query()->create([
            'name'        => 'Baron II',
            'level'       => 14,
            'experience'  => 57000,
            'don_reward'  => 10000,
            'cash_reward' => 100,
            'coin_reward' => 0,
        ]);

        Level::query()->create([
            'name'        => 'Baron III',
            'level'       => 15,
            'experience'  => 67000,
            'don_reward'  => 10000,
            'cash_reward' => 100,
            'coin_reward' => 1,
        ]);

        Level::query()->create([
            'name'        => 'Baron IV',
            'level'       => 16,
            'experience'  => 77000,
            'don_reward'  => 10000,
            'cash_reward' => 100,
            'coin_reward' => 0,
        ]);

        Level::query()->create([
            'name'        => 'Burggraaf I',
            'level'       => 17,
            'experience'  => 97000,
            'don_reward'  => 17500,
            'cash_reward' => 175,
            'coin_reward' => 2,
        ]);

        Level::query()->create([
            'name'        => 'Burggraaf II',
            'level'       => 18,
            'experience'  => 117000,
            'don_reward'  => 17500,
            'cash_reward' => 175,
            'coin_reward' => 1,
        ]);

        Level::query()->create([
            'name'        => 'Burggraaf III',
            'level'       => 19,
            'experience'  => 137000,
            'don_reward'  => 17500,
            'cash_reward' => 175,
            'coin_reward' => 1,
        ]);

        Level::query()->create([
            'name'        => 'Burggraaf IV',
            'level'       => 20,
            'experience'  => 157000,
            'don_reward'  => 17500,
            'cash_reward' => 175,
            'coin_reward' => 1,
        ]);

        Level::query()->create([
            'name'        => 'Graaf I',
            'level'       => 21,
            'experience'  => 197000,
            'don_reward'  => 25000,
            'cash_reward' => 250,
            'coin_reward' => 4,
        ]);

        Level::query()->create([
            'name'        => 'Graaf II',
            'level'       => 22,
            'experience'  => 237000,
            'don_reward'  => 25000,
            'cash_reward' => 250,
            'coin_reward' => 1,
        ]);

        Level::query()->create([
            'name'        => 'Graaf III',
            'level'       => 23,
            'experience'  => 277000,
            'don_reward'  => 25000,
            'cash_reward' => 250,
            'coin_reward' => 2,
        ]);

        Level::query()->create([
            'name'        => 'Graaf IV',
            'level'       => 24,
            'experience'  => 317000,
            'don_reward'  => 25000,
            'cash_reward' => 250,
            'coin_reward' => 1,
        ]);

        Level::query()->create([
            'name'        => 'Markies I',
            'level'       => 25,
            'experience'  => 377000,
            'don_reward'  => 37500,
            'cash_reward' => 375,
            'coin_reward' => 5,
        ]);

        Level::query()->create([
            'name'        => 'Markies II',
            'level'       => 26,
            'experience'  => 437000,
            'don_reward'  => 37500,
            'cash_reward' => 375,
            'coin_reward' => 2,
        ]);

        Level::query()->create([
            'name'        => 'Markies III',
            'level'       => 27,
            'experience'  => 497000,
            'don_reward'  => 37500,
            'cash_reward' => 375,
            'coin_reward' => 3,
        ]);

        Level::query()->create([
            'name'        => 'Markies IV',
            'level'       => 28,
            'experience'  => 557000,
            'don_reward'  => 37500,
            'cash_reward' => 375,
            'coin_reward' => 2,
        ]);

        Level::query()->create([
            'name'        => 'Hertog I',
            'level'       => 29,
            'experience'  => 657000,
            'don_reward'  => 75000,
            'cash_reward' => 750,
            'coin_reward' => 5,
        ]);

        Level::query()->create([
            'name'        => 'Hertog II',
            'level'       => 30,
            'experience'  => 757000,
            'don_reward'  => 75000,
            'cash_reward' => 750,
            'coin_reward' => 3,
        ]);

        Level::query()->create([
            'name'        => 'Hertog III',
            'level'       => 31,
            'experience'  => 857000,
            'don_reward'  => 75000,
            'cash_reward' => 750,
            'coin_reward' => 5,
        ]);

        Level::query()->create([
            'name'        => 'Hertog IV',
            'level'       => 32,
            'experience'  => 957000,
            'don_reward'  => 75000,
            'cash_reward' => 750,
            'coin_reward' => 3,
        ]);

        Level::query()->create([
            'name'        => 'Koning I',
            'level'       => 33,
            'experience'  => 1157000,
            'don_reward'  => 100000,
            'cash_reward' => 1000,
            'coin_reward' => 10,
        ]);

        Level::query()->create([
            'name'        => 'Koning II',
            'level'       => 34,
            'experience'  => 1357000,
            'don_reward'  => 100000,
            'cash_reward' => 1000,
            'coin_reward' => 5,
        ]);

        Level::query()->create([
            'name'        => 'Koning III',
            'level'       => 35,
            'experience'  => 1607000,
            'don_reward'  => 100000,
            'cash_reward' => 1000,
            'coin_reward' => 5,
        ]);

        Level::query()->create([
            'name'        => 'Koning IV',
            'level'       => 36,
            'experience'  => 1857000,
            'don_reward'  => 100000,
            'cash_reward' => 1000,
            'coin_reward' => 5,
        ]);

        Level::query()->create([
            'name'        => 'Keizer I',
            'level'       => 37,
            'experience'  => 2207000,
            'don_reward'  => 150000,
            'cash_reward' => 1500,
            'coin_reward' => 10,
        ]);

        Level::query()->create([
            'name'        => 'Keizer II',
            'level'       => 38,
            'experience'  => 2557000,
            'don_reward'  => 150000,
            'cash_reward' => 1500,
            'coin_reward' => 5,
        ]);

        Level::query()->create([
            'name'        => 'Keizer III',
            'level'       => 39,
            'experience'  => 2957000,
            'don_reward'  => 150000,
            'cash_reward' => 1500,
            'coin_reward' => 5,
        ]);

        Level::query()->create([
            'name'        => 'Keizer IV',
            'level'       => 40,
            'experience'  => 3457000,
            'don_reward'  => 150000,
            'cash_reward' => 1500,
            'coin_reward' => 5,
        ]);

        Level::query()->create([
            'name'        => 'Engel',
            'level'       => 41,
            'experience'  => 3957000,
            'don_reward'  => 250000,
            'cash_reward' => 2500,
            'coin_reward' => 15,
        ]);

        Level::query()->create([
            'name'        => 'Beschermengel',
            'level'       => 42,
            'experience'  => 4557000,
            'don_reward'  => 400000,
            'cash_reward' => 4000,
            'coin_reward' => 15,
        ]);

        Level::query()->create([
            'name'        => 'Aartsengel',
            'level'       => 43,
            'experience'  => 5157000,
            'don_reward'  => 500000,
            'cash_reward' => 5000,
            'coin_reward' => 15,
        ]);

        Level::query()->create([
            'name'        => 'Avatar',
            'level'       => 44,
            'experience'  => 5957000,
            'don_reward'  => 750000,
            'cash_reward' => 7500,
            'coin_reward' => 20,
        ]);

        Level::query()->create([
            'name'        => 'Goddelijk',
            'level'       => 45,
            'experience'  => 6757000,
            'don_reward'  => 1000000,
            'cash_reward' => 10000,
            'coin_reward' => 50,
        ]);
    }
}
