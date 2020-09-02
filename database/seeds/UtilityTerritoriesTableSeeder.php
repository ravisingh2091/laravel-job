<?php

use App\UtilityTerritory;
use Illuminate\Database\Seeder;

class UtilityTerritoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'utility_territories';

        DB::connection()->disableQueryLog();

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table($table)->truncate();
        } else {
            DB::statement('DELETE FROM ' . $table);
        }

        $data = json_decode(File::get('database/seeds/data/'.$table.'.json'));
        $items = new \Illuminate\Support\Collection();

        foreach($data as $ut) {
            $items->push(new UtilityTerritory([
                    'id' => $ut->id,
                    'utility_id' => $ut->utility_id,
                    'territory_code' => $ut->territory_code,
                    'name' => $ut->name,
                    'commodity_id' => $ut->commodity_id,
                    'current_ptc' => $ut->current_ptc,
                    'unit_of_measure' => $ut->unit_of_measure,
                    'state_id' => $ut->state_id,
                    'primary_account_field_label' => $ut->primary_account_field_label,
                    'primary_account_field_regex' => $ut->primary_account_field_regex,
                    'primary_account_field_help_text' => $ut->primary_account_field_help_text,
                    'primary_account_field_error_text' => $ut->primary_account_field_error_text,
                    'secondary_account_field_required' => $ut->secondary_account_field_required,
                    'secondary_account_field_label' => $ut->secondary_account_field_label,
                    'secondary_account_field_regex' => $ut->secondary_account_field_regex,
                    'secondary_account_field_help_text' => $ut->secondary_account_field_help_text,
                    'secondary_account_field_error_text' => $ut->secondary_account_field_error_text,
                    'requires_name_key' => $ut->requires_name_key,
                    'export_hold_days' => $ut->export_hold_days
                ])
            );
        }

        foreach($items->chunk(1000) as $chunk) {
            DB::table('utility_territories')->insert($chunk->toArray());
        }
        
        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
