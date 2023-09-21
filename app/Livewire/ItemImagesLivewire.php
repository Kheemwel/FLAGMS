<?php

namespace App\Livewire;

use App\Models\ItemImages;
use Livewire\Component;

class ItemImagesLivewire extends Component
{
    public $item_images;
    public function render()
    {
        $this->item_images = ItemImages::all();
        return view('livewire.file_management.item_images.item-images-livewire');
    }
}
