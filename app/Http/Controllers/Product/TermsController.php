<?php

namespace App\Http\Controllers\Product;


use App\Http\Controllers\Controller;
use App\LegalTemplate;
use App\Product;
use App\Services\DocumentBuilder\LegalDocumentBuilder;

class TermsController extends Controller
{

    public function show($id, $locale)
    {
        $product = Product::findOrFail($id);

        $terms = LegalTemplate::where('state_id', $product->utilityTerritory->state_id)
            ->where('template_type', 'Terms of Service')
            ->where('locale_code', $locale)
            ->where(function($query) use ($product) {
                $query->where('renewable_type', $product->renewable_type)
                    ->orWhere('renewable_type', 'uniform');
            })
            ->where(function($q) use ($product) {
                $q->where('customer_type', $product->revenue_class)
                    ->orWhere('customer_type', 'uniform');
            })
            ->where('marketer_id', $product->marketer_id)
            ->where(function($query) use ($product) {
                $query->where('commodity_id', $product->commodity_id)
                    ->orWhere('commodity_id', 3);
            })
            ->where(function ($q) use ($product) {
                $q->whereNull('product_type_id')
                    ->orWhere('product_type_id', $product->product_type_id);
            })
            ->where(function ($q) use ($product) {
                $q->whereNull('utility_territory_id')
                    ->orWhere('utility_territory_id', $product->utility_territory_id);
            })

            ->where('is_active', true)
            ->first();

        $logo_url = $product->marketer->terms_logo_url;


        if ($terms) {

            $html = LegalDocumentBuilder::populateTemplateVariables($terms->template_html, $product);

            return view('legal_templates.body',
                [
                    'logo_url' => $logo_url,
                    'pdf_url' => '#',
                    'contents' => $html
                ]
            );
        }

        return response('terms not found', 404);
    }
}