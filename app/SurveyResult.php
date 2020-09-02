<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyResult extends Model
{
    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function payload()
    {
        return $this->belongsTo(SurveyResultPayload::class, 'survey_results_payload_id');
    }
}
