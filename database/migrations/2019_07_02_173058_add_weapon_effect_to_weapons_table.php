<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWeaponEffectToWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('weapons', function (Blueprint $table) {
            $table->unsignedTinyInteger('effect_id')->nullable()->after('damage');
            $table->unsignedTinyInteger('chance')->nullable()->after('effect_id');
            $table->unsignedInteger('duration')->nullable()->after('chance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('weapons', function (Blueprint $table) {
            $table->dropColumn('effect_id');
            $table->dropColumn('chance');
            $table->dropColumn('duration');
        });
    }
}
