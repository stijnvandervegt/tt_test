<?php namespace TamTam\Http\Controllers;

use Response;
use TamTam\Http\Requests\ContactRequest;
use TamTam\Jobs\SaveContactForm;


class FormController extends Controller {

    public function contactForm(ContactRequest $request) {

        $this->dispatchFrom(SaveContactForm::class, $request);

        return Response::json(['success' => true]);

    }

}