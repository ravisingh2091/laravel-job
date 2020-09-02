<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToStateDocumentUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('state_document_urls', function (Blueprint $table) {
            $table->string('contract_type', 50)->nullable();
            $table->string('renewable_type', 10)->nullable();
            $table->string('revenue_class')->nullable();
            $table->string('locale_code', 10)->nullable();
            $table->unsignedInteger('product_type_id')->nullable();
            $table->string('source_file_name', 200)->nullable();
            $table->string('version', 100)->nullable();
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
            $table->dropColumn('contract_type');
            $table->dropColumn('renewable_type');
            $table->dropColumn('revenue_class');
            $table->dropColumn('locale_code');
            $table->dropColumn('product_type_id');
            $table->dropColumn('source_file_name');
            $table->dropColumn('version');

        });
    }
}
