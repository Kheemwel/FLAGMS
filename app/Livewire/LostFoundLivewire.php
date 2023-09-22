<?php

namespace App\Livewire;

use App\Models\ItemImages;
use App\Models\ItemTypes;
use App\Models\LostAndFound;
use App\Traits\Toasts;
use Livewire\Component;
use Livewire\WithFileUploads;

class LostFoundLivewire extends Component
{
    use WithFileUploads;
    use Toasts;
    public $items, $item_types;
    public $selected_item_type, $upload_item_image, $item_name, $item_image_id, $description;
    public $datetime_found, $finder_name, $location_found, $is_claimed, $owner_name, $claimed_datetime;

    public function render()
    {
        $this->item_types = ItemTypes::all();
        $this->items = LostAndFound::all();
        return view('livewire.lost_and_found.lost-found-livewire');
    }

    public function addItem()
    {
        $validateData = $this->validate([
            'selected_item_type' => 'required|integer',
            'upload_item_image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'item_name' => 'required|max:255',
            'description' => 'nullable',
            'datetime_found' => 'required',
            'finder_name' => 'required|max:255',
            'location_found' => 'required|max:255'
        ]);

        if ($this->upload_item_image) {
            $image = file_get_contents($this->upload_item_image->getRealPath());

            $itemImage = ItemImages::create([
                'item_image' => $image
            ]);
    
            $this->item_image_id = $itemImage->id;
        }

        LostAndFound::create([
            'item_name' => $validateData['item_name'],
            'item_type_id' => $validateData['selected_item_type'],
            'item_image_id' => $this->item_image_id,
            'description' => $validateData['description'],
            'datetime_found' => $validateData['datetime_found'],
            'finder_name' => $validateData['finder_name'],
            'location_found' => $validateData['location_found']
        ]);
        $this->showToast('success', 'The found item is added successfully.');
        $this->resetInputs();
    }

    public function get_data($id) {
        $item = LostAndFound::find($id);
        $this->item_name = $item->item_name;
        $this->selected_item_type = $item->getType->item_type;
        $this->item_image_id = $item->item_image_id;
        $this->description = $item->description;
        $this->datetime_found = $item->datetime_found;
        $this->finder_name = $item->finder_name;
        $this->location_found = $item->location_found;
        $this->is_claimed = $item->is_claimed;
        $this->owner_name = $item->owner_name;
        $this->claimed_datetime = $item->claimed_datetime;
    }

    public function viewImage()
    {
        $image = ItemImages::find($this->item_image_id);
        return $image ? imageBinaryToSRC($image->item_image) : null;
    }

    public function delete($id)
    {
        $item = LostAndFound::find($id);
        $item->delete();
        $item->getImage()->delete();
        $this->showToast('success', 'The item is deleted successfully.');
    }

    public function resetInputs()
    {
        $this->selected_item_type = null;
        $this->upload_item_image = null;
        $this->item_name = null;
        $this->item_image_id = null;
        $this->description = null;
        $this->datetime_found = null;
        $this->finder_name = null;
        $this->location_found = null;
        $this->is_claimed = null;
        $this->owner_name = null;
        $this->claimed_datetime = null;
        $this->resetErrorBag();
    }
}
