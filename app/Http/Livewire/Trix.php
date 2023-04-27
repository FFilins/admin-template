<?php

namespace App\Http\Livewire;

use App\Models\Objeto;
use Livewire\Component;

class Trix extends Component
{
    public $trixId;

    public $value;

    protected $listeners = [
        'editorContentChanged' => 'updateText',
    ];

    public function mount($text)
    {
        $this->trixId = 'Trix-' . uniqid();
        $this->value = $text;
    }
    
    public function render()
    {
        return view('livewire.trix');
    }

    public function updatedValue($value)
    {
        $this->emitUp('updatedValue', $value);
    }

}
