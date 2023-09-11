<?php

namespace App\Http\Livewire;

use App\Models\AllDataTypes;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class LivewireDataTypes extends Component
{
    use WithFileUploads;

    public $name, $middle_initial, $age, $weight, $contact, $birthday, $alarm, $profile, $isHuman = false;
    public $data = [];
    public $updateMode = false;
    public $data_id;    

    public function render()
    {
        $this->data = AllDataTypes::all();
        return view('livewire.all-data-types.livewire-data-types');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'middle_initial' => 'nullable|size:1|string',
            'age' => 'required|integer',
            'weight' => 'required|numeric',
            'contact' => 'required|unique:all_data_types,contact|integer',
            'birthday' => 'required|date',
            'alarm' => 'required',
            'profile' => 'required|image|max:1024',
        ]);

        $profilePath = $this->profile->store('uploads', 'public'); // Save the file to the storage directory

        AllDataTypes::create([
            'name' => $this->name,
            'middle_initial' => $this->middle_initial,
            'age' => $this->age,
            'weight' => $this->weight,
            'contact' => $this->contact,
            'birthday' => $this->birthday,
            'alarm' => $this->alarm,
            'profile' => $profilePath,
            'isHuman' => $this->isHuman
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $data = AllDataTypes::findOrFail($id);
        $this->data_id = $id;
        $this->name = $data->name;
        $this->middle_initial = $data->middle_initial;
        $this->age = $data->age;
        $this->weight = $data->weight;
        $this->contact = $data->contact;
        $this->birthday = $data->birthday;
        $this->alarm = $data->alarm;
        $this->profile = $data->profile;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'middle_initial' => 'nullable',
            'age' => 'required|integer',
            'weight' => 'required',
            'contact' =>  [
                'required',
                Rule::unique('all_data_types')->ignore($this->data_id),
                'integer',
            ],
            'birthday' => 'required|date',
            'alarm' => 'required',
            'profile' => 'image|max:1024',
        ]);

        $data = AllDataTypes::findorFail($this->data_id);

        $profilePath = $this->profile->store('uploads', 'public'); // Save the file to the storage directory

        $data->update([
            'name' => $this->name,
            'middle_initial' => $this->middle_initial,
            'age' => $this->age,
            'weight' => $this->weight,
            'contact' => $this->contact,
            'birthday' => $this->birthday,
            'alarm' => $this->alarm,
            'profile' => $profilePath,
            'isHuman' => $this->isHuman
        ]);


        $this->resetInput();
    }

    public function delete($id)
    {
        $data = AllDataTypes::findOrFail($id);

        $data->delete();
    }

    public function create()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->name = null;
        $this->middle_initial = null;
        $this->age = null;
        $this->weight = null;
        $this->contact = null;
        $this->birthday = null;
        $this->alarm = null;
        $this->profile = null;
        $this->isHuman = false;
        $this->updateMode = false;
        $this->data_id = null;
    }
}