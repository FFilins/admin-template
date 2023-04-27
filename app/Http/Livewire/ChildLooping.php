<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChildLooping extends Component
{
    public $cards;

    public function render()
    {
        return view('livewire.child-looping');
    }

    public function mount()
    {


    }
}
