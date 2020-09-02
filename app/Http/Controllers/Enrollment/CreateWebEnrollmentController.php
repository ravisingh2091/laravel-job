<?php

namespace App\Http\Controllers\Enrollment;

use App\Enrollment;
use App\EnrollmentPayload;
use App\Events\WebEnrollmentReceived;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWebEnrollment;
use Illuminate\Http\Request;

class CreateWebEnrollmentController extends Controller
{
    public function store(Request $request)
    {
        $enrollmentPayload = EnrollmentPayload::create([
            'json_payload' => $request->getContent(),
        ]);

        event(new WebEnrollmentReceived($enrollmentPayload));

        return response()->json([
            'result' => 'success'
        ]);

    }

}
