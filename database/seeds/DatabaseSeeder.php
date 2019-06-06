<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PlayerSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(GameModeSeeder::class);
        $this->call(ShopSeeder::class);
        $this->call(ChannelSeeder::class);
        $this->call(MapSeeder::class);
    }
}
