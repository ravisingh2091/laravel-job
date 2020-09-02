<?php

namespace App\Listeners;


use App\Mail\ReferralCodeMailable;
use App\ReferralCode;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendReferralCode implements ShouldQueue
{

    public $queue = 'confirmations';

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function subscribe($events) {

        $events->listen(
            'App\Events\ReferralCodeEmailRequested',
            'App\Listeners\SendReferralCode@onEmailRequested'
        );
    }

    public function onEmailRequested($event) {
        $this->send($event->referralCode);
    }

    private function send(ReferralCode $referralCode) {
        if (!$referralCode->enrollment->serviceZip->state->send_referral_emails)
            return;


        $message = (new ReferralCodeMailable($referralCode))
            ->onQueue('confirmations');

        Mail::queue($message);

        $referralCode->enrollment->logs()->create(['content' => 'Referral code email queued to send']);
        $referralCode->sent_at = Carbon::now();
        $referralCode->save();
    }

}