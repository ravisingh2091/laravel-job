<?php

namespace App\Http\Controllers\Enrollment;

use App\Enrollment;
use App\Events\EnrollmentExportRequested;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExportEnrollmentController extends Controller
{
    public function post(Enrollment $enrollment)
    {
        event(new EnrollmentExportRequested($enrollment));
        return redirect()->route('enrollments.index');
    }
}
