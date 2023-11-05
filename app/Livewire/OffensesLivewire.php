<?php

namespace App\Livewire;

use App\Models\DisciplinaryActions;
use App\Models\OffenseLevels;
use App\Models\Offenses;
use App\Models\OffensesCategories;
use App\Models\OffensesDisciplinaryActions;
use App\Traits\Toasts;
use Illuminate\Database\QueryException;
use Livewire\Component;

class OffensesLivewire extends Component
{
    use Toasts;
    public $offenses, $offense, $category_id, $selected_offense_id;
    public $categories, $category, $selected_category_id;
    public $disciplinary_actions, $disciplinary_action, $selected_disciplinary_action_id;
    public $offense_levels, $level, $selected_level_id;
    public $selected_disciplinary_action_ids = [];
    public $offenses_search, $categories_search, $levels_search, $disciplinary_actions_search;
    public $selected_offense;
    public function render()
    {
        $this->offenses = Offenses::all();
        $this->categories = OffensesCategories::all();
        $this->disciplinary_actions = DisciplinaryActions::all();
        $this->offense_levels = OffenseLevels::all();

        $query_offenses = Offenses::join('offenses_categories', 'offenses.offenses_category_id', '=', 'offenses_categories.id')
            ->select('offenses.*', 'offenses_categories.offenses_category as category');

        $query_categories = OffensesCategories::select('offenses_categories.*');
        $query_levels = OffenseLevels::select('offense_levels.*');
        $query_disciplinary_actions = DisciplinaryActions::select('disciplinary_actions.*');

        if ($this->offenses_search) {
            $query_offenses->where(function ($query) {
                $query->where('offense_name', 'like', '%' . $this->offenses_search . '%')
                    ->orWhere('offenses_categories.offenses_category', 'like', '%' . $this->offenses_search . '%');
            });
        }
        if ($this->categories_search) {
            $query_categories->where('offenses_category', 'like', '%' . $this->categories_search . '%');
        }
        if ($this->levels_search) {
            $query_levels->where('level', 'like', '%' . $this->levels_search . '%');
        }
        if ($this->disciplinary_actions_search) {
            $query_disciplinary_actions->where('action', 'like', '%' . $this->disciplinary_actions_search . '%');
        }

        $queried_offenses = $query_offenses->orderBy('id')->get();
        $queried_categories = $query_categories->orderBy('id')->get();
        $queried_levels = $query_levels->orderBy('id')->get();
        $queried_disciplinary_actions = $query_disciplinary_actions->orderBy('id')->get();
        return view('livewire.file_management.offenses.offenses-livewire', compact('queried_offenses', 'queried_categories', 'queried_levels', 'queried_disciplinary_actions'));
    }

    public function addOffense()
    {
        $rules = [
            'offense' => 'required|max:255|unique:offenses,offense_name',
            'category_id' => 'required|integer',
            "selected_disciplinary_action_ids.1" => 'required|integer'
        ];

        $validatedData = $this->validate($rules);

        $offense = Offenses::create([
            'offense_name' => $validatedData['offense'],
            'offenses_category_id' => $validatedData['category_id']
        ]);

        foreach ($this->selected_disciplinary_action_ids as $index => $dsc) {
            OffensesDisciplinaryActions::create([
                'offense_id' => $offense->id,
                'offense_level_id' => $index,
                'disciplinary_action_id' => $dsc
            ]);
        }

        $this->showToast('success', 'The new offense is added successfully.');
        $this->resetInputFields();
    }

    public function getOffense($id)
    {
        $offense = Offenses::find($id);
        $this->selected_offense = $offense;
        $this->selected_offense_id = $offense->id;
        $this->offense = $offense->offense_name;
        $this->category_id = $offense->offenses_category_id;
        $offenses_disciplinary_actions = OffensesDisciplinaryActions::where('offense_id', $offense->id)->get();
        foreach ($offenses_disciplinary_actions as $off) {
            $this->selected_disciplinary_action_ids[$off->offense_level_id] = $off->disciplinary_action_id;
        }
    }

