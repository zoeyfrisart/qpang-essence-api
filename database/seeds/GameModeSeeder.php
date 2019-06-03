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
        GameMode::query()->create([
            'mode_id' => GameMode::DEATH_MATCH,
            'name'    => 'Death Match',
        ]);

        GameMode::query()->create([
            'mode_id' => GameMode::TEAM_DEATH_MATCH,
            'name'    => 'Team Death Match',
        ]);

        GameMode::query()->create([
            'mode_id' => GameMode::PROTECT_ESSENCE,
            'name'    => 'Protect The Essence',
        ]);

        GameMode::query()->create([
            'mode_id' => GameMode::VIP,
            'name'    => 'VIP',
        ]);

        GameMode::query()->create([
            'mode_id' => GameMode::PRACTICE,
            'name'    => 'Practice',
        ]);

        GameMode::query()->create([
            'mode_id' => GameMode::PUBLIC_ENEMY,
            'name'    => 'Public Enemy',
        ]);

        GameMode::query()->create([
            'mode_id' => GameMode::PVE,
            'name'    => 'PvE (StO)',
        ]);
    }
}
