<?php

namespace App\Services\Product;

use App\Marketer;
use App\Zip;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsByZipFinderInternal implements ProductsByZipFinder
{
    public function SearchProductsByZipcode(Marketer $marketer, Zip $zip, $revenueClass)
    {
        $products = DB::table('products')
            ->leftJoin('utility_territories', 'products.utility_territory_id', '=', 'utility_territories.id')
            ->leftJoin('utility_territory_zips', 'utility_territory_zips.utility_territory_id', '=',
                'utility_territories.id')
            ->leftJoin('zips', 'utility_territory_zips.zip_id', '=', 'zips.id')
            ->leftJoin('commodities', 'products.commodity_id', '=', 'commodities.id')
            ->leftJoin('product_types', 'products.product_type_id', '=', 'product_types.id')
            ->leftJoin('marketers', 'products.marketer_id', '=', 'marketers.id')
            ->where('marketers.id', $marketer->id)
            ->where('zips.zip', '=', $zip->zip)
            ->where('products.revenue_class', 'LIKE', (Str::is('all', $revenueClass) ? '%%' : $revenueClass ))
            ->where('products.enabled', '=', true)
            ->select([
                'products.id',
                'commodities.id as commodity_id',
                'commodities.code as commodity',
                DB::raw('ROUND(products.rate * 100, 3) as rate'),
                DB::raw('ROUND(products.secondary_rate * 100, 3) as secondaryRate'),
                'products.unit_of_measure as uOfM',
                'products.term_months as termLength',
                'products.secondary_term_months as secondaryTermLength',
                'product_types.name as termType',
                'products.enroll_fee as enrollFee',
                'products.cancel_fee as cancelFee',
                'products.website_description as description',
                'products.renewable_type as renewable',
                'utility_territories.id as utilityId',
                'utility_territories.name as utilityName',
                'utility_territories.territory_code as utilityCode',
                'commodities.symbol as serviceTypeCode',
                'zips.state_id as state_id',
                'marketers.code',
                'products.revenue_class',
                DB::raw('1 as edi_provider')
            ])
            ->get();

        return $products;

    }

    public function SearchProductsByIdZipcode(Marketer $marketer, $id, Zip $zip)
    {
        return DB::table('products')
            ->leftJoin('utility_territories', 'products.utility_territory_id', '=', 'utility_territories.id')
            ->leftJoin('utility_territory_zips', 'utility_territory_zips.utility_territory_id', '=',
                'utility_territories.id')
            ->leftJoin('zips', 'utility_territory_zips.zip_id', '=', 'zips.id')
            ->leftJoin('commodities', 'products.commodity_id', '=', 'commodities.id')
            ->leftJoin('product_types', 'products.product_type_id', '=', 'product_types.id')
            ->where('products.id', '=', $id)
            ->where('products.enabled', '=', true)
            ->select([
                'products.id',
                'commodities.id as commodity_id',
                'commodities.code as commodity',
                DB::raw('ROUND(products.rate * 100, 3) as rate'),
                'products.unit_of_measure as uOfM',
                'products.term_months as termLength',
                'product_types.name as termType',
                DB::raw('ROUND(products.secondary_rate * 100, 3) as secondaryRate'),
                'products.secondary_term_months as secondaryTermLength',
                'products.enroll_fee as enrollFee',
                'products.cancel_fee as cancelFee',
                'utility_territories.id as utilityId',
                'utility_territories.name as utilityName',
                'products.website_description as description',
                'products.renewable_type as renewable',
                'utility_territories.primary_account_field_label',
                'utility_territories.primary_account_field_regex',
                'utility_territories.primary_account_field_help_text',
                'utility_territories.primary_account_field_error_text',
                'utility_territories.secondary_account_field_required',
                'utility_territories.secondary_account_field_label',
                'utility_territories.secondary_account_field_regex',
                'utility_territories.secondary_account_field_help_text',
                'utility_territories.secondary_account_field_error_text',
                'utility_territories.requires_name_key',
                'zips.state_id as state_id',
                'products.revenue_class',
                'products.marketer_id',
            ])
            ->first();
    }


}