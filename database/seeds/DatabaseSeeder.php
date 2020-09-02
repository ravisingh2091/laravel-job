<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MarketersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CommoditiesTableSeeder::class);
        $this->call(ProductTypesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(ZipsTableSeeder::class);
        $this->call(UtilitiesTableSeeder::class);
        $this->call(UtilityTerritoriesTableSeeder::class);
        $this->call(UtilityTerritoryZipsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(StateDocumentUrlsTableSeeder::class);
        $this->call(UtilityTerritoryDocumentUrlsTableSeeder::class);
        $this->call(AffirmationsTableSeeder::class);
        $this->call(LegalTemplatesTableSeeder::class);
        $this->call(UtilityTerritoryRatesTableSeeder::class);
        $this->call(SurveysTableSeeder::class);
    }
}
