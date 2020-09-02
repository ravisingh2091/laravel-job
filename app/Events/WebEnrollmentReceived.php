<?php

namespace App\Events;

use App\EnrollmentPayload;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class WebEnrollmentReceived
{
    use InteractsWithSockets, SerializesModels;

    public $enrollmentPayload;
    public $force = false;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(EnrollmentPayload $enrollmentPayload, $force = false)
    {
        $this->enrollmentPayload = $enrollmentPayload;
        $this->force = $force;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('web-enrollments');
    }
}
