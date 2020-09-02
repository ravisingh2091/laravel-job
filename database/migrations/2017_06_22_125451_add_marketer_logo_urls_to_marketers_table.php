<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMarketerLogoUrlsToMarketersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marketers', function(Blueprint $table) {
            $table->string('terms_logo_url')->nullable();
            $table->string('email_logo_url')->nullable();
            $table->string('short_name', 30)->nullable();
            $table->string('support_email', 100)->nullable();
            $table->string('website_url', 100)->nullable();
            $table->string('portal_url', 100)->nullable();
            $table->string('raf_page_url', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marketers', function(Blueprint $table) {
            $table->dropColumn('terms_logo_url');
            $table->dropColumn('terms_logo_url');
            $table->dropColumn('short_name');
            $table->dropColumn('support_email');
            $table->dropColumn('website_url');
            $table->dropColumn('portal_url');
            $table->dropColumn('raf_page_url');
        });
    }
}
