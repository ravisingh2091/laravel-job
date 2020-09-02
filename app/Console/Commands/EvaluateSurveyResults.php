<?php

namespace App\Console\Commands;

use App\Services\Survey\SurveyResultEvaluator;
use App\SurveyResult;
use Illuminate\Console\Command;

class EvaluateSurveyResults extends Command
{
    protected $surveyResultEvaluator;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'survey:evaluate_results';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Re-evaluates any results that have not been sent followup, and have a current score of -1.';



    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(SurveyResultEvaluator $surveyResultEvaluator)
    {
        parent::__construct();
        $this->surveyResultEvaluator = $surveyResultEvaluator;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $results = SurveyResult::whereNull('followup_sent_at')
            ->where('score', -1)
            ->get();

        $results->each(function($surveyResult) {
            $this->surveyResultEvaluator->evaluate($surveyResult);

        });
    }
}
