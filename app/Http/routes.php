<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::post('/contact/form/send', ['uses' => 'FormController@contactForm', 'as' => 'sendContactForm']);


Route::get('/', ['uses' => 'PageController@home', 'as' => 'home']);
Route::get('/contact', ['uses' => 'PageController@contact', 'as' => 'contact']);
