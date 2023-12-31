<?php

namespace App\Livewire;

use App\Models\ItemImages;
use App\Models\ItemTags;
use App\Models\ItemTypes;
use App\Models\LostAndFound;
use App\Models\UserAccounts;
use App\Traits\Toasts;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class LostFoundLivewire extends Component
{
    use WithFileUploads;
    use Toasts;
    public $items, $item_types, $item_id, $item_type_id, $claimed_items;
    public $item_tags, $selected_item_tag, $item_tag_id, $expiration_date, $is_expired, $expired_items;
    public $selected_item_type, $upload_item_image, $item_name, $item_image_id, $description;
    public $datetime_found, $finder_name, $location_found;
    public  $is_claimed, $claimer_name, $claimer_contact, $claimer_email, $claimer_address, $claimed_datetime;
    public $filterItemTypes = [];
    public $search = '';
    public $privileges = [];

    public function mount()
    {
        $this->item_types = ItemTypes::all();
        $this->item_tags = ItemTags::all();
        $this->applyFilter();
        $user_id = session('user_id');
        if ($user_id) {
            $user = UserAccounts::find($user_id);
            $this->privileges = $user->Roles->privileges()->pluck('privilege')->toArray();
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
        $query = LostAndFound::select('lost_and_found.*')->where('is_claimed', false)->where('is_expired', false);
        $query_claimed = LostAndFound::select('lost_and_found.*')->where('is_claimed', true);
        $query_expired = LostAndFound::select('lost_and_found.*')->where('is_expired', true);

        if (!empty($this->filterItemTypes)) {
            $query->whereIn('item_type_id', $this->filterItemTypes);
            $query_claimed->whereIn('item_type_id', $this->filterItemTypes);
            $query_expired->whereIn('item_type_id', $this->filterItemTypes);
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

            $query_expired->where('item_name', 'like', '%' . $this->search . '%')
                ->orWhere('location_found', 'like', '%' . $this->search . '%')
                ->orWhere('finder_name', 'like', '%' . $this->search . '%')
                ->orWhere('claimer_name', 'like', '%' . $this->search . '%');
        }

        $this->items = $query->oldest()->get();
        $this->claimed_items = $query_claimed->oldest()->get();
        $this->expired_items = $query_expired->oldest()->get();
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
            'selected_item_tag' => 'required|integer',
            'upload_item_image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'item_name' => 'required|max:255',
            'description' => 'nullable',
            'datetime_found' => 'required',
            'finder_name' => 'required|max:255',
            'location_found' => 'required|max:255'
        ]);

        $numberOfDays = ItemTags::find($this->selected_item_tag)->days_expired; // Change this to the desired number of days

        $currentDate = Carbon::now();
        $expirationDate = $currentDate->addDays($numberOfDays);

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
            'item_tag_id' => $validateData['selected_item_tag'],
            'item_image_id' => $this->item_image_id,
            'description' => $validateData['description'],
            'datetime_found' => $validateData['datetime_found'],
            'finder_name' => $validateData['finder_name'],
            'location_found' => $validateData['location_found'],
            'expiration_date' => $expirationDate
        ]);
        $this->showToast('success', 'The found item is added successfully.');

        $this->applyFilter();
        $this->resetInputs();
    }

    public function updateItem()
    {
        $validateData = $this->validate([
            'item_type_id' => 'required|integer',
            'item_tag_id' => 'required|integer',
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


        $numberOfDays = ItemTags::find($this->item_tag_id)->days_expired; // Change this to the desired number of days

        $currentDate = Carbon::now();
        $expirationDate = $currentDate->addDays($numberOfDays);

        if ($this->upload_item_image) {
            $image = file_get_contents($this->upload_item_image->getRealPath());

            ItemImages::find($this->item_image_id)->update([
                'item_image' => $image
            ]);
        }

        LostAndFound::find($this->item_id)->update([
            'item_name' => $validateData['item_name'],
            'item_type_id' => $validateData['item_type_id'],
            'item_tag_id' => $validateData['item_tag_id'],
            'item_image_id' => $this->item_image_id,
            'description' => $validateData['description'],
            'datetime_found' => $validateData['datetime_found'],
            'finder_name' => $validateData['finder_name'],
            'location_found' => $validateData['location_found'],
            'is_claimed' => $validateData['is_claimed'],
            'claimed_datetime' => $validateData['claimed_datetime'],
            'claimer_name' => $validateData['claimer_name'],
            'expiration_date' => $expirationDate
        ]);
        $this->showToast('success', 'The item is updated successfully.');

        $this->applyFilter();
        $this->resetInputs();
    }

    public function claimItem()
    {
        $validateData = $this->validate([
            'claimed_datetime' => 'required|date',
            'claimer_name' => 'required|string|max:255',
            'claimer_contact' => 'required|regex:/^\d{11}$/|max:11',
            'claimer_email' => 'required|email',
            'claimer_address' => 'required|string|max:255',
        ]);

        LostAndFound::find($this->item_id)->update([
            'is_claimed' => true,
            'claimed_datetime' => $validateData['claimed_datetime'],
            'claimer_name' => $validateData['claimer_name'],
            'claimer_contact' => $validateData['claimer_contact'],
            'claimer_email' => $validateData['claimer_email'],
            'claimer_address' => $validateData['claimer_address']
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
        $this->item_tag_id = $item->item_tag_id;
        $this->selected_item_type = $item->getType->item_type;
        $this->selected_item_tag = $item->getPriority->priority_tag;
        $this->item_image_id = $item->item_image_id;
        $this->description = $item->description;
        $this->datetime_found = $item->datetime_found;
        $this->finder_name = $item->finder_name;
        $this->location_found = $item->location_found;
        $this->is_claimed = $item->is_claimed;
        $this->claimer_name = $item->claimer_name;
        $this->claimer_contact = $item->claimer_contact;
        $this->claimer_email = $item->claimer_email;
        $this->claimer_address = $item->claimer_address;
        $this->claimed_datetime = $item->claimed_datetime;
        $this->expiration_date = $item->expiration_date;
        $this->is_expired = $item->is_expired;
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
        $this->item_type_id = null;
        $this->item_tag_id = null;
        $this->selected_item_tag = null;
        $this->upload_item_image = null;
        $this->item_name = null;
        $this->item_image_id = null;
        $this->description = null;
        $this->datetime_found = null;
        $this->finder_name = null;
        $this->location_found = null;
        $this->is_claimed = null;
        $this->claimer_name = null;
        $this->claimer_contact = null;
        $this->claimer_email = null;
        $this->claimer_address = null;
        $this->claimed_datetime = null;
        $this->resetErrorBag();
    }
}
