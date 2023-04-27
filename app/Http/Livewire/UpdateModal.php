<?php

namespace App\Http\Livewire;

use App\Models\Objeto;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateModal extends Component
{
    use WithFileUploads;

    public $card;

    public $cardId;

    public $title;

    public $text;

    protected $listeners = [
        'updatedValue',
    ];

    public function mount($card) 
    {
        $this->card = $card;
        $this->cardId = $card->id;

        $this->title = $card->title;
        $this->text = $card->text;
    }

    public function render()
    {
        return view('livewire.update-modal');
    }

    public function updatedValue($value)
    {
        $this->text = $value;
    }

    public function update()
    {
        $cardAtual = Objeto::find($this->cardId);

        $cardAtual->title = $this->title;
        $cardAtual->text = $this->text;

        $cardAtual->save();
        flash('card atualizado!')->success();
        $this->emitUp('salvo');

        $this->emitTo('flash-message', 'flashMessage', 'Card atualizado com sucesso', 'info');

    }
}
