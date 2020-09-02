<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UtilityTerritoryDocumentUrlsTableSeeder extends Seeder
{
    public function run()
    {
        $table = 'utility_territory_document_urls';

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table($table)->truncate();
        } elseif (DB::connection()->getDriverName() == 'sqlite') {
            DB::statement('DELETE FROM ' . $table);
        }

        $urls = [
            [
                'id' => 1,
                'utility_territory_id' => 23,
                'name' => 'Disclosure Label',
                'type' => 'pdf',
                'url' => '/wp-content/uploads/2017/01/disclosure_CLP-EverSource_12-22-2016.pdf',
                'marketer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'utility_territory_id' => 23,
                'name' => 'Disclosure Label (Spanish)',
                'type' => 'pdf',
                'url' => '/wp-content/uploads/2017/01/disclosure_CLP_EverSource_Spanish-12-22-2016.pdf',
                'marketer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'utility_territory_id' => 6,
                'name' => 'Disclosure Label',
                'type' => 'pdf',
                'url' => '/wp-content/uploads/2017/01/disclosure-ameren1.pdf',
                'marketer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'utility_territory_id' => 6,
                'name' => 'Disclosure Label (Spanish)',
                'type' => 'pdf',
                'url' => '/wp-content/uploads/2017/01/disclosure-ameren-spanish1.pdf',
                'marketer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'utility_territory_id' => 13,
                'name' => 'Disclosure Label',
                'type' => 'pdf',
                'url' => '/wp-content/uploads/2017/01/disclosure-ComEd1.pdf',
                'marketer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'utility_territory_id' => 13,
                'name' => 'Disclosure Label (Spanish)',
                'type' => 'pdf',
                'url' => '/wp-content/uploads/2017/01/disclosure-comed-spanish1.pdf',
                'marketer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],



        ];

        DB::table($table)->insert($urls);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}