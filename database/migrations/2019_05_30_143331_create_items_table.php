<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            /** This is the *shop sequence id*, items without a seq_id can not be sold */
            $table->integer('seq_id');
            /** The specific item id, in-game 8) */
            $table->integer('item_id');

            $table->string('name');

            $table->tinyInteger('type');
            $table->tinyInteger('aid');
            $table->tinyInteger('pay_type');
            $table->integer('price');
            $table->tinyInteger('use_up');
            $table->integer('period');
            $table->tinyInteger('level');
            $table->tinyInteger('status');

            $table->integer('sold_count');
            $table->integer('stock');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
