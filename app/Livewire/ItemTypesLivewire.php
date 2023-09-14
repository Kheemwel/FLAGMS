<?php

namespace App\Livewire;

use App\Models\ItemTypes;
use Livewire\Component;

class ItemTypesLivewire extends Component
{
    public $item_types, $type;
    public function render()
    {
        $this->item_types = ItemTypes::all();
        return view('livewire.file_management.item_types.item-types-livewire');
    }

    public function addType()
    {
        $this->validate([
            'type' => 'required|max:255|unique:item_types,item_type'
        ]);

        ItemTypes::create([
            'item_type' => $this->type
        ]);

        $this->showToast('New Item Type Added Successfully');
    }

    public function delete($id)
    {
        $type = ItemTypes::find($id);
        $type->delete();
        $this->showToast('Item Type Deleted Successfully');
    }

    public function resetInputFields()
    {
        $this->type = null;
    }

    public function showToast($message)
    {
        session()->flash('message', $message);
        $this->dispatch('showToast');
    }
}
