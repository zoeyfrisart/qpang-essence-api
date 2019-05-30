<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_items', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('player_id');
            $table->integer('item_id');
            $table->integer('period');
            $table->integer('period_type');
            $table->integer('type');
            $table->tinyInteger('opened');
            $table->tinyInteger('giftable');

            $table->tinyInteger('boosted');
            $table->tinyInteger('boost_level');

            $table->integer('time');
            $table->timestamps();

            $table->foreign('player_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_items');
    }
}
