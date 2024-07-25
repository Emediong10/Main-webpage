<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Donation;

class Donation extends Component
{
    public $transfer = 'no';
    public $email, $phone, $name, $amount, $file, $amount_paid, $transaction_ref;
    public function render()
    {
        return view('livewire.donation');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'transfer' => 'required',
        ]);

        if ($this->transfer == 'no') {
            $this->validate([
                'amount' => 'required|numeric',
            ]);
        } else {
            $this->validate([
                'file' => 'required|file',
                'amount_paid' => 'required|numeric',
                'transaction_ref' => 'required',
            ]);
        }

        Donation::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'transfer' => $this->transfer,
            'amount' => $this->amount,
            'file' => $this->file,
            'amount_paid' => $this->amount_paid,
            'transaction_ref' => $this->transaction_ref,
        ]);
    }
}