    public function updateOffense()
    {
        $rules = [
            'offense' => 'required|max:255',
            'category_id' => 'required|integer',
            "selected_disciplinary_action_ids.*" => 'required|integer'
        ];

        $validatedData = $this->validate($rules);

        // Retrieve the existing offense by ID
        $offense = Offenses::find($this->selected_offense_id);

        if (!$offense) {
            $this->showToast('error', 'Offense not found.');
            return;
        }

        $offense->update([
            'offense_name' => $validatedData['offense'],
            'offenses_category_id' => $validatedData['category_id']
        ]);


        // Loop through the updated disciplinary action IDs
        foreach ($this->selected_disciplinary_action_ids as $index => $dsc) {
            $offense_disciplinary_action = OffensesDisciplinaryActions::where('offense_id', $offense->id)
                ->where('offense_level_id', $index)->first();
            if ($offense_disciplinary_action) {
                $offense_disciplinary_action->update([
                    'disciplinary_action_id' => $dsc
                ]);
            } else {
                OffensesDisciplinaryActions::create([
                    'offense_id' => $offense->id,
                    'offense_level_id' => $index,
                    'disciplinary_action_id' => $dsc
                ]);
            }
        }

        $this->showToast('success', 'Offense updated successfully.');
        $this->resetInputFields();
    }

    public function addOffenseCategory()
    {
        $validatedData = $this->validate([
            'category' => 'required|max:255|unique:offenses_categories,offenses_category'
        ]);

        OffensesCategories::create([
            'offenses_category' => $validatedData['category']
        ]);

        $this->showToast('success', 'The new offense category is added successfully.');
        $this->resetInputFields();
    }

    public function getOffenseCategory($id)
    {
        $category = OffensesCategories::find($id);
        $this->category = $category->offenses_category;
        $this->selected_category_id = $category->id;
    }

    public function updateOffenseCategory()
    {
        $validatedData = $this->validate([
            'category' => 'required|max:255|unique:offenses_categories,offenses_category'
        ]);

        OffensesCategories::find($this->selected_category_id)->update([
            'offenses_category' => $validatedData['category']
        ]);

        $this->showToast('success', 'The offense category is updated successfully.');
        $this->resetInputFields();
    }

    public function addDisciplinaryAction()
    {
        $validatedData = $this->validate([
            'disciplinary_action' => 'required|max:255|unique:disciplinary_actions,action'
        ]);

        DisciplinaryActions::create([
            'action' => $validatedData['disciplinary_action']
        ]);

        $this->showToast('success', 'The new disciplinary action is added successfully.');
        $this->resetInputFields();
    }

    public function getDisciplinaryAction($id)
    {
        $disciplinary = DisciplinaryActions::find($id);
        $this->disciplinary_action = $disciplinary->action;
        $this->selected_disciplinary_action_id = $disciplinary->id;
    }

    public function updateDisciplinaryAction()
    {
        $validatedData = $this->validate([
            'disciplinary_action' => 'required|max:255|unique:disciplinary_actions,action'
        ]);

        DisciplinaryActions::find($this->selected_disciplinary_action_id)->update([
            'action' => $validatedData['disciplinary_action']
        ]);

        $this->showToast('success', 'The disciplinary action is updated successfully.');
        $this->resetInputFields();
    }

    public function addOffenseLevel()
    {
        $validatedData = $this->validate([
            'level' => 'required|max:255|unique:offense_levels,level'
        ]);

        OffenseLevels::create([
            'level' => $validatedData['level']
        ]);

        $this->showToast('success', 'The offense level is updated successfully.');
        $this->resetInputFields();
    }

    public function getOffenseLevel($id)
    {
        $level = OffenseLevels::find($id);
        $this->level = $level->level;
        $this->selected_level_id = $level->id;
    }

    public function updateOffenseLevel()
    {
        $validatedData = $this->validate([
            'level' => 'required|max:255|unique:offense_levels,level'
        ]);

        OffenseLevels::find($this->selected_level_id)->update([
            'level' => $validatedData['level']
        ]);

        $this->showToast('success', 'The new offense level is added successfully.');
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
        $this->showToast('success', 'The disciplinary action is deleted successfully.');
    }

    public function deleteOffenseLevel($id)
    {
        OffenseLevels::find($id)->delete();
        $this->showToast('success', 'The offense level is deleted successfully.');
    }

    public function resetInputFields()
    {
        $this->offense = null;
        $this->category_id = null;
        $this->category = null;
        $this->level = null;
        $this->disciplinary_action = null;
        $this->selected_disciplinary_action_ids = [];
        $this->selected_offense = null;
        $this->resetErrorBag();
    }
}
