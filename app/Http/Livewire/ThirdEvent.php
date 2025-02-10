<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ThirdEvent extends Component
{
    protected $listeners = ['fire'];

    public function fire()
    {
        dd('iam fire fightingggggggggggggg');
    }

    public function render()
    {
        return view('livewire.third-event');
    }
}
