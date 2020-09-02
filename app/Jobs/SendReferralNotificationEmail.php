<?php

namespace App\Jobs;

use App\Mail\ReferralNotificationMailable;
use App\Referral;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendReferralNotificationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $referral;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Referral $referral)
    {
        $this->referral = $referral;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $message = (new ReferralNotificationMailable($this->referral))
            ->onQueue('notifications');

        Mail::queue($message);

        $this->referral->notification_sent_at = Carbon::now();
        $this->referral->save();

        $this->referral->enrollment->logs()->create(['content' => 'Referral notification sent to original referrer.']);
    }
}
