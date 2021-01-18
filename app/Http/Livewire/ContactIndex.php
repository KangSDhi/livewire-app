<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactIndex extends Component
{
   
    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => Contact::latest()->get()
        ]);
    }
}
