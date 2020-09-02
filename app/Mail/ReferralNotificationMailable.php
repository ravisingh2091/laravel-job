<?php

namespace App\Mail;

use App\Referral;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Config;

class ReferralNotificationMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $referral;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Referral $referral)
    {
        $this->referral = $referral;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $originalEnrollment = $this->referral->referralCode->enrollment;
        $marketer = $originalEnrollment->marketer;

        return $this->to($originalEnrollment->email, $originalEnrollment->displayName())
            ->from($marketer->support_email, $marketer->short_name)
            ->bcc(Config::get('palmco.notification_bcc_address'))
            ->subject($marketer->short_name . ' Refer a Friend Enrollment Received')
            ->view('emails.referral.friend-enrolled')
            ->with(['originalEnrollment' => $originalEnrollment,
                    'friendEnrollment' => $this->referral->enrollment,
                    'referralCode' => $this->referral->referralCode,
                    'marketer' => $marketer
            ]);
    }
}
