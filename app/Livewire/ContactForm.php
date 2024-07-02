<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactUs;

class ContactForm extends Component
{
    public $firstname, $lastname, $email, $phone, $subject, $comment;
    public $successMsg;

    public function render()
    {
        return view('livewire.contact-form');
    }
    public function save()
    {
       // dd($this->save);
        $this->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|max:255|email',
            'phone' => 'required',
            'subject' => 'required',
            'comment' => 'required'
        ]);
       // dd($this->phone);

        ContactUs::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'comment' => $this->comment,

        ]);

       $this->successMsg = "Thank you for contacting us";
      session()->flash('success_message',$this->successMsg);

        // 

}

public function clearForm()
{
    return redirect('/contact-us');
}

}
