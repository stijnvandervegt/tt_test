<?php

namespace TamTam\Events;

use TamTam\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ContactFormWasSaved extends Event
{
    use SerializesModels;

    public $contactFormData;

    /**
     * Create a new event instance.
     * @param $contactFormData
     */
    public function __construct($contactFormData)
    {

        $this->contactFormData = $contactFormData;
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
