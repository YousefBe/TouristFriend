<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Mail;


class ContactUs extends Component
{
    public $name = 'joe';
    public $email;
    public $message;
    public $phone;

    public function contactFormSubmit()
    {
        dd("a");
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}