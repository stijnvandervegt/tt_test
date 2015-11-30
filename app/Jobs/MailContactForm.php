<?php

namespace TamTam\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Mail;
use TamTam\ContactForm;

class MailContactForm extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue;


    private $contactForm;

    /**
     * Create a new job instance.
     *
     * @param ContactForm $contactForm
     */
    public function __construct($contactForm)
    {

        $this->contactForm = $contactForm->contactFormData;
    }

    /**
     * Execute the job.
     *
     * @param Mail $mail
     */
    public function handle() {

        $emailFrom = $this->contactForm->email;
        Mail::send('emails.contact', ['form' => $this->contactForm], function($message) use($emailFrom) {
            $message->from($emailFrom, 'Contact Form TamTam');
            $message->to('stijn@draad.nu');
        });

    }
}
