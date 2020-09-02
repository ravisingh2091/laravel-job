<?php

namespace App\Observers;


use App\Enrollment;
use Illuminate\Support\Str;

class EnrollmentObserver
{
    public function creating(Enrollment $enrollment)
    {
        $enrollment->external_id = substr(md5(microtime()),rand(0,26),10);
        $enrollment->utility_account_number = $this->buildUtilityAccountNumber($enrollment);
        return true;
    }

    public function updating(Enrollment $enrollment)
    {
        $enrollment->utility_account_number = $this->buildUtilityAccountNumber($enrollment);
        return true;
    }

    private function buildUtilityAccountNumber(Enrollment $enrollment)
    {
        $account_number = $enrollment->primary_account_number;

        if (Str::is('internal', $enrollment->edi_provider)) {
            if ($enrollment->product->utilityTerritory->secondary_account_field_required) {
                $account_number .= '-' . $enrollment->secondary_account_number;
            }
        }

        return $account_number;
    }
}