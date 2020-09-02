<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMarketerToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enrollments', function (Blueprint $table) {
            $table->unsignedInteger('marketer_id')->default(1);
            $table->foreign('marketer_id')->references('id')->on('marketers');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('marketer_id')->default(1);
            $table->foreign('marketer_id')->references('id')->on('marketers');
        });

        Schema::table('legal_templates', function (Blueprint $table) {
            $table->unsignedInteger('marketer_id')->default(1);
            $table->foreign('marketer_id')->references('id')->on('marketers');
        });

        Schema::table('state_document_urls', function (Blueprint $table) {
            $table->unsignedInteger('marketer_id')->default(1);
            $table->foreign('marketer_id')->references('id')->on('marketers');
        });

        Schema::table('affirmations', function (Blueprint $table) {
            $table->unsignedInteger('marketer_id')->default(1);
            $table->foreign('marketer_id')->references('id')->on('marketers');
        });

        Schema::table('utility_territory_document_urls', function (Blueprint $table) {
            $table->unsignedInteger('marketer_id')->default(1);
            $table->foreign('marketer_id')->references('id')->on('marketers');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enrollments', function (Blueprint $table) {
            $table->dropColumn('marketer_id');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('marketer_id');
        });

        Schema::table('legal_templates', function (Blueprint $table) {
            $table->dropColumn('marketer_id');
        });

        Schema::table('state_document_urls', function (Blueprint $table) {
            $table->dropColumn('marketer_id');
        });

        Schema::table('affirmations', function (Blueprint $table) {
            $table->dropColumn('marketer_id');
        });

        Schema::table('utility_territory_document_urls', function (Blueprint $table) {
            $table->dropColumn('marketer_id');
        });
    }
}
