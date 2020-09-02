<?php

namespace App\Events;


use App\ReferralCode;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ReferralCodeCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $referralCode;


    public function __construct(ReferralCode $referralCode)
    {
        $this->referralCode = $referralCode;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('referral-code-created');
    }
}