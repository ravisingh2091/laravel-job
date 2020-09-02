<?php

namespace App\Http\Search;


use App\LegalTemplate;
use Illuminate\Http\Request;

class LegalTemplateSearch
{

    public static function apply(Request $filters)
    {
        $template = (new LegalTemplate())->newQuery();

        $template->with(['marketer', 'state', 'commodity', 'productType', 'utilityTerritory']);
        $template->select(['legal_templates.*']);

        if ($filters->filled('marketer_id')) {
            $template->where('marketer_id', $filters->input('marketer_id'));
        }

        if ($filters->filled('state_id')) {
            $template->where('legal_templates.state_id', $filters->input('state_id'));
        }

        if ($filters->filled('commodity_id')) {
            $template->where('legal_templates.commodity_id', $filters->input('commodity_id'));
        }

        if ($filters->filled('utility_territory_id')) {
            $template->where('utility_territory_id', $filters->input('utility_territory_id'));
        }

        if ($filters->filled('product_type_id')) {
            $template->where('product_type_id', $filters->input('product_type_id'));
        }

        if ($filters->filled('renewable')) {
            $template->where('renewable_type', $filters->input('renewable'));
        }

        if ($filters->filled('customer_type')) {
            $template->where('customer_type', $filters->input('customer_type'));
        }

        if ($filters->filled('locale_code')) {
            $template->where('locale_code', $filters->input('locale_code'));
        }

        if ($filters->filled('is_active')) {
            $template->where('is_active', $filters->input('is_active'));
        }

        return $template
            ->select('legal_templates.id', 'legal_templates.marketer_id', 'legal_templates.state_id',
            'legal_templates.template_type', 'legal_templates.commodity_id', 'legal_templates.locale_code',
            'legal_templates.renewable_type', 'legal_templates.product_type_id', 'legal_templates.utility_territory_id',
            'legal_templates.source_file_name', 'legal_templates.version', 'legal_templates.is_active',
            'legal_templates.updated_at', 'legal_templates.customer_type')
            ->orderBy('template_type')
            ->get();
    }
}