<?php

namespace App\Http\Controllers;

use App\Commodity;
use App\Exports\LegalTemplateExport;
use App\Http\Requests\StoreLegalTemplate;
use App\Http\Search\LegalTemplateSearch;
use App\LegalTemplate;
use App\Marketer;
use App\ProductType;
use App\State;
use App\UtilityTerritory;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class LegalTemplateController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $marketers = Marketer::orderBy('name')->pluck('name', 'id');
        $states = State::orderBy('name')->pluck('name', 'id');
        $utilityTerritories = UtilityTerritory::with('commodity')
            ->orderBy('name')
            ->select('territory_code', 'name', 'id', 'commodity_id')
            ->get()
            ->pluck('full_name', 'id');

        $localeCodes = [
            'en' => 'English',
            'es' => 'Spanish',
        ];

        $isActive = [
            'true' => 'Active',
            'false' => 'Not Active'
        ];

        $commodities = Commodity::orderBy('name')->pluck('name', 'id');
        $renewableTypes = ['brown' => 'Brown', 'green' => 'Green', 'uniform' => 'Uniform'];
        $productTypes = ProductType::orderBy('name')->pluck('name', 'id');
        $customerTypes = ['residential' => 'Residential', 'commercial' => 'Commercial', 'uniform' => 'Uniform'];

        $templates = LegalTemplateSearch::apply($request);

        return view('legal_templates.index', compact('templates', 'marketers', 'states',
            'utilityTerritories', 'commodities', 'renewableTypes', 'productTypes', 'localeCodes', 'customerTypes', 'isActive',
            'request'));
    }

    public function exportExcel(Request $request)
    {
        return Excel::download(new LegalTemplateExport($request), 'legal_templates.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $legal_template = new LegalTemplate();
        $marketers = Marketer::orderBy('name')->pluck('name', 'id');
        $states = State::orderBy('name')->pluck('name', 'id');

        $productTypes = ProductType::orderBy('name')->pluck('name', 'id');
        $productTypes = $productTypes->prepend('All', 0);
        $utilityTerritories = UtilityTerritory::orderBy('territory_code')->pluck('territory_code', 'id');
        $utilityTerritories = $utilityTerritories->prepend('All', 0);
        $customerTypes = ['residential' => 'Residential', 'commercial' => 'Commercial', 'uniform' => 'Uniform'];

        $types = [
            'Contract Summary' => 'Contract Summary',
            'Terms of Service' => 'Terms of Service',
            'Utility Supplement' => 'Utility Supplement'
        ];
        $commodities = Commodity::orderBy('name')->pluck('name', 'id');

        $locale_codes = [
            'en' => 'English',
            'es' => 'Spanish',
        ];

        return view('legal_templates.create',
            compact('legal_template', 'marketers', 'states', 'types', 'commodities',
                'locale_codes', 'productTypes', 'utilityTerritories', 'customerTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLegalTemplate $request)
    {
        $values = $request->all();

        if (intval($values['product_type_id']) === 0) {
            $values['product_type_id'] = null;
        }

        if (intval($values['utility_territory_id']) === 0) {
            $values['utility_territory_id'] = null;
        }


        LegalTemplate::create($values);
        return redirect()->route('legal-templates.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContractSummaryTemplate $contractSummaryTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(LegalTemplate $legal_template)
    {
        return view('legal_templates.show', compact('legal_template'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContractSummaryTemplate $contractSummaryTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(LegalTemplate $legal_template)
    {
        $states = State::orderBy('name')->pluck('name', 'id');
        $marketers = Marketer::orderBy('name')->pluck('name', 'id');
        $types = [
            'Contract Summary' => 'Contract Summary',
            'Terms of Service' => 'Terms of Service',
            'Utility Supplement' => 'Utility Supplement'
        ];
        $commodities = Commodity::orderBy('name')->pluck('name', 'id');

        $locale_codes = [
            'en' => 'English',
            'es' => 'Spanish',
        ];

        $productTypes = ProductType::orderBy('name')->pluck('name', 'id');
        $productTypes = $productTypes->prepend('All', 0);

        $utilityTerritories = UtilityTerritory::orderBy('territory_code')->pluck('territory_code', 'id');
        $utilityTerritories = $utilityTerritories->prepend('All', 0);
        $customerTypes = ['residential' => 'Residential', 'commercial' => 'Commercial', 'uniform' => 'Uniform'];

        return view('legal_templates.edit',
            compact('legal_template', 'marketers', 'states', 'types', 'commodities',
                'locale_codes', 'productTypes', 'utilityTerritories', 'customerTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\ContractSummaryTemplate $contractSummaryTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLegalTemplate $request, LegalTemplate $legal_template)
    {
        $values = $request->all();

        if (intval($values['product_type_id']) === 0) {
            $values['product_type_id'] = null;
        }

        if (intval($values['utility_territory_id']) === 0) {
            $values['utility_territory_id'] = null;
        }

        $legal_template->update($values);
        return redirect()->route('legal-templates.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContractSummaryTemplate $contractSummaryTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(LegalTemplate $legalTemplate)
    {
        //
    }
}
