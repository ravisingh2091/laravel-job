<?php

namespace App\Mail;

use App\Enrollment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnrollmentNotificationMailable extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $enrollment;

    /**
     * Create a new message instance.
     *
     * @param Enrollment $enrollment
     */
    public function __construct(Enrollment $enrollment)
    {
        $this->enrollment = $enrollment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to('jcharlesworth@gmail.com')
            ->from($this->enrollment->marketer->support_email, $this->enrollment->marketer->short_name)
            ->subject($this->enrollment->marketer->short_name . ' ' . $this->enrollment->commodityName() . ' Enrollment Received')
            ->view('emails.notifications.enrollment', ['marketer' => $this->enrollment->marketer->short_name]);
    }
}
