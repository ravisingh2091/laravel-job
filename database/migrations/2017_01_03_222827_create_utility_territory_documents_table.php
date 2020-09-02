<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilityTerritoryDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utility_territory_document_urls', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('utility_territory_id')->unsigned();
            $table->string('name', 100);
            $table->string('type', 20);
            $table->string('url', 100);
            $table->boolean('show_on_product_details')->default(false);
            $table->boolean('show_on_signup_form')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('utility_territory_document_urls');
    }
}
