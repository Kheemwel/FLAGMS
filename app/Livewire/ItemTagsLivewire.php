<?php

namespace App\Livewire;

use App\Models\ItemTags;
use App\Traits\Toasts;
use Livewire\Component;

class ItemTagsLivewire extends Component
{
    use Toasts;
    public $selected_id, $item_tags, $priority_tag, $days_expired;
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

    public function edit($id)
    {
        $tag = ItemTags::find($id);
        $this->selected_id = $tag->id;
        $this->priority_tag = $tag->priority_tag;
        $this->days_expired = $tag->days_expired;
    }

    public function updateTag()
    {
        $validatedData = $this->validate([
            'priority_tag' => 'required|string|max:255',
            'days_expired' => 'required|integer|min:1'
        ]);

        ItemTags::find($this->selected_id)->update($validatedData);

        $this->showToast('success', 'The Selected Tag is Updated Successfully');
        $this->dispatch('closeModals');
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
