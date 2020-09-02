<?php

namespace App\Events;

use App\ReferralCode;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ReferralCodeEmailRequested
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $referralCode;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ReferralCode $referralCode)
    {
        $this->referralCode = $referralCode;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('referral-code-email-requested');
    }
}
