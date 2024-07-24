<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactUs;

class ContactForm extends Component
{
    public $firstname, $lastname, $email, $phone, $subject, $comment;
    public $successMsg;
    public $formType;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function mount($formType)
    {
        $this->formType = $formType;
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

        // dd($this->formType);

        ContactUs::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'comment' => $this->comment,
            'form_type' => $this->formType,

        ]);


        if ($this->formType == 'contact_us') {
            $this->successMsg = "Thank you for contacting us.";
            session()->flash('success_message', $this->successMsg);
            $this->clearForm();
            return redirect('/contact-us');
        } elseif ($this->formType == 'prayer') {
            $this->successMsg = "Thank you for your prayer request.";
            session()->flash('success_message', $this->successMsg);
            $this->clearForm();
            return redirect('/prayer');
        }
    }

    public function clearForm()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
        $this->subject = '';
        $this->comment = '';
    }
}
