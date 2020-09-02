<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('code', 2)->unique();
            $table->string('name', 50)->unique();
            $table->boolean('product_lookup_enabled')->default(false);
            $table->text('enrollment_form_header')->nullable();
            $table->boolean('confirmation_contract_summary')->default(false);
            $table->boolean('confirmation_terms_of_service')->default(false);
            $table->boolean('confirmation_utility_supplement')->default(false);
            $table->tinyInteger('hold_days')->default(0);
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
        Schema::dropIfExists('states');
    }
}
