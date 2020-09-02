<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_results', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('survey_results_payload_id', false, true);
            $table->foreign('survey_results_payload_id')->references('id')->on('survey_result_payloads');

            $table->integer('survey_id', false, true);
            $table->foreign('survey_id')->references('id')->on('surveys');

            $table->char('entity', 2)->default('PE');
            $table->integer('entry_id', false, true);
            $table->integer('form_id', false, true);
            $table->dateTime('date_created');
            $table->string('ip', 20);
            $table->string('source_url');
            $table->string('user_agent');

            $table->string('mailchimp_campaign_uid', 50)->nullable();
            $table->string('mailchimp_list_uid', 50)->nullable();
            $table->string('mailchimp_unique_id', 50)->nullable();

            $table->string('email', 100);
            $table->tinyInteger('response_1', false, true)->nullable();
            $table->boolean('response_2')->nullable();
            $table->tinyInteger('response_3', false, true)->nullable();
            $table->tinyInteger('response_4', false, true)->nullable();
            $table->tinyInteger('response_5', false, true)->nullable();
            $table->text('response_6')->nullable();
            $table->text('response_7')->nullable();

            $table->tinyInteger('score', false, false)->default(-1);
            $table->dateTime('followup_send_at')->nullable();
            $table->dateTime('followup_sent_at')->nullable();
            $table->dateTime('exported_at')->nullable();

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
