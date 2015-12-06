<?php

namespace TamTam\Listeners;

use Illuminate\Support\Facades\Storage;
use TamTam\Events\FeedWasFetched;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SaveFeed
{
    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  FeedWasFetched  $event
     * @return void
     */
    public function file(FeedWasFetched $event)
    {

        return Storage::disk('local')->put('feeds/'.$event->type.'.json', json_encode($event->response));

    }
}
