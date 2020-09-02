<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUtilityTerritoryDocumentUrl;
use App\Marketer;
use App\UtilityTerritory;
use App\UtilityTerritoryDocumentUrl;

class UtilityTerritoryDocumentUrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $urls = UtilityTerritoryDocumentUrl::with(['marketer', 'utilityTerritory'])
            ->get();

        return view('utility_territory_document_urls.index', compact('urls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $utilityTerritoryDocumentUrl = new UtilityTerritoryDocumentUrl();

        $utilityTerritories = UtilityTerritory::orderBy('territory_code')->pluck('territory_code', 'id');
        $marketers = Marketer::orderBy('name')->pluck('name', 'id');
        $types = [
            'link' => 'Link',
            'pdf' => 'PDF',
        ];

        return view('utility_territory_document_urls.create',
            compact('utilityTerritoryDocumentUrl','utilityTerritories', 'marketers', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUtilityTerritoryDocumentUrl $request)
    {
        UtilityTerritoryDocumentUrl::create($request->all());
        return redirect()->route('utility-territory-document-urls.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UtilityTerritoryDocumentUrl  $utilityTerritoryDocumentUrl
     * @return \Illuminate\Http\Response
     */
    public function show(UtilityTerritoryDocumentUrl $utilityTerritoryDocumentUrl)
    {
        return view('utility-territory-document-urls.show', compact('utilityTerritoryDocumentUrl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UtilityTerritoryDocumentUrl  $utilityTerritoryDocumentUrl
     * @return \Illuminate\Http\Response
     */
    public function edit(UtilityTerritoryDocumentUrl $utilityTerritoryDocumentUrl)
    {
        $utilityTerritories = UtilityTerritory::orderBy('territory_code')->pluck('territory_code', 'id');
        $marketers = Marketer::orderBy('name')->pluck('name', 'id');
        $types = [
            'link' => 'Link',
            'pdf' => 'PDF',
        ];

        return view('utility_territory_document_urls.edit',
            compact('utilityTerritoryDocumentUrl','utilityTerritories', 'marketers', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UtilityTerritoryDocumentUrl  $utilityTerritoryDocumentUrl
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUtilityTerritoryDocumentUrl $request, UtilityTerritoryDocumentUrl $utilityTerritoryDocumentUrl)
    {
        $utilityTerritoryDocumentUrl->update($request->all());
        return redirect()->route('utility-territory-document-urls.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UtilityTerritoryDocumentUrl  $utilityTerritoryDocumentUrl
     * @return \Illuminate\Http\Response
     */
    public function destroy(UtilityTerritoryDocumentUrl $utilityTerritoryDocumentUrl)
    {
        //
    }
}
