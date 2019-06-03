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
            $table->unsignedInteger('seq_id');
            /** The specific item id, in-game 8) */
            $table->unsignedInteger('item_id');

            $table->string('name');

            $table->unsignedInteger('type');
            $table->unsignedInteger('aid');
            $table->unsignedInteger('pay_type');
            $table->unsignedInteger('price');
            $table->unsignedInteger('use_up');
            $table->unsignedInteger('period');
            $table->unsignedInteger('level');
            $table->unsignedInteger('status');

            $table->unsignedInteger('sold_count');
            $table->unsignedInteger('stock');

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
