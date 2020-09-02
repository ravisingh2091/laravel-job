<?php

namespace App\Jobs;

use App\Events\ReferralCodeEmailRequested;
use App\ReferralCode;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendReferralCodeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $referralCode;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(ReferralCode $referralCode)
    {
        $this->referralCode = $referralCode;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        event(new ReferralCodeEmailRequested($this->referralCode));
    }
}
