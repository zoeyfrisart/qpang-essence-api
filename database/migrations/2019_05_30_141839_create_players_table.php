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
            $table->tinyInteger('rank')->default(1);
            $table->tinyInteger('prestige')->default(0);
            $table->tinyInteger('level')->default(1);
            $table->integer('don')->default(0);
            $table->integer('cash')->default(0);
            /** The amount of *bronze* coins from the PvE game-mode. */
            $table->integer('coins')->default(0);
            $table->integer('experience')->default(0);
            $table->integer('playtime')->default(0);

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
