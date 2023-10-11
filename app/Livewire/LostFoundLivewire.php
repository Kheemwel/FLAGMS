<?php

namespace App\Livewire;

use App\Models\ItemImages;
use App\Models\ItemTypes;
use App\Models\LostAndFound;
use App\Models\UserAccounts;
use App\Traits\Toasts;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class LostFoundLivewire extends Component
{
    use WithFileUploads;
    use Toasts;
    public $items, $item_types, $item_id, $item_type_id, $claimed_items;
    public $selected_item_type, $upload_item_image, $item_name, $item_image_id, $description;
    public $datetime_found, $finder_name, $location_found, $is_claimed, $claimer_name, $claimed_datetime;
    public $filterItemTypes = [];
    public $search = '';
    public $authorized = false;

    public function mount()
    {
        $this->item_types = ItemTypes::all();
        $this->applyFilter();
        $user_id = session('user_id');
        if ($user_id) {
            $role = UserAccounts::find($user_id)->getRole->role;
            if (in_array($role, ['Admin', 'Admin/Guidance', 'Guidance'])) {
                $this->authorized = true;
            }
        }
    }

    public function render()
    {
        return view('livewire.lost_and_found.lost-found-livewire', ['items' => $this->items]);
    }

    public function updatedSearch()
    {
        $this->applyFilter();
    }

    public function applyFilter()
    {
        $query = LostAndFound::select('lost_and_found.*')->where('is_claimed', false);
        $query_claimed = LostAndFound::select('lost_and_found.*')->where('is_claimed', true);

        if (!empty($this->filterItemTypes)) {
            $query->whereIn('item_type_id', $this->filterItemTypes);
            $query_claimed->whereIn('item_type_id', $this->filterItemTypes);
        }

        if ($this->search) {
            $query->where('item_name', 'like', '%' . $this->search . '%')
                ->orWhere('location_found', 'like', '%' . $this->search . '%')
                ->orWhere('finder_name', 'like', '%' . $this->search . '%')
                ->orWhere('claimer_name', 'like', '%' . $this->search . '%');

            $query_claimed->where('item_name', 'like', '%' . $this->search . '%')
                ->orWhere('location_found', 'like', '%' . $this->search . '%')
                ->orWhere('finder_name', 'like', '%' . $this->search . '%')
                ->orWhere('claimer_name', 'like', '%' . $this->search . '%');
        }

        $this->items = $query->oldest()->get();
        $this->claimed_items = $query_claimed->oldest()->get();
    }

    public function resetFilter()
    {
        $this->filterItemTypes = [];
        $this->applyFilter();
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

        $this->applyFilter();
        $this->resetInputs();
    }

    public function updateItem()
    {
        $validateData = $this->validate([
            'item_type_id' => 'required|integer',
            'upload_item_image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024|',
            'item_name' => 'required|max:255',
            'description' => 'nullable',
            'datetime_found' => 'required',
            'finder_name' => 'required|max:255',
            'location_found' => 'required|max:255',
            'is_claimed' => 'nullable|boolean',
            'claimed_datetime' => Rule::requiredIf($this->is_claimed),
            'claimer_name' => Rule::requiredIf($this->is_claimed),
        ]);

        if ($this->upload_item_image) {
            $image = file_get_contents($this->upload_item_image->getRealPath());

            ItemImages::find($this->item_image_id)->update([
                'item_image' => $image
            ]);
        }

        LostAndFound::find($this->item_id)->update([
            'item_name' => $validateData['item_name'],
            'item_type_id' => $validateData['item_type_id'],
            'item_image_id' => $this->item_image_id,
            'description' => $validateData['description'],
            'datetime_found' => $validateData['datetime_found'],
            'finder_name' => $validateData['finder_name'],
            'location_found' => $validateData['location_found'],
            'is_claimed' => $validateData['is_claimed'],
            'claimed_datetime' => $validateData['claimed_datetime'],
            'claimer_name' => $validateData['claimer_name']
        ]);
        $this->showToast('success', 'The item is updated successfully.');

        $this->applyFilter();
        $this->resetInputs();
    }

    public function claimItem()
    {
        $validateData = $this->validate([
            'claimed_datetime' => Rule::requiredIf($this->is_claimed),
            'claimer_name' => Rule::requiredIf($this->is_claimed),
        ]);

        LostAndFound::find($this->item_id)->update([
            'is_claimed' => true,
            'claimed_datetime' => $validateData['claimed_datetime'],
            'claimer_name' => $validateData['claimer_name']
        ]);
        $this->showToast('success', 'The item is updated successfully.');

        $this->applyFilter();
        $this->resetInputs();
    }

    public function unclaim($id)
    {
        LostAndFound::find($id)->update([
            'is_claimed' => false,
        ]);

        $this->showToast('success', 'The item is updated successfully.');

        $this->applyFilter();
        $this->resetInputs();
    }

    public function get_data($id)
    {
        $item = LostAndFound::find($id);
        $this->item_id = $item->id;
        $this->item_name = $item->item_name;
        $this->item_type_id = $item->item_type_id;
        $this->selected_item_type = $item->getType->item_type;
        $this->item_image_id = $item->item_image_id;
        $this->description = $item->description;
        $this->datetime_found = $item->datetime_found;
        $this->finder_name = $item->finder_name;
        $this->location_found = $item->location_found;
        $this->is_claimed = $item->is_claimed;
        $this->claimer_name = $item->claimer_name;
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

        $this->applyFilter();
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
        $this->claimer_name = null;
        $this->claimed_datetime = null;
        $this->resetErrorBag();
    }
}
