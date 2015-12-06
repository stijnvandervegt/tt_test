<?php namespace TamTam\Http\Controllers;

use Exception;
use Response;
use TamTam\Http\Requests\ContactRequest;
use TamTam\Jobs\SaveContactForm;


class FormController extends Controller {

    public function contactForm(ContactRequest $request) {

        try {
            $this->dispatchFrom(SaveContactForm::class, $request);
        } catch(Exception $e) {
            return Response::json(['success' => false]);
        }

        return Response::json(['success' => true]);

    }

}