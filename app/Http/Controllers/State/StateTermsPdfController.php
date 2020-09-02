<?php

namespace App\Http\Controllers\State;

use App\LegalTemplate;
use App\Marketer;
use App\Services\PDF\PdfGenerator;
use App\State;

class StateTermsPdfController
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
            return response(
                PdfGenerator::createTermsPdf($terms->template_html),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment; filename="terms.pdf"'
                )
            );
        }

        return response('terms not found', 404);
    }
}