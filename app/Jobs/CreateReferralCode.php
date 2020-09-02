<?php

namespace App\Jobs;

use App\Enrollment;
use App\ReferralCode;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateReferralCode implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $enrollment;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Enrollment $enrollment)
    {
        $this->enrollment = $enrollment;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $referralCode = new ReferralCode();
        $referralCode->code = strtoupper(substr(md5(microtime()), rand(0, 26), 6));
        $referralCode->is_active = true;
        $this->enrollment->referralCode()->save($referralCode);
        $this->enrollment->logs()->create(['content' => 'Created new active referral code: ' . $referralCode->code]);

        if (config('palmco.raf_enabled')) {

            if (
                (config('palmco.raf_test_mode') && in_array($this->enrollment->email,
                        config('palmco.test_mode_emails'))) ||
                (!config('palmco.raf_test_mode')) && $this->enrollment->marketer_id === 1
            ) {

                $job = (new SendReferralCodeEmail($referralCode));
                $job->delay(Carbon::now()->addMinutes(config('palmco.raf_email_delay_mins')));
                dispatch($job);
            }

        }
    }
}
