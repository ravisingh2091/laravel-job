<?php

namespace App\Transformers;

use App\Affirmation;
use App\Marketer;
use App\Services\DocumentBuilder\TermsLinkBuilder;
use App\State;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use League\Fractal\TransformerAbstract;


class StateTransformer extends TransformerAbstract
{
    protected $marketer;

    public function __construct(Marketer $marketer)
    {
        $this->marketer = $marketer;
    }


    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(State $state)
    {
        $affirmations = Affirmation::where('state_id', $state->id)
            ->where('marketer_id', $this->marketer->id)
            ->orderBy('display_order')
            ->select('affirmation')
            ->get()
            ->toArray();

        $affirmations = Arr::pluck($affirmations, 'affirmation');

        array_walk($affirmations, function (&$affirmation) use ($state) {
            if (Str::contains($affirmation, '[TERMS_URL]')) {
                $affirmation = str_replace('[TERMS_URL]',
                    TermsLinkBuilder::buildAffirmationTermsLink($this->marketer, $state), $affirmation);
            }

            if (Str::contains($affirmation, '[BOR_URL]')) {
                $affirmation = str_replace('[BOR_URL]',
                    TermsLinkBuilder::buildAffirmationBillOfRightsLink($this->marketer, $state), $affirmation);
            }

            if (Str::contains($affirmation, '[DL_URL]')) {
                $affirmation = str_replace('[DL_URL]',
                    TermsLinkBuilder::buildAffirmationDisclosureLabelLink($this->marketer, $state), $affirmation);
            }
        });

        return [
            'id' => (int)$state->id,
            'code' => $state->code,
            'name' => $state->name,
            'enrollment_form_header' => $state->enrollment_form_header,
            'affirmations' => $affirmations
        ];
    }
}
