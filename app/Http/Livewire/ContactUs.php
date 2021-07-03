<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class ContactUs extends Component
{
    public $name = '';
    public $email;
    public $message;
    public $phone;

    protected $rules = [
        'name' => 'required|min:5',
        'email' => 'required|email',
        'phone' => 'required|integer',
        'message' => 'required|min:20',
    ];
    public function contactFormSubmit()
    {
        $data =$this->validate();
        Mail::to('test@test.com')->send(new ContactMail($data));
        $this->clearData();
    }
    private function clearData()
    {
        $this->name='';
        $this->email='';
        $this->phone='';
        $this->message='';
        // aw this->reset() w 5alas , too late
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}