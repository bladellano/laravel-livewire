<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\{Component, WithPagination};

class ContactIndex extends Component
{
    use WithPagination;

    protected $listeners = ['deleted'=>'$refresh'];

    public function render(Contact $contact)
    {
        $contacts = $contact->paginate(10);

        return view('livewire.contact.contact-index',compact('contacts'))
        ->layout('welcome');
    }
}
