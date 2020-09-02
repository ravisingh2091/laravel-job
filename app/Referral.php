<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{

    /**
     * The referral record used in the enrollment referenced by this record.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function referralCode()
    {
        return $this->belongsTo(ReferralCode::class);
    }


    /**
     * The enrollment that was referred.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
