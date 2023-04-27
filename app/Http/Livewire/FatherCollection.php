<?php

namespace App\Http\Livewire;

use App\Models\Objeto;
use Livewire\Component;

class FatherCollection extends Component
{
    protected $listeners = [
        'salvo',
        'updatedCard',
    ];

    public $cards;

    public function render()
    {
        return view('livewire.father-collection');
    }

    public function mount() 
    {
        $objeto = Objeto::orderBy('created_at', 'asc')->get();
        $this->cards = $objeto;

    }

    public function salvo() 
    {
        $objeto = Objeto::orderBy('created_at', 'asc')->get();
        $this->cards = $objeto;

    }

    public function updatedCard() 
    {
        $objeto = Objeto::orderBy('created_at', 'asc')->get();
        $this->cards = $objeto;
    }

}
