<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FullComp extends Component
{
    public $name = 'alo';

    public function render()
    {
        return view('livewire.full-comp')->layout('layouts.default');
    }
}
