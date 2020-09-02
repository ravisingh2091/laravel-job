<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    protected $table = 'states';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table($this->table)->truncate();
        } else {
            DB::statement('DELETE FROM ' . $this->table);
        }

        $states = [
            [
                'id' => 1,
                'code' => 'CT',
                'name' => 'Connecticut',
                'enrollment_form_header' => 'To begin the enrollment process, please complete the form below.',
                'confirmation_contract_summary' => false,
                'confirmation_terms_of_service' => false,
                'confirmation_utility_supplement' => false,
                'hold_days' => 0,
                'edi_provider' => 'internal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'code' => 'IL',
                'name' => 'Illinois',
                'enrollment_form_header' => 'To begin the enrollment process, please complete the letter of agency form below.',
                'confirmation_contract_summary' => false,
                'confirmation_terms_of_service' => true,
                'confirmation_utility_supplement' => false,
                'hold_days' => 0,
                'edi_provider' => 'internal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'code' => 'MA',
                'name' => 'Massachusetts',
                'enrollment_form_header' => 'To begin the enrollment process, please complete the letter of authorization form below.',
                'confirmation_contract_summary' => false,
                'confirmation_terms_of_service' => true,
                'confirmation_utility_supplement' => false,
                'hold_days' => 0,
                'edi_provider' => 'internal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'code' => 'MD',
                'name' => 'Maryland',
                'enrollment_form_header' => 'To begin the enrollment process, please complete the form below.',
                'confirmation_contract_summary' => true,
                'confirmation_terms_of_service' => true,
                'confirmation_utility_supplement' => false,
                'hold_days' => 0,
                'edi_provider' => 'internal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'code' => 'NJ',
                'name' => 'New Jersey',
                'enrollment_form_header' => 'To begin the enrollment process, please complete the form below.',
                'confirmation_contract_summary' => true,
                'confirmation_terms_of_service' => true,
                'confirmation_utility_supplement' => true,
                'hold_days' => 0,
                'edi_provider' => 'internal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'code' => 'NY',
                'name' => 'New York',
                'enrollment_form_header' => 'To begin the enrollment process, please complete the form below.',
                'confirmation_contract_summary' => false,
                'confirmation_terms_of_service' => false,
                'confirmation_utility_supplement' => false,
                'hold_days' => 0,
                'edi_provider' => 'internal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'code' => 'OH',
                'name' => 'Ohio',
                'enrollment_form_header' => 'To begin the enrollment process, please complete the form below.',
                'confirmation_contract_summary' => false,
                'confirmation_terms_of_service' => true,
                'confirmation_utility_supplement' => false,
                'hold_days' => 0,
                'edi_provider' => 'internal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'code' => 'PA',
                'name' => 'Pennsylvania',
                'enrollment_form_header' => 'To begin the enrollment process, please complete the form below.',
                'confirmation_contract_summary' => true,
                'confirmation_terms_of_service' => true,
                'confirmation_utility_supplement' => false,
                'hold_days' => 0,
                'edi_provider' => 'internal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'code' => 'DC',
                'name' => 'Washington DC',
                'enrollment_form_header' => 'To begin the enrollment process, please complete the form below.',
                'confirmation_contract_summary' => false,
                'confirmation_terms_of_service' => true,
                'confirmation_utility_supplement' => false,
                'hold_days' => 0,
                'edi_provider' => 'internal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'code' => 'DE',
                'name' => 'Deleware',
                'enrollment_form_header' => 'To begin the enrollment process, please complete the form below.',
                'confirmation_contract_summary' => false,
                'confirmation_terms_of_service' => true,
                'confirmation_utility_supplement' => false,
                'hold_days' => 0,
                'edi_provider' => 'znalytics',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table($this->table)->insert($states);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }

    }
}
