<?php

namespace App\Mail;

use App\ConfirmationEmail;
use App\Enrollment;
use App\EnrollmentLog;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Config;

class EnrollmentConfirmationMailable extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $confirmationEmail;

    /**
     * Create a new message instance.
     *
     * @param Enrollment $enrollment
     */
    public function __construct(ConfirmationEmail $confirmationEmail)
    {
        $this->confirmationEmail = $confirmationEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $enrollment = $this->confirmationEmail->enrollment;

        if (!filter_var($enrollment->email, FILTER_VALIDATE_EMAIL)) {
            $enrollment->logs()->save(new EnrollmentLog(['content' => 'Aborted confirmation email - Invalid email address'] ));
            throw new \InvalidArgumentException('invalid confirmation email address: ' . $enrollment->email);
        }

        return $this->to($enrollment->email, $enrollment->displayName())
            ->from($enrollment->marketer->support_email, $enrollment->marketer->short_name)
            ->bcc(Config::get('palmco.notification_bcc_address'))
            ->subject($enrollment->marketer->short_name . ' ' . $enrollment->product->commodity->name . ' Enrollment Received')
            ->view('emails.body', ['body' => $this->confirmationEmail->contents]);
    }
}
