<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPositionToMapSpawnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('map_spawns', function (Blueprint $table) {
            $table->dropColumn('x');
            $table->dropColumn('y');
            $table->dropColumn('z');

            $table->unsignedBigInteger('position_id')->after('game_mode_id');

            $table->foreign('position_id')->references('id')->on('positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('map_spawns', function (Blueprint $table) {
            $table->float('x')->after('game_mode_id');
            $table->float('y')->after('game_mode_id');
            $table->float('z')->after('game_mode_id');

            $table->dropForeign('position_id');

            $table->dropColumn('position_id');
        });
    }
}
