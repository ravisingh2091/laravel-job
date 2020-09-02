<?php

namespace App\Http\Controllers;

use App\Commodity;
use App\Exports\StateDocumentUrlExport;
use App\Http\Requests\StoreStateDocumentUrl;
use App\Http\Search\StateDocumentUrlSearch;
use App\Marketer;
use App\ProductType;
use App\State;
use App\StateDocumentUrl;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StateDocumentUrlController extends Controller
{

    public function index(Request $request)
    {
        $marketers = Marketer::orderBy('name')->pluck('name', 'id');
        $states = State::orderBy('name')->pluck('name', 'id');
        $enabled = [
            'true' => 'Enabled',
            'false' => 'Disabled'
        ];

        $template_types = [
            'Contract Summary' => 'Contract Summary',
            'Environment Disclosure' => 'Environmental Disclosure',
            'Terms of Service' => 'Terms of Service',
            'Utility Supplement' => 'Utility Supplement'
        ];

        $commodities = Commodity::orderBy('name')->pluck('name', 'id');

        $localeCodes = [
            'en' => 'English',
            'es' => 'Spanish',
        ];

        $renewableTypes = ['brown' => 'Brown', 'green' => 'Green', 'uniform' => 'Uniform'];
        $productTypes = ProductType::orderBy('name')->pluck('name', 'id');
        $customerTypes = ['residential' => 'Residential', 'commercial' => 'Commercial', 'uniform' => 'Uniform'];

        $urls = StateDocumentUrlSearch::apply($request);

        return view('state_document_urls.index', compact('urls', 'marketers', 'states',
            'enabled', 'commodities', 'localeCodes', 'renewableTypes', 'productTypes', 'customerTypes',
            'template_types', 'request'));
    }

    public function create()
    {
        $stateDocumentUrl = new StateDocumentUrl();

        $states = State::orderBy('name')->pluck('name', 'id');
        $marketers = Marketer::orderBy('name')->pluck('name', 'id');
        $template_types = [
            'Contract Summary' => 'Contract Summary',
            'Environment Disclosure' => 'Environmental Disclosure',
            'Terms of Service' => 'Terms of Service',
            'Utility Supplement' => 'Utility Supplement'
        ];

        $types = [
            'link' => 'Link',
            'pdf' => 'PDF',
        ];
        $commodities = Commodity::orderBy('name')->pluck('name', 'id');

        $product_types = ProductType::orderBy('name')->pluck('name', 'id');
        $product_types = $product_types->prepend('All', 0);

        $locale_codes = [
            'en' => 'English',
            'es' => 'Spanish',
        ];

        $renewable_types = ['brown' => 'Brown', 'green' => 'Green', 'uniform' => 'Uniform'];
        $revenue_classes = ['' => '', 'residential' => 'Residential', 'commercial' => 'Commercial', 'uniform' => 'Uniform'];

        return view('state_document_urls.create',
            compact('stateDocumentUrl','states', 'marketers', 'types', 'commodities', 'product_types',
                'locale_codes', 'renewable_types', 'revenue_classes', 'template_types'));
    }

    public function store(StoreStateDocumentUrl $request)
    {
        StateDocumentUrl::create($request->all());
        return redirect()->route('state-document-urls.index');
    }

    public function show(StateDocumentUrl $stateDocumentUrl)
    {
        return view('state_document_urls.show', compact('stateDocumentUrl'));
    }

    public function edit(StateDocumentUrl $stateDocumentUrl)
    {
        $states = State::orderBy('name')->pluck('name', 'id');
        $marketers = Marketer::orderBy('name')->pluck('name', 'id');
        $types = [
            'link' => 'Link',
            'pdf' => 'PDF',
        ];
        $commodities = Commodity::orderBy('name')->pluck('name', 'id');

        $product_types = ProductType::orderBy('name')->pluck('name', 'id');
        $product_types = $product_types->prepend('All', 0);

        $locale_codes = [
            'en' => 'English',
            'es' => 'Spanish',
        ];

        $renewable_types = ['brown' => 'Brown', 'green' => 'Green', 'uniform' => 'Uniform'];
        $revenue_classes = ['' => '', 'residential' => 'Residential', 'commercial' => 'Commercial', 'uniform' => 'Uniform'];

        $template_types = [
            'Contract Summary' => 'Contract Summary',
            'Environment Disclosure' => 'Environmental Disclosure',
            'Terms of Service' => 'Terms of Service',
            'Utility Supplement' => 'Utility Supplement'
        ];


        return view('state_document_urls.edit',
            compact('stateDocumentUrl', 'states', 'marketers', 'types', 'commodities', 'product_types',
                'locale_codes', 'renewable_types', 'revenue_classes', 'template_types'));
    }

    public function update(StoreStateDocumentUrl $request, StateDocumentUrl $stateDocumentUrl)
    {
        $stateDocumentUrl->update($request->all());
        return redirect()->route('state-document-urls.index');
    }

    public function destroy(StateDocumentUrl $stateDocumentUrl)
    {
//

    }


    public function exportExcel(Request $request)
    {
        return Excel::download(new StateDocumentUrlExport($request), 'state_document_urls.xlsx');
    }

}