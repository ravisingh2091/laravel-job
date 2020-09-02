<?php

namespace App\Http\Controllers\Referral;


use App\ReferralCode;

class CheckReferralCodeController
{

    public function show($code)
    {
        $referralCode = ReferralCode::with('enrollment')
            ->whereCode($code)
            ->where('is_active', true)
            ->firstOrFail();

        $firstName = ($referralCode->enrollment && $referralCode->enrollment->first_name) ? $referralCode->enrollment->first_name : '';

        return response(['code' => $code, 'first_name' => $firstName], 200);
    }
}