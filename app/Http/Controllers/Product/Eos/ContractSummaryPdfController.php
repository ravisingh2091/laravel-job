<?php

namespace App\Http\Controllers\Product\Eos;


use App\Http\Controllers\Controller;
use App\LegalTemplate;
use App\Marketer;
use App\Product;
use App\ProductType;
use App\Services\DocumentBuilder\LegalDocumentBuilder;
use App\Services\PDF\PdfGenerator;
use App\Services\Product\ProductSearchService;
use App\State;
use App\Zip;

class ContractSummaryPdfController extends Controller
{
    protected $productSearchService;

    public function __construct(ProductSearchService $productSearchService)
    {
        $this->productSearchService = $productSearchService;
    }


    public function show(Marketer $marketer, $zipCode, $id, $locale)
    {
        $zip = Zip::where('zip', $zipCode)->firstOrFail();
        if (is_null($zip)) {
            return ['result' => 'invalid_zip'];
        }

        $state = State::where('code', $zip->state_code)->firstOrFail();

        $product = $this->productSearchService->SearchMarketerProductByIdZipcode($marketer, $id, $zip, $state);

        $contractSummary = LegalTemplate::where('state_id', $state->id)
            ->where('template_type', 'Contract Summary')
            ->where(function ($q) use ($product) {
                $q->where('renewable_type', $product->renewable_type)
                    ->orWhere('renewable_type', 'uniform');
            })
            ->where('locale_code', $locale)
            ->where(function ($q) use ($product) {
                $productType = ProductType::where('eos_name', $product->termType)->first();
                $q->whereNull('product_type_id')
                    ->orWhere('product_type_id', $productType->id);
            })
            ->where(function ($query) use ($product) {
                $query->where('commodity_id', $product->commodity_id)
                    ->orWhere('commodity_id', 3);
            })
            ->where('is_active', true)
            ->first();

        if ($contractSummary) {

            $html = LegalDocumentBuilder::populateTemplateVariablesFromEosProduct($contractSummary->template_html, $product);
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