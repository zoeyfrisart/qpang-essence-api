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

        $player = factory(Player::class)->create([
            'user_id' => $user->getKey(),
            'name'    => 'Admin',
            'rank'    => 3,
        ]);

        $characterIds = [333, 343, 578, 579, 850, 851];

        foreach($characterIds as $characterId) {
            factory(PlayerEquipment::class)->create(['player_id' => $player->getKey(), 'character_id' => $characterId]);
        }
    }
}
