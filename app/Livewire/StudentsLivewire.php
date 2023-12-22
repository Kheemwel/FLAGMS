<?php

namespace App\Livewire;

use App\Models\DisciplinaryActions;
use App\Models\GuardianAnecdotalSignatures;
use App\Models\HomeVisitationForms;
use App\Models\OffenseLevels;
use App\Models\Offenses;
use App\Models\OffensesDisciplinaryActions;
use App\Models\StudentAnecdotalSignatures;
use App\Models\Students;
use App\Models\StudentsAnecdotals;
use App\Models\UserAccounts;
use App\Models\ViolationFormsStudents;
use App\Traits\Notify;
use App\Traits\Toasts;
use Livewire\Component;
use Livewire\WithFileUploads;

class StudentsLivewire extends Component
{
    use Toasts;
    use WithFileUploads;
    use Notify;
    public $students, $student_id, $student_name, $lrn, $school_level, $grade_level;
    public $anecdotal, $input_date, $input_time, $input_offense, $input_disciplinary_action, $display_disciplinary_action, $offenseLevel;
    public $offenses, $inventory;
    public $privileges = [];
    public $studentSignature, $guardianSignature;
    public $numViolations, $numViolationForms, $numHomeVisitationForms;

    protected $listeners = ['setInputOffense'];

    public $hasDismissal = false, $dismissalID;

    public $my_id;
    public function mount()
    {
        $my_id = session('user_id');
        if ($my_id) {
            $user = UserAccounts::find($my_id);
            $this->my_id = $user->id;
            $this->privileges = $user->Roles->privileges()->pluck('privilege')->toArray();
        }

        $this->offenses = Offenses::all();
        $studentIdsWithAnecdotals = StudentsAnecdotals::pluck('student_id')->toArray();
        $query_students = Students::get();
        if (in_array('ViewStudentsAnecdotal', $this->privileges) && !in_array('WriteStudentsAnecdotal', $this->privileges)) {
            $this->students = $query_students->whereIn('id', $studentIdsWithAnecdotals);
        } else {
            $this->students = $query_students;
        }

        $this->dismissalID = DisciplinaryActions::where('action', 'Dismissal')->first()->id;
    }

    public function render()
    {
        return view('livewire.students.students-livewire');
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
            $this->offenseLevel = OffenseLevels::find($offense_level)->level;
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
        $this->inventory = $student->IndividualInventory;
        $this->student_name = $student->getUserAccount->first_name . " " . $student->getUserAccount->last_name;
        $this->lrn = $student->lrn;
        $this->school_level = $student->schoolLevel->school_level;
        $this->grade_level = $student->gradeLevel->grade_level;
        if ($this->anecdotal) {
            $ids = $this->anecdotal->pluck('disciplinary_action_id')->toArray();
            $this->hasDismissal = in_array($this->dismissalID, $ids);
        } else {
            $this->hasDismissal = false;
        }

        if ($this->anecdotal) {
            $offensesWithCount = Offenses::withCount('Anecdotals')
                ->whereHas('Anecdotals', function ($query) use ($id) {
                    $query->where('student_id', $id);
                })
                ->get()
                ->map(function ($offense) {
                    return [
                        'offense' => $offense->offense_name, // Replace `name` with the relevant attribute
                        'count' => $offense->anecdotals_count, // Adjust the count attribute name if different
                    ];
                })
                ->toArray();
            // Format the result as an array with offense as key and count as value
            $offenses = array_combine(
                array_column($offensesWithCount, 'offense'),
                array_column($offensesWithCount, 'count')
            );
            $this->dispatch('summary', $offenses);
            $this->numViolations = $this->anecdotal->count();
            $this->numViolationForms = ViolationFormsStudents::where('student_id', $id)->count();
            $this->numHomeVisitationForms = HomeVisitationForms::where('student_id', $id)->count();
        }
    }

    public function saveAnecdotal()
    {
        $validateData = $this->validate([
            'input_date' => 'required|date|before_or_equal:today',
            'input_time' => 'required',
            'input_offense' => 'required|integer',
            'input_disciplinary_action' => 'required|integer'
        ]);
        $student = Students::find($this->student_id);
        $parent = $student->parents()->first();

        StudentsAnecdotals::create([
            'student_id' => $student->id,
            'date' => $validateData['input_date'],
            'time' => $validateData['input_time'],
            'offense_id' => $validateData['input_offense'],
            'disciplinary_action_id' => $validateData['input_disciplinary_action'],
            'guardian_name' => $parent->name,
        ]);

        $this->anecdotal = StudentsAnecdotals::where('student_id', $this->student_id)->get();
        $ids = $this->anecdotal->pluck('disciplinary_action_id')->toArray();
        $this->hasDismissal = in_array($this->dismissalID, $ids);

        $offense = Offenses::find($validateData['input_offense']);
        $this->notify($this->my_id, $student->getUserAccount->id, "You committed {$offense->offense_name}", 'student-anecdotal');
        $this->notify(
            $this->my_id,
            $parent->getUserAccount->id,
            "{$student->name} committed {$offense->category} which is {$offense->offense_name} for the {$this->offenseLevel}. The Disciplinary Action is {$this->display_disciplinary_action}.",
            'child-anecdotal'
        );

        $this->showToast('success', 'Andedotal Record Added Successfully');
        $this->resetInputs();
    }

    public function resetInputs()
    {
        $this->input_time = null;
        $this->input_date = null;
        $this->input_offense = null;
        $this->input_disciplinary_action = null;
        $this->display_disciplinary_action = null;
        $this->dispatch('clearSelection');
        $this->resetErrorBag();
    }
}
