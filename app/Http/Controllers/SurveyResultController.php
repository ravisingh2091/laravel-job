<?php

namespace App\Http\Controllers;


use App\SurveyResult;

class SurveyResultController
{
    public function index()
    {
        $surveyResults = SurveyResult::orderBy('created_at', 'desc')->get();
        return view('survey_result.index', compact('surveyResults'));
    }
}