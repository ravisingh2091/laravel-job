<?php

namespace App\Listeners;

use App\Events\WebEnrollmentReceived;
use App\Services\Enrollment\EnrollmentPayloadParser;
use App\Services\Product\ProductSearchService;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProcessWebEnrollment implements ShouldQueue
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
     * @param  WebEnrollmentReceived  $event
     * @return void
     */
    public function handle(WebEnrollmentReceived $event)
    {
        $enrollmentParser = new EnrollmentPayloadParser(new ProductSearchService());
        $enrollmentParser->parsePayload($event->enrollmentPayload, $event->force);
    }
}
