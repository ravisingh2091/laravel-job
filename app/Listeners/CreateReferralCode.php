<?php

namespace App\Listeners;

use App\Events\AppEventsEnrollmentProcessed;
use App\Events\EnrollmentProcessed;
use App\Jobs\SendReferralCodeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;


class CreateReferralCode implements ShouldQueue
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
     * @param EnrollmentProcessed $event
     */
    public function handle(EnrollmentProcessed $event)
    {
        dispatch(new \App\Jobs\CreateReferralCode($event->enrollment));
    }
}
