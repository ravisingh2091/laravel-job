<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdjustUtilityCodeFieldsOnEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enrollments', function (Blueprint $table) {
            $table->string('utility_code', 30)->nullable();
            $table->dropColumn('electric_utility_code');
            $table->dropColumn('gas_utility_code');
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
            $table->dropColumn('utility_code');
            $table->string('electric_utility_code', 30)->nullable();
            $table->string('gas_utility_code', 30)->nullable();
        });
    }
}
