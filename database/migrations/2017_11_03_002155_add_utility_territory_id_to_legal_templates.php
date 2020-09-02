<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUtilityTerritoryIdToLegalTemplates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('legal_templates', function (Blueprint $table) {
            $table->unsignedInteger('utility_territory_id')->nullable();
            $table->foreign('utility_territory_id')->references('id')->on('utility_territories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('legal_templates', function (Blueprint $table) {
            $table->dropColumn('utility_territory_id');
        });
    }
}
