<?php

namespace App\Mail;

use App\ReferralCode;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Config;

class ReferralCodeMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $referralCode;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ReferralCode $referralCode)
    {
        $this->referralCode = $referralCode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $marketer = $this->referralCode->enrollment->marketer;

        return $this->to($this->referralCode->enrollment->email, $this->referralCode->enrollment->displayName())
            ->from($marketer->support_email, $marketer->short_name)
            ->bcc(config('palmco.notification_bcc_address'))
            ->subject($marketer->short_name .' Refer A Friend Details')
            ->view('emails.referral.refer-a-friend')
            ->with(['referralCode' => $this->referralCode, 'marketer' => $marketer]);
    }
}
