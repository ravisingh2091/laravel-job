<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\LegalTemplate;
use App\Marketer;
use App\Product;
use App\Services\Product\ProductSearchService;
use App\State;
use App\StateDocumentUrl;
use App\UtilityTerritoryDocumentUrl;
use App\Zip;
use Illuminate\Support\Str;

class ProductDetailsController extends Controller
{
    protected $productSearch;

    public function __construct(ProductSearchService $productSearchService)
    {
        $this->productSearch = $productSearchService;
    }

    public function show(Marketer $marketer, $zip, $id)
    {
        $zipCode = Zip::where('zip', $zip)->firstOrFail();

        if (is_null($zipCode)) {
            return ['result' => 'invalid_zip'];
        }

        $state = State::where('code', $zipCode->state_code)->firstOrFail();

        $product = $this->productSearch->SearchMarketerProductByIdZipcode($marketer, $id, $zipCode, $state);

        if ($product) {

            $all_docs = [];
            $contractSummaryUrls = [];

            if (Str::is('internal', $state->edi_provider)) {

                $p = Product::find($product->id);

                $contractSummaries = LegalTemplate::where('state_id', $p->utilityTerritory->state_id)
                    ->where('template_type', 'Contract Summary')
                    ->where(function ($q) use ($p) {
                        $q->where('renewable_type', $p->renewable_type)
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
                    $contractSummaryUrl = route('api.product.contract_summary', [$product->id, $contractSummary->locale_code]);
                    $contractSummaryUrls[] = [
                        'name' => 'Contract Summary (' . $contractSummary->locale_code . ')',
                        'type' => 'url',
                        'url' => $contractSummaryUrl
                    ];
                }

                $state_all_docs = StateDocumentUrl::enabled()
                    ->where('state_id', $product->state_id)
                    ->where('marketer_id', $product->marketer_id)
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

                $utility_docs = UtilityTerritoryDocumentUrl::enabled()
                    ->where('utility_territory_id', '=', $product->utilityId)
                    ->where('marketer_id', $product->marketer_id)
                    ->select(
                        [
                            'utility_territory_document_urls.name',
                            'utility_territory_document_urls.type',
                            'utility_territory_document_urls.url',
                        ]
                    )
                    ->get()
                    ->toArray();

                $all_docs = array_merge($contractSummaryUrls, $state_all_docs, $utility_docs);
            }

            $product = json_decode(json_encode($product), true);
            $product['docs'] = $all_docs;

            return [
                'result' => 'success',
                'product' => $product
            ];
        }

        return [
            'result' => 'failed',
            'message' => 'No product found matching search criteria',
            'count' => 0,
        ];

    }
}
