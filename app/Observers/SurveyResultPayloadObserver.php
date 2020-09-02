<?php

namespace App\Observers;

use App\SurveyResultPayload;

class SurveyResultPayloadObserver
{
    public function creating(SurveyResultPayload $surveyResultPayload)
    {
        $surveyResultPayload->status = 'pending';
        return true;
    }
}