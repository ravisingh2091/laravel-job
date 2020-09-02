<?php

namespace App\Listeners;

use App\Events\EnrollmentExportRequested;
use App\Services\Integration\Palmco\WebEnrollmentExporter;

class ExportEnrollment
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
     * @param  EnrollmentExportRequested  $event
     * @return void
     */
    public function handle(EnrollmentExportRequested $event)
    {
        $exporter = new WebEnrollmentExporter();
        $exporter->exportEnrollment($event->enrollment);

    }
}
