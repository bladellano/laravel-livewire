<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    public $name;
    public $email;
    public $phone;

    protected $rules = [
        'name'=> 'required|min:3',
        'email'=> 'required|email',
        'phone'=> 'required',
    ];

    public function updated($propertyName, $propertyEmail)
    {
        $this->validateOnly($propertyName);
        $this->validateOnly($propertyEmail);
    }

    public function create()
    {
        $this->validate();

        Contact::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone,
        ]);

        $this->name = $this->email = $this->phone = null;

        session()->flash('message','Contato criado com sucesso!');
    }

    public function render()
    {
        return view('livewire.contact.contact-create')->layout('welcome');
    }
}
