<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapSpawnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('map_spawns', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('map_id');
            $table->unsignedBigInteger('game_mode_id');

            $table->unsignedInteger('x');
            $table->unsignedInteger('y');
            $table->unsignedInteger('z');
            $table->unsignedInteger('team')->nullable();
            $table->timestamps();

            $table->foreign('map_id')->references('id')->on('maps');
            $table->foreign('game_mode_id')->references('id')->on('game_modes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('map_spawns');
    }
}
