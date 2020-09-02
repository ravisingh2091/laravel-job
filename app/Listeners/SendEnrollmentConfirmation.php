<?php

namespace App\Listeners;

use App\Enrollment;
use App\EnrollmentLog;
use App\Jobs\SendEnrollmentConfirmationEmail;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEnrollmentConfirmation implements ShouldQueue
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

    public function subscribe($events) {
        $events->listen(
            'App\Events\EnrollmentProcessed',
            'App\Listeners\SendEnrollmentConfirmation@onEnrollmentProcessed'
        );

        $events->listen(
            'App\Events\ConfirmationEmailRequested',
            'App\Listeners\SendEnrollmentConfirmation@onConfirmationEmailRequested'
        );
    }

    public function onEnrollmentProcessed($event) {
        $this->sendConfirmation($event->enrollment);
    }

    public function onConfirmationEmailRequested($event) {
        $this->sendConfirmation($event->enrollment);
    }

    private function sendConfirmation(Enrollment $enrollment) {
        if (!$enrollment->serviceZip->state->send_confirmation_emails)
            return;

        $enrollment->logs()->save(new EnrollmentLog(['content' => 'Queuing confirmation email']));
        dispatch(new SendEnrollmentConfirmationEmail($enrollment));
    }
}
