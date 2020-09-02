<?php


namespace App\Http\Search;

use App\StateDocumentUrl;
use Illuminate\Http\Request;

class StateDocumentUrlSearch
{

    public static function apply(Request $filters)
    {
        $url = (new StateDocumentUrl())->newQuery();

        $url->with(['marketer', 'state', 'commodity', 'productType']);
        $url->leftJoin('product_types', 'state_document_urls.product_type_id', '=', 'product_types.id');

        if ($filters->filled('marketer_id')) {
            $url->where('marketer_id', $filters->input('marketer_id'));
        }

        if ($filters->filled('state_id')) {
            $url->where('state_document_urls.state_id', $filters->input('state_id'));
        }

        if ($filters->filled('commodity_id')) {
            $url->where('state_document_urls.commodity_id', $filters->input('commodity_id'));
        }

        if ($filters->filled('enabled')) {
            $url->where('enabled', $filters->input('enabled'));
        }

        if ($filters->filled('product_type_id')) {
            $url->where('product_type_id', $filters->input('product_type_id'));
        }

        if ($filters->filled('renewable')) {
            $url->where('renewable_type', $filters->input('renewable'));
        }

        if ($filters->filled('customer_type')) {
            $url->where('revenue_class', $filters->input('customer_type'));
        }

        if ($filters->filled('locale_code')) {
            $url->where('locale_code', $filters->input('locale_code'));
        }

        if ($filters->filled('template_type')) {
            $url->where('template_type', $filters->input('template_type'));
        }


        return $url
            ->select('state_document_urls.id', 'state_document_urls.marketer_id', 'state_document_urls.state_id',
                'state_document_urls.name', 'state_document_urls.type', 'state_document_urls.commodity_id',
                'state_document_urls.url', 'state_document_urls.show_on_product_details', 'state_document_urls.show_on_signup_form',
                'state_document_urls.enabled', 'state_document_urls.created_at', 'state_document_urls.updated_at',
                'state_document_urls.template_type',
                'state_document_urls.contract_type',
                'state_document_urls.renewable_type',
                'state_document_urls.revenue_class',
                'state_document_urls.locale_code',
                'state_document_urls.product_type_id',
                'state_document_urls.source_file_name',
                'state_document_urls.version',
                'product_types.name'
                )
            ->orderBy('state_document_urls.updated_at', 'desc')
            ->get();
    }
}
