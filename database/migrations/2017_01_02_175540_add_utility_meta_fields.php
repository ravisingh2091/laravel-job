<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUtilityMetaFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utility_territories', function (Blueprint $table) {
            $table->boolean('requires_name_key')->default(false);
            $table->string('primary_account_field_label', 25);
            $table->string('primary_account_field_regex', 25);
            $table->string('primary_account_field_help_text', 100);
            $table->string('primary_account_field_error_text', 100)->nullable();
            $table->boolean('secondary_account_field_required')->default(false);
            $table->string('secondary_account_field_label', 25)->nullable();
            $table->string('secondary_account_field_regex', 25)->nullable();
            $table->string('secondary_account_field_help_text', 100)->nullable();
            $table->string('secondary_account_field_error_text')->nullable();
            $table->tinyInteger('export_hold_days')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utility_territories', function(Blueprint $table) {
            $table->dropColumn('requires_name_key');
            $table->dropColumn('primary_account_field_label');
            $table->dropColumn('primary_account_field_regex');
            $table->dropColumn('primary_account_field_help_text');
            $table->dropColumn('primary_account_field_error_text');
            $table->dropColumn('secondary_account_field_required');
            $table->dropColumn('secondary_account_field_label');
            $table->dropColumn('secondary_account_field_regex');
            $table->dropColumn('secondary_account_field_help_text');
            $table->dropColumn('secondary_account_field_error_text');
            $table->dropColumn('export_hold_days');
        });
    }
}
