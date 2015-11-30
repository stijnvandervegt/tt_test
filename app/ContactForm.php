<?php

namespace TamTam;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $table = 'contact_form';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'message',
    ];

}
