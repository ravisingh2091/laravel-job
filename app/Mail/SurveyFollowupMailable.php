<?php

namespace App\Mail;

use App\SurveyResult;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Config;

class SurveyFollowupMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $surveyResult;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(SurveyResult $surveyResult)
    {
        $this->surveyResult = $surveyResult;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->surveyResult->email)
            ->bcc(Config::get('palmco.notification_bcc_address'))
            ->subject('Review us on Google')
            ->view('emails.survey.survey-followup');
    }

}
