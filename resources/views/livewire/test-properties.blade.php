<div>
    <h1>{{ $name }}</h1>
<hr>
    <input  type="text" wire:model.defer="name" style="border: 1px solid red;">
    <button wire:click="search" style="background: gray">click</button>


</div>
