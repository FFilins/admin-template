<?php

namespace App\Http\Livewire;

use App\Models\Objeto;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddChildModal extends Component
{
    use WithFileUploads;

    public $card;

    public $title;

    public $text;

    public $image;

    public $fileName;

    protected $listeners = [
        'fileChosen' => 'updatedImagem'
    ];

    public function render()    
    {
        return view('livewire.add-child-modal');
    }
    
    public function save() 
    {
        $object = new Objeto();
        
        $object->title = $this->title;
        $object->text = $this->text;

        $cardNovo = $object->save();

        $this->emitUp('salvo', $cardNovo);
        $this->emitTo('flash-message', 'flashMessage', 'Card adicionado com sucesso');
    }

    public function updatedImagem($value, $fileName)
    {
        $this->fileName = $this->imagem->getClientOriginalName();
        dd($value);
    }
    public function saveBanner()
    {

        if (!$this->card) {
            $this->card = new Objeto();
        }

        if ($this->image) {
            // Get the existing image path (if available) or generate a new name
            $existingImagePath = null;
            if ($this->card->image_url && ($this->image->getClientOriginalName() !== $this->card->image_original_name) ) {
                $existingImagePath = str_replace(asset('storage/'), '', $this->card->image_url);
            } else {                // franchising/Banner
                $existingImagePath = 'cards/imagens/' . uniqid() . '.' . $this->image->getClientOriginalExtension();
                $originalName = $this->image->getClientOriginalName();
                $this->card->image_original_name = $originalName;

            }
            
            // Delete the existing image file (if it exists)
            if (Storage::exists('public/' . $existingImagePath)) {
                Storage::delete('public/' . $existingImagePath);
            }

            // Store the new image with the same name as the old one (or the generated name)
            $imagePath = $this->image->storeAs('public/cards/imagens', basename($existingImagePath));
            $downloadUrl = asset('storage/' . str_replace('public/', '', $imagePath));

            $this->franchising->image_url = $downloadUrl;


        }
        dd($this->image);
        // $this->franchising->caption = $this->caption;
        // $this->franchising->title = $this->title;
        // $this->franchising->sub_title = $this->sub_title;
        // $this->franchising->button_text = $this->button_text;
        // $this->franchising->button_link = $this->button_link;


        // $this->franchising->save();
    }
}
