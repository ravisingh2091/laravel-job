<?php

namespace App\Http\Controllers\State;

use App\LegalTemplate;
use App\Marketer;
use App\State;

class StateTermsController
{

    public function show(Marketer $marketer, $state_code, $locale)
    {
        $state = State::whereCode($state_code)
            ->firstOrFail();

        $terms = LegalTemplate::where('marketer_id', $marketer->id)
            ->where('state_id', $state->id)
            ->where('template_type', 'Terms of Service')
            ->where('locale_code', $locale)
            ->where('is_active', true)
            ->first();

        if ($terms) {
            return view('legal_templates.body',
                [
                    'logo_url' => $marketer->terms_logo_url,
                    'contents' => $terms->template_html,
                    'pdf_url' => route('api.state.pdf.terms', ['marketer' => $marketer->code, 'state_code' => $state_code, 'locale' => $locale])
                ]);
        }

        return response('terms not found', 404);
    }
}