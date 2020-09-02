<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('utility_territory_id')->unsigned();
            $table->integer('commodity_id')->unsigned();
            $table->decimal('rate', 6, 5)->unsigned()->default(0.0);
            $table->integer('term_months')->unsigned()->default(0);
            $table->integer('next_product_id')->unsigned()->nullable();
            $table->enum('revenue_class', ['residential', 'commercial'])->default('residential');
            $table->tinyInteger('enroll_fee')->default(0);
            $table->tinyInteger('cancel_fee')->default(0);
            $table->boolean('enabled')->default(false);
            $table->integer('product_type_id')->unsigned();
            $table->text('website_description')->nullable();
            $table->string('foreign_code', 60)->unique()->nullable();
            $table->string('unit_of_measure', 10);
            $table->timestamps();

            $table->foreign('next_product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
