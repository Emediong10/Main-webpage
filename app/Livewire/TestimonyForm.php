<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimony;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\File;

class TestimonyForm extends Component
{
    use WithFileUploads;

    #[Validate('image|max:1024')] // 1MB Max
    public $image;
    public $firstname, $can_post, $lastname, $email, $phone, $subject, $comment;
    public $successMsg;

    public function render()
    {
        return view('livewire.testimony-form');
    }

    public function save()
    {
        $this->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|max:255|email',
            'phone' => 'required',
            'image' => 'required',
            'subject' => 'required',
            'comment' => 'required',
            // 'can_post' => 'accepted',
        ]);

        // $image = $this->image->store('public/testimonies');
        $image = $this->image->store('public/testimonies');
        $image = Str::replaceFirst('public/', '', $image);

        // dd($image);
        // File::put('/image',$this->image);

        Testimony::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'comment' => $this->comment,
             'image' => $image,
            'can_post' => $this->can_post,
        ]);

        $this->successMsg = "Your testimony was submitted successfully, May God continue to give you more testimonies";
        session()->flash('success_message', $this->successMsg);

        // Clear the form fields
        $this->clearForm();
    }

    public function clearForm()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
        $this->subject = '';
        $this->comment = '';
        $this->image = null;
        $this->can_post = false;

        return redirect('/testimony-form');
    }
}
