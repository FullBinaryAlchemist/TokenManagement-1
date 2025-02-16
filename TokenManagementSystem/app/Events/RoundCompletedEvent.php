<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Submissions;
use App\Round;
use App\Participant;

class RoundCompletedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $submission;
    public $round_id;
    public $participant;
    public function __construct(Submissions $submission, Round $round_id, $participant)
    {
        \Log::debug("Calling from RoundCompletedEvent for S:$submission->id R:{$round_id} P:$participant");

        $this->submission=$submission;
        $this->round_id=$round_id;
        $this->participant=$participant;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
