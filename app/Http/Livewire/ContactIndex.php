<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactIndex extends Component
{

    protected $listeners = [
        'contactStored' => 'handleStored'
    ];
   
    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => Contact::latest()->get()
        ]);
    }

    public function handleStored($contact)
    {
        // dd($contact);
        session()->flash('message', 'Contact '.$contact['name'].' was stored!');
    }
}
