<?php

namespace App\Jobs;

use App\Mail\SurveyFollowupMailable;
use App\SurveyResult;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendSurveyFollowupEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $surveyResult;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(SurveyResult $surveyResult)
    {
        $this->surveyResult = $surveyResult;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $message = (new SurveyFollowupMailable($this->surveyResult))
            ->onQueue('notifications');

        Mail::queue($message);

        $this->surveyResult->followup_sent_at = Carbon::now();
        $this->surveyResult->save();
    }
}
