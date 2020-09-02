<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentPayloadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment_payloads', function(Blueprint $table) {
            $table->increments('id');
            $table->text('json_payload');
            $table->string('electric_status', 10)->nullable();
            $table->dateTime('electric_processed_at')->nullable();
            $table->string('gas_status', 10)->nullable();
            $table->dateTime('gas_processed_at')->nullable();
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
        Schema::drop('enrollment_payloads');
    }
}
