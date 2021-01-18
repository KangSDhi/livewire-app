<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactCreate extends Component
{
    // public $contacts;

    // public function mount($contacts)
    // {
    //     $this->contacts = $contacts;
    // }

    public function render()
    {
        return view('livewire.contact-create');
    }
}
