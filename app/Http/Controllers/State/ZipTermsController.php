<?php

namespace App\Http\Controllers\State;


use App\LegalTemplate;
use App\Marketer;
use App\State;

class ZipTermsController
{

    public function show(Marketer $marketer, $zip, $locale)
    {
        $state = State::whereHas('zips', function ($query) use ($zip) {
            $query->where('zip', $zip);
        })
            ->firstOrFail();


        $terms = LegalTemplate::where('marketer_id', $marketer->id)
            ->where('state_id', $state->id)
            ->where('template_type', 'Terms of Service')
            ->where('locale_code', $locale)
            ->where('is_active', true)
            ->first();

        if ($terms) {
            return view('legal_templates.body', ['contents' => $terms->template_html]);
        }

        return response('terms not found', 404);
    }
}