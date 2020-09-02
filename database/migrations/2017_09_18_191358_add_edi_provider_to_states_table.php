<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEdiProviderToStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('states', function(Blueprint $table) {
            $table->string('edi_provider', 20)->default('internal');
            $table->boolean('send_confirmation_emails')->default(true);
            $table->boolean('send_referral_emails')->default(true);
            $table->string('enrollment_form_relative_url', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('states', function(Blueprint $table) {
            $table->dropColumn('edi_provider');
            $table->dropColumn('send_confirmation_emails');
            $table->dropColumn('send_referral_emails');
            $table->dropColumn('enrollment_form_relative_url');
        });
    }
}
