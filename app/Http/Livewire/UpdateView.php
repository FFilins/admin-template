<?php

namespace App\Http\Livewire;

use App\Models\Objeto;
use Livewire\Component;

class UpdateView extends Component
{
    public $card;
    public $title;
    public $text;
    public $editorText;

    protected $listeners = [
        'editorContentChanged' => 'updateText',
    ];

    public function mount($cardId)
    {
        $card = Objeto::find($cardId);

        $this->card = $card;

        $this->title = $card->title;
        $this->text = $card->text;
    }

    public function render()
    {
        return view('livewire.update-view');
    }

    public function updateText($content) 
    {
        // $this->editorText = $content;
    }

    public function submit() 
    {
        $titulo = $this->input('editorText');

        dd($titulo);
    }
}
