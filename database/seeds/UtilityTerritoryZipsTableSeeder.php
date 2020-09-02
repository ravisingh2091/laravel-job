<?php

use App\UtilityTerritory;
use App\UtilityTerritoryZip;
use Illuminate\Database\Seeder;

class UtilityTerritoryZipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'utility_territory_zips';

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table($table)->truncate();
        } else {
            DB::statement('DELETE FROM ' . $table);
        }

        $data = json_decode(File::get('database/seeds/data/'.$table.'.json'));
        $items = new \Illuminate\Support\Collection();

        foreach($data as $utz) {
            $items->push(new UtilityTerritoryZip([
                'id' => $utz->id,
                'utility_territory_id' => $utz->utility_territory_id,
                'zip_id' => $utz->zip_id
            ]));
        }

        foreach($items->chunk(1000) as $chunk) {
            DB::table($table)->insert($chunk->toArray());
        }

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
