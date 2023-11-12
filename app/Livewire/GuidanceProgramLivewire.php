<?php

namespace App\Livewire;

use App\Models\GuidancePrograms;
use App\Models\UserAccounts;
use App\Traits\Toasts;
use Livewire\Component;

class GuidanceProgramLivewire extends Component
{
    use Toasts;
    public $id, $title, $program_start, $program_end, $description, $color;
    public $privileges = [];
    protected $listeners = ['get_event'];

    public function mount()
    {
        $user_id = session('user_id');
        if ($user_id) {
            $user = UserAccounts::find($user_id);
            $this->privileges = $user->getRole->privileges()->pluck('privilege')->toArray();
        }
        $this->renderCalendar();
    }

    public function render()
    {
        return view('livewire.guidance_program.guidance-program-livewire');
    }

    public function renderCalendar() {
        $programs = GuidancePrograms::all();
        $this->dispatch('calendar', $programs);
    }

    public function addEvent()
    {
        $validatedData = $this->validate([
            'title' => 'required|string|max:255',
            'program_start' => 'required|date|after_or_equal:today',
            'program_end' => 'required|date|after:program_start',
            'description' => 'nullable',
            'color' => 'nullable'
        ]);

        GuidancePrograms::create($validatedData);

        $this->showToast('success', 'The Event is Added Successfully');
        $this->resetFields();

        
        $this->renderCalendar();
    }

    public function get_event($id)
    {
        $program = GuidancePrograms::find($id);
        $this->id = $program->id;
        $this->title = $program->title;
        $this->description = $program->description;
        $this->program_start = $program->program_start;
        $this->program_end = $program->program_end;
        $this->color = $program->color;
    }

    public function updateEvent()
    {
        $validatedData = $this->validate([
            'title' => 'required|string|max:255',
            'program_start' => 'required|date|after_or_equal:today',
            'program_end' => 'required|date|after:program_start',
            'description' => 'nullable',
            'color' => 'nullable'
        ]);

        GuidancePrograms::find($this->id)->update($validatedData);

        $this->showToast('success', 'The Event is Updated Successfully');
        $this->resetFields();

        
        $this->renderCalendar();
    }

    public function deleteEvent($id)
    {
        GuidancePrograms::find($id)->delete();
        $this->showToast('success', 'The Event is Deleted Successfully');

        $this->renderCalendar();
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
