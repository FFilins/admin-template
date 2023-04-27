<?php

namespace App\Http\Livewire;

use App\Models\Objeto;
use Livewire\Component;

class Child extends Component
{
    public $card;

    public $title;
    
    public $text;

    public function mount($card) 
    {
        $this->card = $card;

        $this->title = $card->title;

        $this->text = $card->text;

    }


    public function render()
    {
        return view('livewire.child');
    }

    public function delete() 
    {
        $card = Objeto::find($this->card->id);

        $card->delete();
        
        $this->emit('childAdd');
    }

}
