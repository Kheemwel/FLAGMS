<?php

namespace App\Livewire;

use App\Models\ItemTags;
use App\Traits\Toasts;
use Livewire\Component;

class ItemTagsLivewire extends Component
{
    use Toasts;
    public $item_tags, $priority_tag, $days_expired;
    public function render()
    {
        $this->item_tags = ItemTags::all();
        return view('livewire.file_management.item_tags.item-tags-livewire');
    }

    public function addTag()
    {
        $validatedData = $this->validate([
            'priority_tag' => 'required|string|max:255',
            'days_expired' => 'required|integer|min:1'
        ]);

        ItemTags::create($validatedData);

        $this->showToast('success', 'The New Tag is Added Successfully');
        $this->resetInputs();
    }

    public function delete($id)
    {
        ItemTags::find($id)->delete();
        $this->showToast('success', 'The Tag is Deleted Successfully');
    }

    public function resetInputs()
    {
        $this->priority_tag = null;
        $this->days_expired = null;
        $this->resetErrorBag();
    }
}
