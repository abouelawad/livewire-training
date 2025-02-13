<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPost extends Component
{
    public $name;
    public function render()
    {
        return view('livewire.show-post');
    }
}
