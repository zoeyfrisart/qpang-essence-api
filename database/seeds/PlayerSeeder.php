<?php

use App\Models\Player;
use App\Models\PlayerEquipment;
use App\Models\User;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(User::class)->create([
            'name' => 'Admin',
        ]);

        $player = Player::query()->create([
            'user_id'           => $user->getKey(),
            'name'              => 'Admin',
            'rank'              => 3,
            'default_character' => 333,
            'don'               => 750000,
            'cash'              => 100000,
            'coins'             => 25000,
        ]);
    }
}
