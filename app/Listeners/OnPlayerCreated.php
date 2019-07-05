<?php

namespace App\Listeners;

use App\Events\PlayerCreated;

class OnPlayerCreated
{
    /**
     * Handle the event.
     *
     * @param \App\Events\PlayerCreated $playerCreated
     * @return void
     */
    public function handle(PlayerCreated $event)
    {
        /** @var \App\Models\Player $player */
        $player = $event->player;

        $player->equipment()->create([
            'character_id' => 333,
        ]);

        $player->equipment()->create([
            'character_id' => 343,
        ]);

        $player->equipment()->create([
            'character_id' => 578,
        ]);

        $player->equipment()->create([
            'character_id' => 579,
        ]);

        $player->equipment()->create([
            'character_id' => 850,
        ]);

        $player->equipment()->create([
            'character_id' => 851,
        ]);
    }
}
