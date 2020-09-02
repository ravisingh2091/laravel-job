<?php

namespace App\Http\Controllers\Referral;


use App\Events\ReferralNotificationRequested;
use App\Referral;

class RequestReferralNotificationController
{

    public function post(Referral $referral)
    {
        event(new ReferralNotificationRequested($referral));
        return redirect()->route('enrollments.show', $referral->enrollment);
    }
}