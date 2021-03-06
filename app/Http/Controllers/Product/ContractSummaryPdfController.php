<?php

namespace App\Http\Controllers\Product;


use App\Http\Controllers\Controller;
use App\LegalTemplate;
use App\Product;
use App\Services\DocumentBuilder\LegalDocumentBuilder;
use App\Services\PDF\PdfGenerator;

class ContractSummaryPdfController extends Controller
{

    public function show($id, $locale)
    {
        $product = Product::findOrFail($id);

        $contractSummary = LegalTemplate::where('state_id', $product->utilityTerritory->state_id)
            ->where('template_type', 'Contract Summary')
            ->where('locale_code', $locale)
            ->where(function ($q) use ($product) {
                $q->where('renewable_type', $product->renewable_type)
                    ->orWhere('renewable_type', 'uniform');
            })
            ->where(function($q) use ($product) {
                $q->where('customer_type', $product->revenue_class)
                    ->orWhere('customer_type', 'uniform');
            })
            ->where('marketer_id', $product->marketer_id)
            ->where(function ($q) use ($product) {
                $q->whereNull('product_type_id')
                    ->orWhere('product_type_id', $product->product_type_id);
            })
            ->where(function ($q) use ($product) {
                $q->whereNull('utility_territory_id')
                    ->orWhere('utility_territory_id', $product->utility_territory_id);
            })
            ->where(function ($query) use ($product) {
                $query->where('commodity_id', $product->commodity_id)
                    ->orWhere('commodity_id', 3);
            })
            ->where('is_active', true)
            ->first();

        if ($contractSummary) {

            $html = LegalDocumentBuilder::populateTemplateVariables($contractSummary->template_html, $product);
            return response(
                PdfGenerator::createTermsPdf($html),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment; filename="contract_summary.pdf"'
                )
            );
        }

        return response('contract summary not found', 404);
    }

}