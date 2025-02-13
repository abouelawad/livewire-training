<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileComponent extends Component
{
    use WithFileUploads;
    public $photo;

    public function rules(){
        return [
            'photo' => 'required|image',
        ];
    }


    public function submit()
    {
        $this->validate();
        $this->photo->storeAs('local','myphoto.jpg');
    }
    public function render()
    {
        return view('livewire.file-component');
    }
}
