<?php

namespace App\Http\Controllers\Referral;


use App\Events\ReferralCodeEmailRequested;
use App\ReferralCode;

class RequestReferralCodeEmailController
{
    public function post(ReferralCode $referralCode)
    {
        event(new ReferralCodeEmailRequested($referralCode));
        return redirect()->route('enrollments.show', $referralCode->enrollment);
    }
}