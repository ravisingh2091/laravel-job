<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductTypeToLegalTemplates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('legal_templates', function (Blueprint $table) {
            $table->unsignedInteger('product_type_id')->nullable()->references('id')->on('product_types');

            DB::statement('ALTER TABLE legal_templates DROP CONSTRAINT uk_legal_template_state_type_commodity_locale_active');
            DB::statement('ALTER TABLE legal_templates DROP CONSTRAINT uk_legal_template_state_type_commodity_locale_version');

            $table->unique(['state_id', 'template_type', 'commodity_id', 'locale_code', 'product_type_id', 'is_active'], 'uk_legal_template_state_type_commodity_locale_active');
            $table->unique(['state_id', 'template_type', 'commodity_id', 'locale_code', 'product_type_id', 'version'], 'uk_legal_template_state_type_commodity_locale_version');

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
            $table->dropColumn('product_type_id');

            DB::statement('ALTER TABLE legal_templates DROP CONSTRAINT uk_legal_template_state_type_commodity_locale_active');
            DB::statement('ALTER TABLE legal_templates DROP CONSTRAINT uk_legal_template_state_type_commodity_locale_version');

            $table->unique(['state_id', 'template_type', 'commodity_id', 'locale_code', 'is_active'], 'uk_legal_template_state_type_commodity_locale_active');
            $table->unique(['state_id', 'template_type', 'commodity_id', 'locale_code', 'version'], 'uk_legal_template_state_type_commodity_locale_version');
        });
    }
}
