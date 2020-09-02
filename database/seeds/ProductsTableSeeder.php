<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'products';

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table($table)->truncate();
        } else {
            DB::statement('DELETE FROM ' . $table);
        }

        $data = json_decode(File::get('database/seeds/data/'.$table.'.json'));

        foreach($data as $p) {

            DB::table('products')->insert([
                'id' => $p->id,
                'utility_territory_id' => $p->utility_territory_id,
                'commodity_id' => $p->commodity_id,
                'rate' => $p->rate,
                'term_months' => $p->term_months,
                'next_product_id' => ($p->next_product_id === 0) ? null : $p->next_product_id,
                'revenue_class' => $p->revenue_class,
                'enroll_fee' => $p->enroll_fee,
                'cancel_fee' => $p->cancel_fee,
                'enabled' => $p->enabled,
                'product_type_id' => $p->product_type_id,
                'website_description' => $p->website_description,
                'unit_of_measure' => $p->unit_of_measure,
                'marketer_id' => 1
            ]);
        }

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
