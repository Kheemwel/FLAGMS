<?php

namespace App\Livewire;

use App\Models\DisciplinaryActions;
use App\Models\GuardianAnecdotalSignatures;
use App\Models\Offenses;
use App\Models\OffensesDisciplinaryActions;
use App\Models\StudentAnecdotalSignatures;
use App\Models\Students;
use App\Models\StudentsAnecdotals;
use App\Models\UserAccounts;
use App\Traits\Toasts;
use Livewire\Component;
use Livewire\WithFileUploads;

class StudentsLivewire extends Component
{
    use Toasts;
    use WithFileUploads;
    public $students, $student_id, $student_name, $lrn, $school_level, $grade_level;
    public $anecdotal, $input_date, $input_time, $input_offense, $input_disciplinary_action, $display_disciplinary_action;
    public $offenses;
    public $privileges = [];
    public $studentSignature, $guardianSignature;

    protected $listeners = ['setInputOffense'];

    public $hasDismissal = false, $dismissalID;

    public function mount()
    {
        $my_id = session('user_id');
        if ($my_id) {
            $user = UserAccounts::find($my_id);
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
        return view('livewire.users.students.students-livewire');
    }

    public function updatedStudentSignature($value)
    {
        if (!is_string($value) && !preg_match('/^data:image\/\w+;base64,/', $value)) {
            $this->studentSignature = imageBinaryToSRC(file_get_contents($value->getRealPath()));
        }
    }

    public function updatedGuardianSignature($value)
    {
        if (!is_string($value) && !preg_match('/^data:image\/\w+;base64,/', $value)) {
            $this->guardianSignature = imageBinaryToSRC(file_get_contents($value->getRealPath()));
        }
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
        if ($this->anecdotal) {
            $ids = $this->anecdotal->pluck('disciplinary_action_id')->toArray();
            $this->hasDismissal = in_array($this->dismissalID, $ids);
        } else {
            $this->hasDismissal = false;
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

        $student_signature_id = null;
        if ($this->studentSignature) {
            $studentSignatureImage = null;
            $guardianSignatureImage = null;

            if (is_string($this->studentSignature) && preg_match('/^data:image\/\w+;base64,/', $this->studentSignature)) {
                $base64String = preg_replace('#^data:image/\w+;base64,#i', '', $this->studentSignature);
                // Decode the base64 string to binary data
                $studentSignatureImage = base64_decode($base64String);
            }

            if (is_string($this->guardianSignature) && preg_match('/^data:image\/\w+;base64,/', $this->guardianSignature)) {
                $base64String = preg_replace('#^data:image/\w+;base64,#i', '', $this->guardianSignature);
                // Decode the base64 string to binary data
                $guardianSignatureImage = base64_decode($base64String);
            }

            // if (!is_string($this->studentSignature) && !preg_match('/^data:image\/\w+;base64,/', $this->studentSignature)) {
            //     $image = file_get_contents($this->studentSignature->getRealPath());
            // }

            $studentSignature = StudentAnecdotalSignatures::create([
                'student_signature' => $studentSignatureImage
            ]);

            $guardianSignature = GuardianAnecdotalSignatures::create([
                'guardian_signature' => $guardianSignatureImage
            ]);

            $student_signature_id = $studentSignature->id;
            $guardian_signature_id = $guardianSignature->id;
        }

        StudentsAnecdotals::create([
            'student_id' => $this->student_id,
            'date' => $validateData['input_date'],
            'time' => $validateData['input_time'],
            'offense_id' => $validateData['input_offense'],
            'disciplinary_action_id' => $validateData['input_disciplinary_action'],
            'student_signature_id' => $student_signature_id,
            'guardian_signature_id' => $guardian_signature_id
        ]);

        $this->anecdotal = StudentsAnecdotals::where('student_id', $this->student_id)->get();
        $ids = $this->anecdotal->pluck('disciplinary_action_id')->toArray();
        $this->hasDismissal = in_array($this->dismissalID, $ids);

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
        $this->studentSignature = null;
        $this->guardianSignature = null;
        $this->dispatch('clearSelection');
        $this->resetErrorBag();
    }
}
