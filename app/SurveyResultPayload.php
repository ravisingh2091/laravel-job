<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyResultPayload extends Model
{
    protected $fillable = ['json_payload'];

    public function surveyResults()
    {
        return $this->hasMany(SurveyResult::class);
    }
}
