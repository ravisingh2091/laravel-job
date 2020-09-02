<?php

use App\Zip;
use Illuminate\Database\Seeder;

class ZipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $table = 'zips';

        DB::connection()->disableQueryLog();

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table($table)->truncate();
        } else {
            DB::statement('DELETE FROM ' . $table);
        }

        $data = json_decode(File::get('database/seeds/data/'.$table.'.json', true));
        $zips = new \Illuminate\Support\Collection();
        
        foreach($data as $zip) {
            $zips->push(new Zip(['zip' => $zip->zip, 'city' => ucwords($zip->city), 'county' => ucwords($zip->county),
                'state_code' => $zip->state_code, 'state_id' => null ]));
        }

        foreach($zips->chunk(1000) as $chunk) {
            DB::table('zips')->insert($chunk->toArray());
        }
        
        if (DB::connection()->getDriverName() == 'mysql') {
            
            DB::statement("UPDATE zips z LEFT JOIN states s ON z.state_code = s.code SET z.state_id = s.id WHERE z.state_id is null");
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');   

        } else {
            DB::statement("UPDATE zips AS z SET state_id = s.id FROM states AS s WHERE z.state_code = s.code AND z.state_id IS NULL");
        }

    }
}