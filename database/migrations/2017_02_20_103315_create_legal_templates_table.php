<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_templates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states');
            $table->string('template_type', 30);
            $table->unsignedInteger('commodity_id');
            $table->foreign('commodity_id')->references('id')->on('commodities');
            $table->string('locale_code', 10)->default('en-US');
            $table->string('source_file_name', 100)->nullable();
            $table->string('version', 50)->nullable();
            $table->boolean('is_active')->default(false);
            $table->text('template_html');

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['state_id', 'template_type', 'commodity_id', 'locale_code', 'is_active'], 'uk_legal_template_state_type_commodity_locale_active');
            $table->unique(['state_id', 'template_type', 'commodity_id', 'locale_code', 'version'], 'uk_legal_template_state_type_commodity_locale_version');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legal_templates');
    }
}
