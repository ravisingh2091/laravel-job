<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEnabledToStateAndUtilityUrlTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('state_document_urls', function (Blueprint $table) {
            $table->boolean('enabled')->default(true);
        });

        Schema::table('utility_territory_document_urls', function (Blueprint $table) {
            $table->boolean('enabled')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('state_document_urls', function (Blueprint $table) {
            $table->dropColumn('enabled');
        });

        Schema::table('utility_territory_document_urls', function (Blueprint $table) {
            $table->dropColumn('enabled');
        });
    }
}
