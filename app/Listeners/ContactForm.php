<?php

namespace TamTam\Listeners;

use Illuminate\Support\Facades\Mail;
use TamTam\Events\ContactFormWasSaved;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use TamTam\Jobs\MailContactForm;

class ContactForm
{
    use DispatchesJobs;
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
     * @param  ContactFormWasSaved  $event
     * @return void
     */
    public function send(ContactFormWasSaved $event)
    {

        $job = new MailContactForm($event);
        $this->dispatch($job);

    }
}
