<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactEdit extends Component
{
    public $contact;

    public $name;
    public $email;
    public $phone;

    public $contactId;

    protected $rules = [
        'name'=> 'required|min:3',
        'email'=> 'required|email',
        'phone'=> 'required',
    ];

    public function mount(Contact $contact)
    {
        $this->name = $contact->name;
        $this->email = $contact->email;
        $this->phone = $contact->phone;
        $this->contactId = $contact->id;
    }

    public function update()
    {
        $this->validate();

        $contact = Contact::find($this->contactId);

        $contact->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        session()->flash('message','Contato atualizado com sucesso!');

    }

    public function render()
    {
        return view('livewire.contact.contact-edit')
            ->layout('welcome');
    }
}
