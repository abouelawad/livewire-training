<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TryHooks extends Component
{
    public $count = 0;

    public function mount(){
        echo 'mount function is called with count = '.$this->count . '<br/>' ;
    }

   

    public function increment()
    {
        $this->count++;
    }
    public function boot(){
        echo 'boot function is called with count = ' .$this->count . '<br/>' ;
    }
    public function render()
    {
        return view('livewire.try-hooks');
    }
}
