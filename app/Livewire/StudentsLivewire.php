<?php

namespace App\Livewire;

use App\Models\DisciplinaryActions;
use App\Models\Offenses;
use App\Models\OffensesDisciplinaryActions;
use App\Models\Students;
use App\Models\StudentsAnecdotals;
use App\Traits\Toasts;
use Livewire\Component;

class StudentsLivewire extends Component
{
    use Toasts;
    public $students, $student_id, $student_name, $lrn, $school_level, $grade_level;
    public $anecdotal, $input_date, $input_time, $input_offense, $input_disciplinary_action, $display_disciplinary_action;
    public $offenses;

    protected $listeners = ['setInputOffense'];

    public function mount()
    {
        $this->students = Students::all();
        $this->offenses = Offenses::all();
    }

    public function render()
    {
        return view('livewire.users.students.students-livewire');
    }

    public function setInputOffense($value)
    {
        $this->input_offense = $value;
        if ($value) {
            $offense_level = 1;
            if ($this->anecdotal) {
                try {
                    $count = StudentsAnecdotals::where('student_id', $this->student_id)
                        ->where('offense_id', $this->input_offense)->count();
                    $offense_level = $count <= 4 ? $count + 1 : $count;
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
            $this->input_disciplinary_action = OffensesDisciplinaryActions::where('offense_id', $this->input_offense)
                ->where('offense_level_id', $offense_level)->first()->disciplinary_action_id;
            $this->display_disciplinary_action = DisciplinaryActions::find($this->input_disciplinary_action)->action;
        } else {
            $this->input_disciplinary_action = null;
            $this->display_disciplinary_action = null;
        }
    }

    public function getData($id)
    {
        $student = Students::find($id);
        $this->student_id = $student->id;
        $this->anecdotal = StudentsAnecdotals::where('student_id', $student->id)->first() ? StudentsAnecdotals::where('student_id', $student->id)->get() : null;
        $this->student_name = $student->getUserAccount->first_name . " " . $student->getUserAccount->last_name;
        $this->lrn = $student->lrn;
        $this->school_level = $student->schoolLevel->school_level;
        $this->grade_level = $student->gradeLevel->grade_level;
    }

    public function saveAnecdotal()
    {
        $validateData = $this->validate([
            'input_date' => 'required|date',
            'input_time' => 'required',
            'input_offense' => 'required|integer',
            'input_disciplinary_action' => 'required|integer'
        ]);

        StudentsAnecdotals::create([
            'student_id' => $this->student_id,
            'date' => $validateData['input_date'],
            'time' => $validateData['input_time'],
            'offense_id' => $validateData['input_offense'],
            'disciplinary_action_id' => $validateData['input_disciplinary_action']
        ]);

        $this->anecdotal = StudentsAnecdotals::where('student_id', $this->student_id)->get();

        $this->showToast('success', 'Andedotal Record Added Successfully');
        $this->resetInputs();
    }

    public function resetInputs()
    {
        $this->student_name = null;
        $this->lrn = null;
        $this->school_level = null;
        $this->grade_level = null;
        $this->input_time = null;
        $this->input_date = null;
        $this->input_offense = null;
        $this->input_disciplinary_action = null;
        $this->display_disciplinary_action = null;
        $this->dispatch('clearSelection');
        $this->resetErrorBag();
    }
}
