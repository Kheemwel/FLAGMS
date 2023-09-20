<?php

namespace App\Livewire;

use App\Models\Offenses;
use App\Traits\Toasts;
use Livewire\Component;

class OffensesLivewire extends Component
{
    use Toasts;
    public $offenses, $offense, $description;
    public function render()
    {
        $this->offenses = Offenses::all();
        return view('livewire.file_management.offenses.offenses-livewire');
    }

    public function addOffense()
    {
        $validatedData = $this->validate([
            'offense' => 'required|max:255',
            'description'=> 'nullable'
        ]);

        Offenses::create([
            'offense_name' => $validatedData['offense'],
            'description' => $validatedData['description']
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
        $this->description = null;
    }
}
