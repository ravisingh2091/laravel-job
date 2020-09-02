<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AffirmationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'affirmations';

        DB::statement('DELETE FROM ' . $table);

        $data = json_decode(File::get('database/seeds/data/'.$table.'.json'));

        foreach($data as $a) {
        	DB::table($table)->insert([
        		'id' => $a->id,
        		'state_id' => $a->state_id,
        		'affirmation' => $a->affirmation,
        		'display_order' => $a->display_order,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
        		]);
        }
    }
}
