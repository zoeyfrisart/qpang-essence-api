<?php

use App\Models\Item;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::query()->create([
            'seq_id'     => 122,
            'item_id'    => 1095303173,
            'name'       => 'PI-33',
            'type'       => 87,
            'aid'        => 0,
            'pay_type'   => 1,
            'price'      => 10,
            'use_up'     => 3,
            'period'     => 575,
            'level'      => 1,
            'status'     => 1,
            'sold_count' => 0,
            'stock'      => 9999,
        ]);
    }
}
