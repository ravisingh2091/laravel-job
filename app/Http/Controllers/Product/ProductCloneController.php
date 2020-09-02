<?php

namespace App\Http\Controllers\Product;


use App\Commodity;
use App\Http\Requests\CloneProduct;
use App\Http\Requests\StoreCloneProduct;
use App\Marketer;
use App\Product;
use App\ProductType;
use App\UtilityTerritory;
use Illuminate\Support\Facades\DB;

class ProductCloneController
{

    public function create(Product $product)
    {
        $marketers = Marketer::orderBy('name')->pluck('name', 'id');
        $utilityTerritories = UtilityTerritory::with('commodity')
            ->orderBy('name')
            ->select('territory_code', 'name', 'id', 'commodity_id')
            ->get()
            ->pluck('full_name', 'id');

        $commodities = Commodity::where('name', '<>', 'Uniform')->orderBy('name')->pluck('name', 'id');
        $productTypes = ProductType::orderBy('name')->pluck('name', 'id');
        $renewableTypes = ['brown' => 'Brown', 'green' => 'Green'];
        $revenueClasses = ['residential' => 'Residential', 'commercial' => 'Commercial'];

        return view('products.clone', compact('product', 'marketers', 'utilityTerritories', 'commodities',
            'productTypes', 'renewableTypes', 'revenueClasses'));

    }

    public function store(StoreCloneProduct $request, Product $product)
    {
        $newProduct = Product::create($request->except(['id', 'disable_source_product']));

        if ($request->filled('disable_source_product')) {
            $product->update(['enabled' => !$request->input('disable_source_product')]);
        }

        return redirect()->route('products.edit', $newProduct);
    }
}