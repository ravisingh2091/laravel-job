<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StateDocumentUrlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'state_document_urls';

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table($table)->truncate();
        } elseif (DB::connection()->getDriverName() == 'sqlite') {
            DB::statement('DELETE FROM ' . $table);
        }

        $urls = [
            [
                'id' => 1,
                'state_id' => 7, // Ohio
                'commodity_id' => null,
                'name' => 'Terms and Conditions (English)',
                'type' => 'pdf',
                'url' => '/wp-content/uploads/2017/01/OH-Terms-Conditions-English-V.E.16-11.21.1.pdf',
                'marketer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'state_id' => 8, // PA
                'commodity_id' => null,
                'name' => 'Terms and Conditions (English)',
                'type' => 'pdf',
                'url' => '/wp-content/uploads/2017/01/PA-Terms-and-Conditions-English-V.16-10.01.1.pdf',
                'marketer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'state_id' => 5, // NJ
                'commodity_id' => null,
                'name' => 'Terms and Conditions (English)',
                'type' => 'pdf',
                'url' => '/wp-content/uploads/2017/01/NJ-Terms-Conditions-V.16-08.01.1.pdf',
                'marketer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'state_id' => 4, // MD
                'commodity_id' => null,
                'name' => 'Terms and Conditions (English)',
                'type' => 'pdf',
                'url' => '/wp-content/uploads/2017/01/MD-Terms-Conditions-English-V.16-09.23.1.pdf',
                'marketer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'state_id' => 4, // MD
                'commodity_id' => null,
                'name' => 'Disclosure Label (English)',
                'type' => 'pdf',
                'url' => '/wp-content/uploads/2017/01/disclosure-MD-2.1.pdf',
                'marketer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'state_id' => 4, // MD
                'commodity_id' => null,
                'name' => 'Disclosure Label (Spanish)',
                'type' => 'pdf',
                'url' => '/wp-content/uploads/2017/01/disclosure-MD-2-Spanish1.pdf',
                'marketer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'state_id' => 5, // NJ
                'commodity_id' => 2,
                'name' => 'Gas Contract Summary',
                'type' => 'pdf',
                'url' => '/wp-content/uploads/2017/01/NJ-Gas-Contract-Summary-V.16-08.01.1.pdf',
                'marketer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'state_id' => 5, // NJ
                'commodity_id' => 1,
                'name' => 'Electric Contract Summary',
                'type' => 'pdf',
                'url' => '/wp-content/uploads/2017/01/NJ-Elec-Contract-Summary-V.16-08.01.1.pdf',
                'marketer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table($table)->insert($urls);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
