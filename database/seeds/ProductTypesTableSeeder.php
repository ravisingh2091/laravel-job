<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'product_types';

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table($table)->truncate();
        } elseif (DB::connection()->getDriverName() == 'sqlite') {
            DB::statement('DELETE FROM ' . $table);
        }

        $data = [
            ['id' => 1, 'code' => 'fixed', 'name' => 'Fixed', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
            ['id' => 2, 'code' => 'variable', 'name' => 'Variable', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
            ['id' => 3, 'code' => 'initial', 'name' => 'Initial', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
        ];

        DB::table($table)->insert($data);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }

    }
}
