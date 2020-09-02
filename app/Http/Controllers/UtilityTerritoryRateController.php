<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreUtilityTerritoryRate;
use App\UtilityTerritory;
use App\UtilityTerritoryRate;
use Illuminate\Support\Facades\DB;

class UtilityTerritoryRateController extends Controller
{

    public function index()
    {
        $rates = UtilityTerritoryRate::orderBy('effective_at', 'desc')->get();
        return view('utility_territory_rates.index', compact('rates'));
    }

    public function create()
    {
        $rate = new UtilityTerritoryRate();
        $utilities = UtilityTerritory::join('commodities', 'utility_territories.commodity_id', '=', 'commodities.id')
            ->select([ DB::raw("utility_territories.name || ' - ' || commodities.name as name"),'utility_territories.id'])
            ->orderBy('name')
            ->pluck('name', 'id');
        return view('utility_territory_rates.create', compact('rate', 'utilities'));
    }

    public function store(StoreUtilityTerritoryRate $request)
    {
        UtilityTerritoryRate::create($request->all());
        return redirect()->route('utility-rates.index');
    }

    public function edit(UtilityTerritoryRate $utility_rate)
    {
        return view('utility_territory_rates.edit', compact('utility_rate'));
    }

    public function update(StoreUtilityTerritoryRate $request, UtilityTerritoryRate $utility_rate)
    {
        $utility_rate->update($request->all());
        return redirect()->route('utility-rates.index');
    }

}