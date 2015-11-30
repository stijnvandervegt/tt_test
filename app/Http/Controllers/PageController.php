<?php namespace TamTam\Http\Controllers;

use View;

class PageController extends Controller {


    public function home()
    {
        return View::make('pages.home');
    }

    public function contact()
    {
        return View::make('pages.contact');
    }

}