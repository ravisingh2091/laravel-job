<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRenewableToLegalTemplates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('legal_templates', function (Blueprint $table) {
            $table->string('renewable_type', 10)->default('brown');
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
            $table->dropColumn('renewable_type');
        });
    }
}
