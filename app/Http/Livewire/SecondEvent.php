<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SecondEvent extends Component
{
    protected $listeners = ['fire'];
    

    public function fire(){
        dd ('I am ambulanceeeeeeeeeeee');
    }
    public function render()
    {
        return view('livewire.second-event');
    }
}
