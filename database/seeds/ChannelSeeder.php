<?php

use App\Models\Channel;
use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::query()->create([
            'name'        => 'Channel',
            'min_rank'    => 1,
            'min_level'   => 1,
            'max_level'   => 50,
            'max_players' => 300,
            'ip'          => '127.0.0.1',
        ]);
    }
}
