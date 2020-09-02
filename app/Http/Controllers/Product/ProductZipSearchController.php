<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\LegalTemplate;
use App\Marketer;
use App\Product;
use App\ProductType;
use App\Services\DocumentBuilder\TermsLinkBuilder;
use App\Services\Product\ProductSearchService;
use App\State;
use App\StateDocumentUrl;
use App\UtilityTerritoryDocumentUrl;
use App\Zip;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductZipSearchController extends Controller
{
    protected $productSearch;

    public function __construct(ProductSearchService $productSearchService)
    {
        $this->productSearch = $productSearchService;
    }


    public function show(Marketer $marketer, $zip, $revenueClass)
    {
        $zipCode = Zip::where('zip', $zip)->firstOrFail();

        if (is_null($zipCode)) {
            return ['result' => 'invalid_zip'];
        }

        $state = State::where('code', $zipCode->state_code)->firstOrFail();

        $products = $this->productSearch->SearchMarketerProductsByZipcode($marketer, $zipCode, $state, $revenueClass);

        if ($products->count() > 0) {

            $products_arr = [];

            foreach ($products as $product) {

                $product_arr = json_decode(json_encode($product), true);

                if (Str::is('green', $product->renewable)) {
                    $product_arr['display_order'] = 0;
                } else {
                    $product_arr['display_order'] = 1;
                }

                $product_arr['docs'] = [];

                if (Str::is('znalytics', $state->edi_provider)) {

                    $product_arr['docs'] = TermsLinkBuilder::buildProductDetailsTermsLink($marketer, $state, null);

                    $contractSummaryUrls = [];
                    $contractSummaries = LegalTemplate::where('state_id', $state->id)
                        ->where('template_type', 'Contract Summary')
                        ->where(function ($q) use ($product) {
                            $q->where('renewable_type', $product->renewable)
                                ->orWhere('renewable_type', 'uniform');
                        })
                        ->where(function($q) use ($product) {
                            $q->where('customer_type', $product->revenue_class)
                                ->orWhere('customer_type', 'uniform');
                        })
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
                        ->get();

                    foreach ($contractSummaries as $contractSummary) {
                        $contractSummaryUrl = route('api.eos_product.contract_summary',
                            [$marketer->code, $zip, $product->id, $contractSummary->locale_code]);
                        $contractSummaryUrls[] = [
                            'name' => 'Contract Summary (' . $contractSummary->locale_code . ')',
                            'type' => 'url',
                            'url' => $contractSummaryUrl
                        ];
                    }

                    if (count($contractSummaryUrls) > 0) {
                        $product_arr['docs'] = array_merge($product_arr['docs'], $contractSummaryUrls);
                    }

                } elseif (Str::is('internal', $state->edi_provider)) {

                    $p = Product::find($product->id);

                    $product_arr['docs'] = TermsLinkBuilder::buildProductDetailsTermsLink($marketer, $state, $p);

                    $contractSummaryUrls = [];
                    $contractSummaries = LegalTemplate::where('state_id', $p->utilityTerritory->state_id)
                        ->where('template_type', 'Contract Summary')
                        ->where(function ($query) use ($p) {
                            $query->where('renewable_type', $p->renewable_type)
                                ->orWhere('renewable_type', 'uniform');
                        })
                        ->where(function($q) use ($p) {
                            $q->where('customer_type', $p->revenue_class)
                                ->orWhere('customer_type', 'uniform');
                        })
                        ->where('marketer_id', $p->marketer_id)
                        ->where(function ($q) use ($p) {
                            $q->whereNull('product_type_id')
                                ->orWhere('product_type_id', $p->product_type_id);
                        })
                        ->where(function ($q) use ($p) {
                            $q->whereNull('utility_territory_id')
                                ->orWhere('utility_territory_id', $p->utility_territory_id);
                        })
                        ->where(function ($query) use ($p) {
                            $query->where('commodity_id', $p->commodity_id)
                                ->orWhere('commodity_id', 3);
                        })
                        ->where('is_active', true)
                        ->get();

                    foreach ($contractSummaries as $contractSummary) {
                        $contractSummaryUrl = route('api.product.contract_summary',
                            [$product->id, $contractSummary->locale_code]);
                        $contractSummaryUrls[] = [
                            'name' => 'Contract Summary (' . $contractSummary->locale_code . ')',
                            'type' => 'url',
                            'url' => $contractSummaryUrl
                        ];
                    }

                    if (count($contractSummaryUrls) > 0) {
                        $product_arr['docs'] = array_merge($product_arr['docs'], $contractSummaryUrls);
                    }

                    $utility_docs = UtilityTerritoryDocumentUrl::enabled()
                        ->where('marketer_id', $marketer->id)
                        ->where('utility_territory_id', '=', $product->utilityId)
                        ->select(
                            [
                                'utility_territory_document_urls.name',
                                'utility_territory_document_urls.type',
                                'utility_territory_document_urls.url',
                            ]
                        )
                        ->get()
                        ->toArray();

                    if (count($utility_docs) > 0) {
                        $product_arr['docs'] = array_merge($product_arr['docs'], $utility_docs);
                    }
                }

                $state_all_docs = StateDocumentUrl::enabled()
                    ->where('marketer_id', $marketer->id)
                    ->where('state_id', '=', $product->state_id)
                    ->where(function ($q) use ($product) {
                        $q->whereNull('commodity_id')
                            ->orWhere('commodity_id', '=', $product->commodity_id);
                    })
                    ->select(
                        [
                            'state_document_urls.name',
                            'state_document_urls.type',
                            'state_document_urls.url',
                        ])
                    ->get()
                    ->toArray();

                if (count($state_all_docs) > 0) {
                    $product_arr['docs'] = array_merge($product_arr['docs'], $state_all_docs);
                }

                $products_arr[] = $product_arr;
            }

            $zipCode->setVisible(['zip', 'city', 'state_code']);

            return [
                'zip' => $zipCode,
                'state' => $state->name,
                'revenueClass' => $revenueClass,
                'result' => 'success',
                'count' => $products->count(),
                'message' => $products->count() . ' matching product(s) found',
                'products' => $products_arr,
                'enroll_url' => $state->enrollment_form_relative_url,
            ];
        }

        return [
            'zip' => $zipCode,
            'state' => $state->name,
            'revenueClass' => $revenueClass,
            'result' => 'failed',
            'message' => 'No products found matching search criteria',
            'count' => 0,
        ];

    }
}
