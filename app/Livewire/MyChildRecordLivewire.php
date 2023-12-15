<?php

namespace App\Livewire;

use App\Models\GuardianAnecdotalSignatures;
use App\Models\HomeVisitationForms;
use App\Models\Offenses;
use App\Models\Parents;
use App\Models\StudentIndividualInventory;
use App\Models\Students;
use App\Models\StudentsAnecdotals;
use App\Models\ViolationFormsStudents;
use App\Traits\Notify;
use App\Traits\Toasts;
use Livewire\Component;
use Livewire\WithFileUploads;

class MyChildRecordLivewire extends Component
{
    use Toasts;
    use WithFileUploads;
    use Notify;
    public $children, $anecdotal = [], $inventory, $summary, $guardianSignature, $selectedAnecdotalRow;
    public $student_id, $my_id;
    public function mount()
    {
        $id = session('user_id');
        $this->my_id = $id;
        if ($id) {
            $parent = Parents::where('user_account_id', $id)->first();
            $this->children = $parent->children()->get();
        }
    }
    public function render()
    {
        return view('livewire.my_child_record.my-child-record-livewire');
    }

    public function updatedGuardianSignature($value)
    {
        if (!is_string($value) && !preg_match('/^data:image\/\w+;base64,/', $value)) {
            $this->guardianSignature = imageBinaryToSRC(file_get_contents($value->getRealPath()));
        }
    }

    public function viewInventory($id)
    {
        $this->inventory = StudentIndividualInventory::where('student_id', $id)->first();
    }

    public function viewSummary($id)
    {
        $student = Students::find($id);
        $this->summary = [
            'name' => $student->name,
            'lrn' => $student->lrn,
            'school_level' => $student->getSchoolLevel(),
            'grade_level' => "Grade {$student->getGradeLevel()}",
            'numViolations' => StudentsAnecdotals::where('student_id', $id)->count(),
            'numViolationForms' => ViolationFormsStudents::where('student_id', $id)->count(),
            'numHomeVisitationForms' => HomeVisitationForms::where('student_id', $id)->count(),
        ];


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
    }

    public function viewAnecdotal($id)
    {
        $this->student_id = $id;
        $this->anecdotal = StudentsAnecdotals::where('student_id', $id) ? StudentsAnecdotals::where('student_id', $id)->get() : null;
    }

    public function updateSignature()
    {
        $this->validate([
            'guardianSignature' => 'required',
        ]);

        $signature = null;
        if ($this->guardianSignature) {
            if (is_string($this->guardianSignature) && preg_match('/^data:image\/\w+;base64,/', $this->guardianSignature)) {
                $base64String = preg_replace('#^data:image/\w+;base64,#i', '', $this->guardianSignature);
                // Decode the base64 string to binary data
                $signature = base64_decode($base64String);



                $guardianSignature = GuardianAnecdotalSignatures::create([
                    'guardian_signature' => $signature,
                ]);

                $guardian_signature_id = $guardianSignature->id;

                StudentsAnecdotals::find($this->selectedAnecdotalRow)->update([
                    'guardian_signature_id' => $guardian_signature_id,
                ]);

                $this->anecdotal = StudentsAnecdotals::where('student_id', $this->student_id)->get();
                $this->showToast('success', 'Signature Updated Successfully');

                $studentUserID = Students::find($this->student_id)->getUserAccount->id;
                $this->notify($this->my_id, $studentUserID, 'I updated my signature in anecdotal record', 'student-anecdotal');
                $this->dispatch('closeSignaturePad');
                $this->guardianSignature = null;
            }
        }
    }
}
