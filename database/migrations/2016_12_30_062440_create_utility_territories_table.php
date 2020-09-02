<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilityTerritoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utility_territories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('utility_id')->unsigned();
            $table->string('territory_code', 10)->unique();
            $table->string('name', 50);
            $table->integer('commodity_id')->unsigned();
            $table->decimal('current_ptc', 6, 5)->default(0.0);
            $table->string('unit_of_measure', 10);
            $table->integer('state_id')->unsigned();
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
        Schema::dropIfExists('utility_territories');
    }
}
