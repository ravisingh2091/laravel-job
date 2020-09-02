<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Http\Search\ProductSearch;
use App\ProductType;
use App\State;
use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\StoreProduct;
use App\Marketer;
use App\UtilityTerritory;
use App\Commodity;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $marketers = Marketer::orderBy('name')->pluck('name', 'id');
        $states = State::orderBy('name')->pluck('name', 'id');
        $utilityTerritories = UtilityTerritory::with('commodity')
            ->orderBy('name')
            ->select('territory_code', 'name', 'id', 'commodity_id')
            ->get()
            ->pluck('full_name', 'id');

        $commodities = Commodity::where('name', '<>', 'Uniform')->orderBy('name')->pluck('name', 'id');
        $renewableTypes = ['brown' => 'Brown', 'green' => 'Green'];
        $productTypes = ProductType::orderBy('name')->pluck('name', 'id');
        $revenueClasses = ['residential' => 'Residential', 'commercial' => 'Commercial'];

        $products = ProductSearch::apply($request);

        return view('products.index', compact('products', 'marketers', 'states', 'utilityTerritories', 'commodities', 'renewableTypes', 'productTypes', 'revenueClasses', 'request'));
    }

    public function exportExcel(Request $request)
    {
        return Excel::download(new ProductExport($request), 'products.xlsx');
    }

    public function create()
    {
        $product = new Product();

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

        return view('products.create', compact('product', 'marketers', 'utilityTerritories', 'commodities',
            'productTypes', 'renewableTypes', 'revenueClasses'));

    }

    public function store(StoreProduct $request, Product $product)
    {
        $values = $request->all();

        $product->create($values);
        return redirect()->route('products.edit', $product);
    }

    public function edit(Product $product)
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

        return view('products.edit', compact('product', 'marketers', 'utilityTerritories', 'commodities',
                        'productTypes', 'renewableTypes', 'revenueClasses'));
    }

    public function update(StoreProduct $request, Product $product)
    {
        $values = $request->all();

        $product->update($values);
        return redirect()->route('products.index');
    }
}
