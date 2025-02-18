<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    protected $queryString = ['search'=>[
        'except' => '',
        'as'=> 's',

    ]];

    public function updatingSearch(){
        $this->reset();
    }
    public function render()
    {
        return view('livewire.search-component',['posts'=>Post::where('name','like','%' . $this->search.'%')->paginate(5)]);
    }
}
