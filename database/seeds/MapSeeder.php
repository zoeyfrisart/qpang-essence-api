<?php

use App\Models\Map;
use Illuminate\Database\Seeder;

class MapSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Map::query()->create([
            'map_id' => Map::GARDEN,
            'name'   => 'Garden',
        ]);

        Map::query()->create([
            'map_id' => Map::DIORAMA,
            'name'   => 'Diorama',
        ]);

        Map::query()->create([
            'map_id' => Map::FLY,
            'name'   => 'Flycastle',
        ]);

        Map::query()->create([
            'map_id' => Map::KEEP,
            'name'   => 'Keep',
        ]);

        Map::query()->create([
            'map_id' => Map::DOLL,
            'name'   => 'Dollhouse',
        ]);

        Map::query()->create([
            'map_id' => Map::SWEETY,
            'name'   => 'Sweety',
        ]);

        Map::query()->create([
            'map_id' => Map::RIVER,
            'name'   => 'River',
        ]);

        Map::query()->create([
            'map_id' => Map::BUNKER,
            'name'   => 'Bunker',
        ]);

        Map::query()->create([
            'map_id' => Map::TEMPLE,
            'name'   => 'Temple',
        ]);

        Map::query()->create([
            'map_id' => Map::BRIDGE,
            'name'   => 'Bridge',
        ]);

        Map::query()->create([
            'map_id' => Map::CASTAWAY,
            'name'   => 'Castaway',
        ]);
    }
}
