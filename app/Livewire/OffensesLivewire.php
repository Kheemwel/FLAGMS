<?php

namespace App\Livewire;

use App\Models\Offenses;
use App\Models\OffensesCategories;
use App\Models\OffensesSanctions;
use App\Traits\Toasts;
use Illuminate\Database\QueryException;
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
            'offense_description' => 'nullable',
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
    public function addCategory()
    {
        $validatedData = $this->validate([
            'category' => 'required|max:255',
            'category_description' => 'nullable',
        ]);

        OffensesCategories::create([
            'offenses_category' => $validatedData['category'],
            'description' => $validatedData['category_description'],
        ]);

        $this->showToast('success', 'The new offenses category is added successfully.');
        $this->resetInputFields();
    }

    public function addSanction()
    {
        $validatedData = $this->validate([
            'sanction' => 'required|max:255',
            'sanction_description' => 'nullable',
        ]);

        OffensesSanctions::create([
            'offenses_sanction' => $validatedData['sanction'],
            'description' => $validatedData['sanction_description'],
        ]);

        $this->showToast('success', 'The new sanction is added successfully.');
        $this->resetInputFields();
    }

    public function deleteOffense($id)
    {
        Offenses::find($id)->delete();
        $this->showToast('success', 'The offense is deleted successfully.');
    }
    public function deleteCategory($id)
    {
        try {
            OffensesCategories::find($id)->delete();
            $this->showToast('success', 'The offense category is deleted successfully.');
        } catch (QueryException $ex) {
            $this->showToast('error', 'The category cannot be deleted. This category could be referenced by one of the offenses.');
        }
    }

    public function deleteSanction($id)
    {
        OffensesSanctions::find($id)->delete();
        $this->showToast('success', 'The sanction is deleted successfully.');
    }

    public function resetInputFields()
    {
        $this->offense = null;
        $this->offense_description = null;
        $this->category_id = null;
        $this->category = null;
        $this->category_description = null;
        $this->sanction = null;
        $this->sanction_description = null;
    }
}
