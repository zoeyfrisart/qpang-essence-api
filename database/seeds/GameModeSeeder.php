<?php

use App\Models\GameMode;
use Illuminate\Database\Seeder;

class GameModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(GameMode::class)->create([
            'mode_id' => GameMode::DEATH_MATCH,
            'name'    => 'Death Match',
        ]);

        factory(GameMode::class)->create([
            'mode_id' => GameMode::TEAM_DEATH_MATCH,
            'name'    => 'Team Death Match',
        ]);

        factory(GameMode::class)->create([
            'mode_id' => GameMode::PROTECT_ESSENCE,
            'name'    => 'Protect The Essence',
        ]);

        factory(GameMode::class)->create([
            'mode_id' => GameMode::VIP,
            'name'    => 'VIP',
        ]);

        factory(GameMode::class)->create([
            'mode_id' => GameMode::PRACTICE,
            'name'    => 'Practice',
        ]);

        factory(GameMode::class)->create([
            'mode_id' => GameMode::PUBLIC_ENEMY,
            'name'    => 'Public Enemy',
        ]);

        factory(GameMode::class)->create([
            'mode_id' => GameMode::PVE,
            'name'    => 'PvE (StO)',
        ]);
    }
}
