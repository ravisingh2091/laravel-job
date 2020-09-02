<?php

use App\Survey;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveysTableSeeder extends Seeder
{
    public function run()
    {

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table('surveys')->truncate();
        } else {
            DB::statement('DELETE FROM surveys');
        }

        // Add administration, user id = 1
        Survey::create([
            'name' => 'Customer Survey',
            'entity' => 'PE',
            'gravity_form_id' => 3,
        ]);


        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }


}