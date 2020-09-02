<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferralsTable extends Migration
{
    /**
     * Run the migrations.
*
* @return void
*/
    public function up()
    {
        Schema::create('referrals', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('referral_code_id')->unsigned();
            $table->foreign('referral_code_id')->references('id')->on('referral_codes');

            $table->integer('enrollment_id')->unsigned()->unique();
            $table->foreign('enrollment_id')->references('id')->on('enrollments');
            $table->datetime('exported_at')->nullable();
            $table->datetime('fulfilled_at')->nullable();
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
        //
    }
}
