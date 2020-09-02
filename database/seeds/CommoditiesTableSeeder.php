<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommoditiesTableSeeder extends Seeder
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
            DB::table('commodities')->truncate();
        } else {
            DB::statement('DELETE FROM commodities');
        }

        $commodities = [
            [
                'id' => 1,
                'symbol' => 'E',
                'code' => 'electric',
                'name' => 'Electricity',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'symbol' => 'G',
                'code' => 'gas',
                'name' => 'Natural Gas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'symbol' => 'U',
                'code' => 'uniform',
                'name' => 'Uniform',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        DB::table('commodities')->insert($commodities);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }

    }
}
