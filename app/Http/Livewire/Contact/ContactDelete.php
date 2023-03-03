<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactDelete extends Component
{
    public $contact;

    public function mount($id)
    {
        $this->contact = Contact::find($id);
    }

    public function delete()
    {

        if(!$this->contact)
           return session()->flash('error','Contato não encontrado!');

        $this->contact->delete();

        session()->flash('success','Contato removido com sucesso!');

        return redirect()->route('contacts.index');

        #$this->emit('deleted');

    }

    public function render()
    {
        return view('livewire.contact.contact-delete');
    }
}
