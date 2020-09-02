<?php

namespace App\Listeners;

use App\Events\SurveyResultReceived;
use App\Services\Survey\SurveyResultPayloadParser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProcessSurveyResult
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SurveyResultReceived  $event
     * @return void
     */
    public function handle(SurveyResultReceived $event)
    {
        $surveyResultParser = new SurveyResultPayloadParser();
        $surveyResultParser->parsePayload($event->surveyResultPayload, $event->force);
    }
}
