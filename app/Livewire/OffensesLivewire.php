<?php

namespace App\Livewire;

use App\Models\Offenses;
use App\Models\OffensesCategories;
use App\Models\OffensesSanctions;
use App\Traits\Toasts;
use Livewire\Component;

class OffensesLivewire extends Component
{
    use Toasts;
    public $offenses, $offense, $offense_description, $category_id;
    public $categories, $category, $category_description;
    public $sanctions, $sanction, $sanction_description;

    public function render()
    {
        $this->offenses = Offenses::all();
        $this->categories = OffensesCategories::all();
        $this->sanctions = OffensesSanctions::all();
        return view('livewire.file_management.offenses.offenses-livewire');
    }

    public function addOffense()
    {
        $validatedData = $this->validate([
            'offense' => 'required|max:255',
            'offense_description'=> 'nullable',
            'category_id' => 'required|integer'
        ]);

        Offenses::create([
            'offense_name' => $validatedData['offense'],
            'description' => $validatedData['offense_description'],
            'offenses_category_id' => $validatedData['category_id']
        ]);

        $this->showToast('success', 'The new offense is added successfully.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Offenses::find($id)->delete();
        $this->showToast('success', 'The offense is deleted successfully.');
    }

    public function resetInputFields()
    {
        $this->offense = null;
        $this->offense_description = null;
    }
}
