<?php

namespace App\Livewire;

use App\Models\GuidancePrograms;
use App\Traits\Toasts;
use Livewire\Component;

class GuidanceProgramLivewire extends Component
{
    use Toasts;
    public $title, $program_start, $program_end, $description, $color;
    public function render()
    {
        $programs = GuidancePrograms::all();
        $this->dispatch('calendar', $programs);
        return view('livewire.guidance_program.guidance-program-livewire');
    }

    public function addEvent()
    {
        $validatedData = $this->validate([
            'title' => 'required|string|max:255',
            'program_start' => 'required',
            'program_end' => 'required',
            'description' => 'nullable',
            'color' => 'nullable'
        ]);

        GuidancePrograms::create($validatedData);

        $this->showToast('success', 'The Event is Added Successfully');
        $this->resetFields();
    }

    public function resetFields()
    {
        $this->title = null;
        $this->program_start = null;
        $this->program_end = null;
        $this->description = null;
        $this->color = null;
        $this->resetErrorBag();
    }
}
