<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ValidationComponent extends Component
{

    public $email;
    public $password;
    public $remember;

    protected $rules = [
        'email'=>'required|email',
        'password'=> 'required|min:6',
        'remember'=> 'nullable',
    ];

    public function submit()
    {
        $this->validate();
    }
    public function render()
    {
        return view('livewire.validation-component');
    }
}
