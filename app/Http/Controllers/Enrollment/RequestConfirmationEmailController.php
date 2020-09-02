<?php

namespace App\Http\Controllers\Enrollment;

use App\Enrollment;
use App\Events\ConfirmationEmailRequested;
use App\Http\Controllers\Controller;

class RequestConfirmationEmailController extends Controller
{

    public function post(Enrollment $enrollment)
    {
        event(new ConfirmationEmailRequested($enrollment));
        return redirect()->route('enrollments.index');
    }

}
