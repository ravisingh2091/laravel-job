<?php

namespace App\Http\Search;


use App\Product;
use Illuminate\Http\Request;

class ProductSearchAll
{
    public static function apply(Request $filters)
    {
        $product = (new Product)->newQuery();

        $product->with(['marketer', 'commodity', 'utilityTerritory', 'utilityTerritory.state', 'productType', 'nextProduct'])->orderBy('products.id', 'desc');
        $product->select(['products.*']);

        if ($filters->filled('marketer_id')) {
            $product->where('marketer_id', $filters->input('marketer_id'));
        }

        if ($filters->filled('state_id')) {
            $product->join('utility_territories', 'products.utility_territory_id', '=', 'utility_territories.id')
                ->where('utility_territories.state_id', $filters->input('state_id'));
        }

        if ($filters->filled('commodity_id')) {
            $product->where('products.commodity_id', $filters->input('commodity_id'));
        }

        if ($filters->filled('utility_territory_id')) {
            $product->where('utility_territory_id', $filters->input('utility_territory_id'));
        }

        if ($filters->filled('product_type_id')) {
            $product->where('product_type_id', $filters->input('product_type_id'));
        }

        if ($filters->filled('revenue_class')) {
            $product->where('revenue_class', $filters->input('revenue_class'));
        }

        return $product->get();
    }

}