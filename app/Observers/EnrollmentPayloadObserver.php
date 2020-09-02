<?php

namespace App\Observers;


use App\EnrollmentPayload;

class EnrollmentPayloadObserver
{

    public function creating(EnrollmentPayload $enrollmentPayload)
    {
        $data = json_decode($enrollmentPayload->json_payload, true);

        if (array_key_exists('electric_product_id', $data)
            && intval($data['electric_product_id']) > 0
        ) {
            $enrollmentPayload->electric_status = 'pending';
        } else {
            $enrollmentPayload->electric_status = null;
        }

        if (array_key_exists('gas_product_id', $data)
            && intval($data['gas_product_id']) > 0
        ) {
            $enrollmentPayload->gas_status = 'pending';
        } else {
            $enrollmentPayload->gas_status = null;
        }

        return true;
    }
}