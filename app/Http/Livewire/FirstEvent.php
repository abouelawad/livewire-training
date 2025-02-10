<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FirstEvent extends Component
{
    protected $listeners = ['fire'];
    

    public function fire(){
        dd ('I am the first eventtttttttttttt');
    }

    public function render()
    {
        return view('livewire.first-event');
    }
}
