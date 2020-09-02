<?php

use App\Marketer;
use Illuminate\Database\Seeder;

class MarketersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table('marketers')->truncate();
        } else {
            DB::statement('DELETE FROM marketers');
        }

        // Add administration, user id = 1
        Marketer::create([
            'name' => 'Palmco Energy',
            'code' => 'PE',
            'terms_logo_url' => 'https://palmcoenergy.com/wp-content/uploads/2017/03/PALMco-Detail-Logo-1.png',
            'email_logo_url' => 'https://palmcoenergy.com/wp-content/uploads/2017/03/PALMCO-LOGO-BLANK.png',
            'short_name' => '',
            'support_email' => '',
            'website_url' => '',
            'portal_url' => '',
            'raf_page_url' => '',
        ]);

        Marketer::create([
            'name' => 'Columbia Utilities',
            'code' => 'CU',
            'terms_logo_url' => 'https://palmcoenergy.com/wp-content/uploads/2017/03/PALMco-Detail-Logo-1.png',
            'email_logo_url' => 'https://palmcoenergy.com/wp-content/uploads/2017/03/PALMCO-LOGO-BLANK.png',
            'short_name' => '',
            'support_email' => '',
            'website_url' => '',
            'portal_url' => '',
            'raf_page_url' => '',
        ]);


        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}