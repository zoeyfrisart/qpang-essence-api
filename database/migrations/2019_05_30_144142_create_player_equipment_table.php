<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_equipment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('player_id');
            $table->integer('character_id');

            $table->unsignedBigInteger('melee')->nullable();
            $table->unsignedBigInteger('primary')->nullable();
            $table->unsignedBigInteger('secondary')->nullable();
            $table->unsignedBigInteger('throw')->nullable();
            $table->unsignedBigInteger('head')->nullable();
            $table->unsignedBigInteger('face')->nullable();
            $table->unsignedBigInteger('body')->nullable();
            $table->unsignedBigInteger('hands')->nullable();
            $table->unsignedBigInteger('legs')->nullable();
            $table->unsignedBigInteger('shoes')->nullable();
            $table->unsignedBigInteger('back')->nullable();
            $table->unsignedBigInteger('side')->nullable();

            
            $table->foreign('player_id')->references('id')->on('players');

            $table->foreign('melee')->references('id')->on('player_items');
            $table->foreign('primary')->references('id')->on('player_items');
            $table->foreign('secondary')->references('id')->on('player_items');
            $table->foreign('throw')->references('id')->on('player_items');
            $table->foreign('head')->references('id')->on('player_items');
            $table->foreign('face')->references('id')->on('player_items');
            $table->foreign('body')->references('id')->on('player_items');
            $table->foreign('hands')->references('id')->on('player_items');
            $table->foreign('legs')->references('id')->on('player_items');
            $table->foreign('shoes')->references('id')->on('player_items');
            $table->foreign('back')->references('id')->on('player_items');
            $table->foreign('side')->references('id')->on('player_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_equipment');
    }
}
