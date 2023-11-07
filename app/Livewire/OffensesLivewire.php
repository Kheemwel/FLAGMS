<?php

namespace App\Livewire;

use App\Models\DisciplinaryActions;
use App\Models\OffenseLevels;
use App\Models\Offenses;
use App\Models\OffensesCategories;
use App\Traits\Toasts;
use Illuminate\Database\QueryException;
use Livewire\Component;

class OffensesLivewire extends Component
{
    use Toasts;
    public $offenses, $offense, $category_id;
    public $categories, $category;
    public $disciplinary_actions, $disciplinary_action;
    public $offense_levels;

    public function render()
    {
        $this->offenses = Offenses::all();
        $this->categories = OffensesCategories::all();
        $this->disciplinary_actions = DisciplinaryActions::all();
        $this->offense_levels = OffenseLevels::all();
        return view('livewire.file_management.offenses.offenses-livewire');
    }

    public function addOffense()
    {
        $validatedData = $this->validate([
            'offense' => 'required|max:255|unique:offenses,offense_name',
            'category_id' => 'required|integer'
        ]);

        Offenses::create([
            'offense_name' => $validatedData['offense'],
            'offenses_category_id' => $validatedData['category_id']
        ]);

        $this->showToast('success', 'The new offense is added successfully.');
        $this->resetInputFields();
    }
    public function addCategory()
    {
        $validatedData = $this->validate([
            'category' => 'required|max:255|unique:offenses_categories,offenses_category'
        ]);

        OffensesCategories::create([
            'offenses_category' => $validatedData['category']
        ]);

        $this->showToast('success', 'The new offenses category is added successfully.');
        $this->resetInputFields();
    }

    public function addDisciplinaryAction()
    {
        $validatedData = $this->validate([
            'disciplinary_action' => 'required|max:255|unique:offenses_disciplinary_actions,offenses_disciplinary_action'
        ]);

        DisciplinaryActions::create([
            'offenses_disciplinary_action' => $validatedData['disciplinary_action']
        ]);

        $this->showToast('success', 'The new disciplinary_action is added successfully.');
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

    public function deleteDisciplinaryAction($id)
    {
        DisciplinaryActions::find($id)->delete();
        $this->showToast('success', 'The disciplinary_action is deleted successfully.');
    }

    public function resetInputFields()
    {
        $this->offense = null;
        $this->category_id = null;
        $this->category = null;
        $this->disciplinary_action = null;
    }
}
