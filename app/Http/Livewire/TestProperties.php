<?php


namespace App\Http\Livewire;

use Livewire\Component;

class TestProperties extends Component
{
    public $name;


    public function render()
    {
        return view('livewire.test-properties');
    }
}
