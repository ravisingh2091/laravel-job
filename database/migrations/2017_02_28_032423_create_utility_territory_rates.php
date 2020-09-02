<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilityTerritoryRates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utility_territory_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('utility_territory_id');
            $table->foreign('utility_territory_id')->references('id')->on('utility_territories');
            $table->date('effective_at');
            $table->decimal('rate', 6, 5)->unsigned();
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
        Schema::dropIfExists('utility_territory_rates');
    }
}
