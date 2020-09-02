<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class ReferralCode extends Model
{

    /**
     * The source enrollment that created this referral code.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }

    public function referrals()
    {
        return $this->hasMany(Referral::class);
    }

    public function referralUrl()
    {

        return $this->enrollment->marketer->raf_page_url . '?ref=' . $this->code;
    }
}
