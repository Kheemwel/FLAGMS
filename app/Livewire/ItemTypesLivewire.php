<?php

namespace App\Livewire;

use App\Models\ItemTypes;
use Livewire\Component;

class ItemTypesLivewire extends Component
{
    public $item_types;
    public function render()
    {
        $this->item_types = ItemTypes::all();
        return view('livewire.file_management.item_types.item-types-livewire');
    }
}
