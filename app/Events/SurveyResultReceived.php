<?php

namespace App\Events;

use App\SurveyResultPayload;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SurveyResultReceived
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $surveyResultPayload;
    public $force = false;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(SurveyResultPayload $surveyResultPayload, $force = false)
    {
        $this->surveyResultPayload = $surveyResultPayload;
        $this->force = $force;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('survey-results');
    }
}
