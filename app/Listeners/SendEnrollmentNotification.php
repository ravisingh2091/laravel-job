<?php

namespace App\Listeners;

use App\Enrollment;
use App\Jobs\SendEnrollmentNotificationEmail;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEnrollmentNotification implements ShouldQueue
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
            'App\Listeners\SendEnrollmentNotification@onEnrollmentProcessed'
        );
    }

    public function onEnrollmentProcessed($event) {
        $this->sendNotification($event->enrollment);
    }

    private function sendNotification(Enrollment $enrollment) {
        //dispatch(new SendEnrollmentNotificationEmail($enrollment));
    }
}
