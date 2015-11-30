<?php

namespace TamTam\Jobs;

use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Foundation\Bus\DispatchesJobs;
use TamTam\ContactForm;
use TamTam\Events\ContactFormWasSaved;

class SaveContactForm extends Job implements SelfHandling
{
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $phone;
    protected $message;

    /**
     * Create a new job instance.
     *
     * @param $firstname
     * @param $lastname
     * @param $email
     * @param $phone
     * @param $message
     */
    public function __construct($firstname, $lastname, $email, $phone, $message)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @param ContactForm $contactForm
     */
    public function handle(ContactForm $contactForm)
    {

        $contactForm = $contactForm->create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);

        event(new ContactFormWasSaved($contactForm));

    }
}
