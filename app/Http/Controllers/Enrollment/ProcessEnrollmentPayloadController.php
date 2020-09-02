<?php

namespace App\Http\Controllers\Enrollment;

use App\Enrollment;
use App\EnrollmentPayload;
use App\Events\WebEnrollmentReceived;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessEnrollmentPayload;
use App\Http\Requests\StoreWebEnrollment;
use Illuminate\Http\Request;

class ProcessEnrollmentPayloadController extends Controller
{
    public function post(EnrollmentPayload $enrollmentPayload)
    {
        event(new WebEnrollmentReceived($enrollmentPayload, false));
        return redirect()->action('EnrollmentPayloadController@index');
    }

}
