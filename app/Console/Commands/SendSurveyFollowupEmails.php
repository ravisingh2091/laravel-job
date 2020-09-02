<?php

namespace App\Console\Commands;

use App\Jobs\SendSurveyFollowupEmail;
use App\SurveyResult;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SendSurveyFollowupEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'survey:send_followups';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send any pending survey followup emails that still need to be sent.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $followups = SurveyResult::where('score', 10)
            ->whereNull('followup_sent_at')
            ->where('followup_send_at', '<=', Carbon::now())
            ->get();

        $followups->each(function($surveyResult) {
            dispatch(new SendSurveyFollowupEmail($surveyResult));
        });

    }
}
