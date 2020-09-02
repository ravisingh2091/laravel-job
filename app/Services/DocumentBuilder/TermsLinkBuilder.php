<?php

namespace App\Services\DocumentBuilder;


use App\LegalTemplate;
use App\Marketer;
use App\Product;
use App\State;
use App\StateDocumentUrl;
use Illuminate\Support\Facades\URL;

class TermsLinkBuilder
{

    public static function buildAffirmationTermsLink(Marketer $marketer, State $state)
    {
        $termsForState = LegalTemplate::where('marketer_id', $marketer->id)
            ->where('state_id', $state->id)
            ->where('template_type', 'Terms of Service')
            ->where('is_active', true)
            ->get();

        if (count($termsForState) == 0) {
            return '';
        }

        $linkString = '';

        foreach ($termsForState as $terms) {
            $linkString .= '<a href="' .
                URL::route('api.state.terms',
                    ['marketer' => $marketer->code, 'state_code' => $state->code, 'locale' => $terms->locale_code]) .
                '" target="_blank">[ ' . self::localeString($terms->locale_code) . ' ]</a>&nbsp;';
        }

        return $linkString;
    }

    public static function buildAffirmationBillOfRightsLink(Marketer $marketer, State $state)
    {
        $url = StateDocumentUrl::enabled()
            ->where('marketer_id', $marketer->id)
            ->where('state_id', $state->id)
            ->where('name', 'ESCO Consumers Bill of Rights')
            ->where('show_on_signup_form', true)
            ->first();

        return '<a href="' . $url->url . '" target="_blank">' . $url->name . '</a>&nbsp;';

    }

    public static function buildAffirmationDisclosureLabelLink(Marketer $marketer, State $state)
    {
        $url = StateDocumentUrl::enabled()
            ->where('marketer_id', $marketer->id)
            ->where('state_id', $state->id)
            ->where('name', 'Disclosure Label')
            ->where('show_on_signup_form', true)
            ->first();

        return '<a href="' . $url->url . '" target="_blank">' . $url->name . '</a>&nbsp;';
    }


    public static function buildProductDetailsTermsLink(Marketer $marketer, State $state, $product)
    {
        $query = LegalTemplate::where('marketer_id', $marketer->id)
            ->where('state_id', $state->id)
            ->where('template_type', 'Terms of Service')
            ->where('is_active', true);

        if ($product) {
            $query = $query->where(function ($q) use ($product) {
                return $q->whereNull('utility_territory_id')
                    ->orWhere('utility_territory_id', $product->utility_territory_id);
                })
                ->where(function ($q) use ($product) {
                    $q->where('renewable_type', $product->renewable_type)
                        ->orWhere('renewable_type', 'uniform');
                })
                ->where(function($q) use ($product) {
                    $q->where('customer_type', $product->revenue_class)
                        ->orWhere('customer_type', 'uniform');
                });
        }

        $termsForState = $query->get();

        if (count($termsForState) == 0) {
            return [];
        }

        $links = [];
        

        foreach ($termsForState as $terms) {
            $links[] = [
                'url' => URL::route('api.state.terms',
                    [
                        'marketer' => $marketer->code,
                        'state_code' => $state->code,
                        'locale' => $terms->locale_code
                    ]),
                'name' => 'Terms and Conditions (' . self::localeString($terms->locale_code) . ')'
            ];
        }

        return $links;
    }

    private static function localeString($locale)
    {
        switch ($locale) {
            case 'en':
                return 'English';
                break;
            case 'es':
                return 'Spanish';
                break;
        }
    }
}