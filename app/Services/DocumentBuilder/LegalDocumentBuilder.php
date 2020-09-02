<?php

namespace App\Services\DocumentBuilder;

use App\Commodity;
use App\Product;
use App\UtilityTerritory;
use App\UtilityTerritoryRate;

class LegalDocumentBuilder
{

    public function __construct()
    {
    }

    public static function populateTemplateVariablesFromEosProduct($templateString, $product)
    {
        $productFields = $product->toArray();
        foreach ($productFields as $key => $value) {
            if (! is_array($value)) {
                $templateString = str_replace('[PRODUCT.' . strtoupper($key) . ']', strtoupper($value), $templateString);
            }
        }

        return $templateString;
    }

    public static function populateTemplateVariables($templateString, Product $product)
    {
        $productFields = $product->toArray();
        $utilityFields = $product->utilityTerritory->toArray();

        foreach($productFields as $key => $value) {
            if (! is_array($value)) {
                $templateString = str_replace('[PRODUCT.' . strtoupper($key) . ']', strtoupper($value), $templateString);
            }
        }


        if ($product->nextProduct) {
            $nextProductFields = $product->nextProduct->toArray();

            foreach($nextProductFields as $key => $value) {
                if (! is_array($value)) {
                    $templateString = str_replace('[NEXT_PRODUCT.' . strtoupper($key) . ']', strtoupper($value), $templateString);
                }
            }
        }


        foreach($utilityFields as $key => $value) {
            if (! is_array($value)) {
                $templateString = str_replace('[UTILITY.' . strtoupper($key) . ']', strtoupper($value), $templateString);
            }
        }

        $templateString = self::populateAdditionalVariables($templateString, $product);

        $templateString = self::populateUtilityComparisons($templateString, $product);


        return $templateString;
    }

    private static function populateAdditionalVariables($templateString, Product $product)
    {
        $templateString = str_replace('[PRODUCT.TOTAL_TERM_LENGTH]', $product->term_months + $product->secondary_term_months, $templateString);

        // If the secondary rate is 0, hide the entire block of secondary rate text (if present in [SECONDARY_RATE][/SECONDARY_RATE] tags)
        if ($product->secondary_rate == 0) {
            $templateString = preg_replace('/\[SECONDARY_RATE_TEXT](.*?)\[SECONDARY_RATE_TEXT]/', '', $templateString);
        }

        return $templateString;
    }

    private static function populateUtilityComparisons($templateString, Product $product)
    {
        $table = '';

        if ($product->utilityTerritory->state->code === 'NJ') {
            $table = self::buildUtilityComparison($product, 'electric');
            $templateString = str_replace('[NJ_E_UTILITY_COMPARISON]', $table, $templateString);

            $table = self::buildUtilityComparison($product, 'gas');
            $templateString = str_replace('[NJ_G_UTILITY_COMPARISON]', $table, $templateString);
        }

        return $templateString;
    }

    private static function buildUtilityComparison(Product $product, $commodity)
    {

        if ($commodity == 'electric') {
            $calcs = [500, 1000, 1500, 2000];
            $view = 'emails.enrollment._e_utility_comparison';
        } else {
            $calcs = [50, 100, 150, 200];
            $view = 'emails.enrollment._g_utility_comparison';
        }

        $commodity = Commodity::whereCode($commodity)->first();

        $stateUtilities = UtilityTerritory::whereStateId($product->utilityTerritory->state_id)
            ->where('commodity_id', $commodity->id)
            ->orderBy('territory_code')->get();

        $table = [];
        foreach($stateUtilities as $util) {
            $table[] = self::buildUtilityComparisonRow($util, $calcs);
        }

        return view($view, compact('table'));
    }


    private static function buildUtilityComparisonRow(UtilityTerritory $utilityTerritory, array $calcs)
    {
        $row = [];

        $currentUtilityRate = UtilityTerritoryRate::whereUtilityTerritoryId($utilityTerritory->id)->orderBy('effective_at', 'desc')->first()->rate;
        $currentRate = Product::whereUtilityTerritoryId($utilityTerritory->id)
            ->where('enabled', true)
            ->first()
            ->rate;

        $row['utility'] = $utilityTerritory->territory_code;
        $row['utility_rate'] = $currentUtilityRate;
        $row['pe_rate'] = $currentRate;

        foreach ($calcs as $calc) {
            $row['utility_'.$calc] = $currentUtilityRate * $calc;
            $row['pe_'.$calc] = $currentRate * $calc;
        }

        return $row;
    }
}