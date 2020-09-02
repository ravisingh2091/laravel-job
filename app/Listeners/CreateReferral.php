<?php

namespace App\Listeners;

use App\Events\EnrollmentProcessed;
use App\Events\ReferralCreated;
use App\Referral;
use App\ReferralCode;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class CreateReferral
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
     * @param  EnrollmentProcessed  $event
     * @return void
     */
    public function handle(EnrollmentProcessed $event)
    {
        $enrollment = $event->enrollment;

        try {
            if (!empty($enrollment->referral_code) && $enrollment->marketer_id === 1) {
                $referralCode = ReferralCode::where('is_active', true)
                    ->whereCode($enrollment->referral_code)
                    ->firstOrFail();

                $referral = new Referral();
                $referral->referralCode()->associate($referralCode);
                $referral->enrollment()->associate($enrollment);
                $referral->save();

                $enrollment->logs()->create(['content' => 'Created new referral based on existing code: ' . $referralCode->code]);

                event(new ReferralCreated($referral));
            }
        } catch (\Exception $e) {
            Log::warning('Referral Code not found');
        }
    }
}
