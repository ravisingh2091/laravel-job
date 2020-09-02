<?php

use App\Utility;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UtilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'utilities';

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table($table)->truncate();
        } elseif (DB::connection()->getDriverName() == 'sqlite') {
            DB::statement('DELETE FROM ' . $table);
        }

        $data = json_decode(File::get('database/seeds/data/'.$table.'.json'));

        foreach ($data as $utility) {
            Utility::create([
                'id' => $utility->id,
                'code' => $utility->code,
                'name' => $utility->name
            ]);
        }

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
