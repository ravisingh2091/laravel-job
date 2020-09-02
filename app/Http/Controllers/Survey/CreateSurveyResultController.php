<?php

namespace App\Http\Controllers\Survey;


use App\Events\SurveyResultReceived;
use App\Http\Controllers\Controller;
use App\SurveyResultPayload;
use Illuminate\Http\Request;

class CreateSurveyResultController extends Controller
{
    public function store(Request $request)
    {
        $surveyResultPayload = SurveyResultPayload::create([
            'json_payload' => $request->getContent(),
        ]);

        event(new SurveyResultReceived($surveyResultPayload));

        return response()->json([
            'result' => 'success'
        ]);
    }
}