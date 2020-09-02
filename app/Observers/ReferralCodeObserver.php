<?php

namespace Observers;


use App\ReferralCode;

class ReferralCodeObserver
{
    public function creating(ReferralCode $referralCode)
    {
        $referralCode->code = substr(md5(microtime()),rand(0,26), 6);
        return true;
    }
}