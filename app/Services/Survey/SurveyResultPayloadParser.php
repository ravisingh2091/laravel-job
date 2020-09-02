<?php

namespace App\Services\Survey;


use App\Events\SurveyResultProcessed;
use App\Survey;
use App\SurveyResult;
use App\SurveyResultPayload;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SurveyResultPayloadParser
{
    protected $common_mapping = [
        'entity' => 'entity',
        'entry_id' => 'entry_id',
        'form_id' => 'form_id',
        'date_created' => 'date_created',
        'ip' => 'ip',
        'source_url' => 'source_url',
        'user_agent' => 'user_agent',
        'mailchimp_campaign_uid' => 'mailchimp_campaign_uid',
        'mailchimp_list_uid' => 'mailchimp_list_uid',
        'mailchimp_unique_id' => 'mailchimp_unique_id',
        'email' => 'email',
        'response_1' => 'response_1',
        'response_2' => 'response_2',
        'response_3' => 'response_3',
        'response_4' => 'response_4',
        'response_5' => 'response_5',
        'response_6' => 'response_6',
        'response_7' => 'response_7',
    ];

    public function __construct()
    {
    }

    public function parsePayload(SurveyResultPayload $surveyResultPayload, $force = false)
    {

        if ($surveyResultPayload->status == 'pending' || ($surveyResultPayload->status == 'processed' && $force)) {
            DB::transaction(function () use ($surveyResultPayload) {

                $data = json_decode($surveyResultPayload->json_payload, true);

                $surveyResult = $this->createSurveyResult($data, $this->common_mapping);
                $surveyResult->payload()->associate($surveyResultPayload);

                $survey = Survey::where('entity', $surveyResult->entity)
                    ->where('gravity_form_id', $surveyResult->form_id)
                    ->first();
                if ($survey) {
                    $surveyResult->survey()->associate($survey);
                }

                $surveyResult->save();

                $surveyResultPayload->processed_at = Carbon::now();
                $surveyResultPayload->status = 'processed';
                $surveyResultPayload->save();

                event(new SurveyResultProcessed($surveyResult));
            });
        }
    }

    private function createSurveyResult($data, $common_mapping)
    {
        $surveyResult = new SurveyResult();
        $surveyResult->forceFill(input_mapping($common_mapping, $data));

        return $surveyResult;
    }
}