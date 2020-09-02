<?php

namespace App\Listeners;

use App\Events\EnrollmentProcessed;
use App\Services\Integration\Palmco\WebEnrollmentExporter;

class ExportProcessedEnrollment
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  EnrollmentExportRequested $event
     * @return void
     */
    public function handle(EnrollmentProcessed $event)
    {
        if (config('palmco.enrollment_endpoint_enabled') &&
            !in_array($event->enrollment->email, config('palmco.test_mode_emails'))
        ) {
            $exporter = new WebEnrollmentExporter();
            $exporter->exportEnrollment($event->enrollment);
        }
    }
}
