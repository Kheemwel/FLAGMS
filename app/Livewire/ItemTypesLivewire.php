<?php

namespace App\Livewire;

use App\Models\ItemTypes;
use App\Traits\Toasts;
use Livewire\Component;

class ItemTypesLivewire extends Component
{
    use Toasts;
    public $selected_id, $item_types, $type;
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

        $this->showToast('success', 'New Item Type Added Successfully');
    }

    public function edit($id)
    {
        $item = ItemTypes::find($id);
        $this->selected_id = $item->id;
        $this->type = $item->item_type;
    }

    public function updateType()
    {
        $this->validate([
            'type' => 'required|max:255|unique:item_types,item_type'
        ]);

        ItemTypes::find($this->selected_id)->update([
            'item_type' => $this->type
        ]);

        $this->showToast('success', 'The Selected Item Type is Updated Successfully');
        $this->dispatch('closeModals');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        $type = ItemTypes::find($id);
        $type->delete();
        $this->showToast('success', 'Item Type Deleted Successfully');
    }

    public function resetInputFields()
    {
        $this->type = null;
    }

}
