<?php

namespace TamTam\Events;

use TamTam\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class FeedWasFetched extends Event
{
    use SerializesModels;
    /**
     * @var
     */
    public $response;
    /**
     * @var
     */
    public $type;

    /**
     * Create a new event instance.
     *
     * @param $response
     * @param $type
     */
    public function __construct($response, $type)
    {
        //
        $this->response = $response;
        $this->type = $type;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
