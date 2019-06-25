<?php

use App\Models\ApiKey;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::query()->create([
            'key'   => 'game_version',
            'value' => '20120314',
        ]);

        Setting::query()->create([
            'key'   => 'lobby_host',
            'value' => '127.0.0.1',
        ]);

        Setting::query()->create([
            'key'   => 'square_host',
            'value' => '127.0.0.1',
        ]);

        Setting::query()->create([
            'key'   => 'room_host',
            'value' => '127.0.0.1',
        ]);

        Setting::query()->create([
            'key'   => 'room_port',
            'value' => '8020',
        ]);

        Setting::query()->create([
            'key'   => 'square_name',
            'value' => 'Square',
        ]);

        Setting::query()->create([
            'key'   => 'square_capacity',
            'value' => '50',
        ]);

        Setting::query()->create([
            'key'   => 'command_prefix',
            'value' => '+',
        ]);

        Setting::query()->create([
            'key'   => 'endpoint',
            'value' => '127.0.0.1:8000/api',
        ]);

        Setting::query()->create([
            'key'   => 'api_key',
            'value' => factory(ApiKey::class)->create(['permission' => ApiKey::SERVER])->key,
        ]);

        Setting::query()->create([
            'key'   => 'exp_rate',
            'value' => '200',
        ]);

        Setting::query()->create([
            'key'   => 'don_rate',
            'value' => '150',
        ]);

        Setting::query()->create([
            'key'   => 'exp_kill',
            'value' => '50',
        ]);

        Setting::query()->create([
            'key'   => 'exp_death',
            'value' => '35',
        ]);

        Setting::query()->create([
            'key'   => 'exp_second',
            'value' => '1',
        ]);

        Setting::query()->create([
            'key'   => 'don_kill',
            'value' => '25',
        ]);

        Setting::query()->create([
            'key'   => 'don_death',
            'value' => '10',
        ]);
    }
}
