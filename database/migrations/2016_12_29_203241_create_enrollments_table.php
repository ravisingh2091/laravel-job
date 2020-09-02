<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('enrollment_payload_id')->unsigned()->nullable();
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('company_name', 100)->nullable();
            $table->string('contact_first_name', 50)->nullable();
            $table->string('contact_last_name', 50)->nullable();
            $table->string('email')->nullable();
            $table->string('primary_phone', 50)->nullable();
            $table->string('service_address_1', 100)->nullable();
            $table->string('service_address_2', 100)->nullable();
            $table->string('service_city', 50)->nullable();
            $table->string('service_state', 50)->nullable();
            $table->string('service_zip', 20)->nullable();
            $table->integer('service_zip_id')->unsigned()->nullable();
            $table->boolean('billing_address_different')->default(false);
            $table->string('billing_address_1', 100)->nullable();
            $table->string('billing_address_2', 100)->nullable();
            $table->string('billing_city', 50)->nullable();
            $table->string('billing_state', 50)->nullable();
            $table->string('billing_zip', 20)->nullable();
            $table->integer('billing_zip_id')->unsigned()->nullable();

            $table->string('revenue_class', 20)->default('residential');
            $table->integer('product_id')->unsigned()->nullable();
            $table->text('utility_territory_terms_html')->nullable();
            $table->text('product_terms_html')->nullable();

            $table->string('utility_account_number', 50)->nullable();
            $table->string('primary_account_number', 50)->nullable();
            $table->string('secondary_account_number', 50)->nullable();
            $table->string('meter_number', 50)->nullable();
            $table->string('name_key', 5)->nullable();

            $table->text('terms_agree')->nullable();

            $table->text('affirmation_1')->nullable();
            $table->text('affirmation_2')->nullable();
            $table->text('affirmation_3')->nullable();
            $table->text('affirmation_4')->nullable();

            $table->boolean('budget_billing')->default(false);
            $table->string('tax_id', 100)->nullable();

            $table->string('promo_code', 50)->nullable();
            $table->string('landing_page', 100)->nullable();

            $table->string('entry_id', 50)->nullable();
            $table->string('form_id', 50)->nullable();
            $table->string('date_created', 50)->nullable();
            $table->string('ip', 50)->nullable();
            $table->string('source_url', 100)->nullable();
            $table->string('user_agent', 255)->nullable();

            $table->dateTime('confirmation_sent_at')->nullable();

            $table->dateTime('postpone_date');
            $table->dateTime('exported_at')->nullable();
            $table->string('status')->default('pending_export');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
