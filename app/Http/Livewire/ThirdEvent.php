<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ThirdEvent extends Component
{
    protected $listeners = ['fire'];

    public function fire()
    {
        dump('iam fire fighting');
    }

    public function render()
    {
        return view('livewire.third-event');
    }
}
