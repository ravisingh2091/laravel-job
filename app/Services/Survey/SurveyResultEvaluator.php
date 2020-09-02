<?php

namespace App\Services\Survey;


use App\SurveyResult;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;

class SurveyResultEvaluator
{
    public function __construct()
    {
    }

    public function evaluate(SurveyResult $surveyResult)
    {
        $score = 0;

        if ($surveyResult->response_2) {
            if ($surveyResult->response_1 >= 4 &&
                $surveyResult->response_3 >= 4 &&
                $surveyResult->response_5 >= 4
            ) {
                $score = 10;
            }
        } else {
            if ($surveyResult->response_1 >= 4 &&
                $surveyResult->response_5 >= 4
            ) {
                $score = 10;
            }
        }

        $surveyResult->score = $score;
        $surveyResult->followup_send_at = ($score == 10) ? Carbon::now()->addMinutes(Config::get('palmco.survey_followup_delay_mins')) : null;
        $surveyResult->save();
    }
}