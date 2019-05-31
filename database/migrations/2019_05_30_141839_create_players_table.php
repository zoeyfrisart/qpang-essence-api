<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            /** A user is something different than a player.. */
            $table->unsignedBigInteger('user_id');

            $table->string('name');
            $table->tinyInteger('rank');
            $table->tinyInteger('prestige');
            $table->tinyInteger('level');
            $table->integer('don');
            $table->integer('cash');
            /** The amount of *bronze* coins from the PvE game-mode. */
            $table->integer('coins');
            $table->integer('experience');
            $table->integer('playtime');

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
