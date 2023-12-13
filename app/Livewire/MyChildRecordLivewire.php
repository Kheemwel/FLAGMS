<?php

namespace App\Livewire;

use App\Models\GuardianAnecdotalSignatures;
use App\Models\Parents;
use App\Models\StudentIndividualInventory;
use App\Models\Students;
use App\Models\StudentsAnecdotals;
use App\Traits\Toasts;
use Livewire\Component;
use Livewire\WithFileUploads;

class MyChildRecordLivewire extends Component
{
    use Toasts;
    use WithFileUploads;
    public $children, $anecdotal = [], $inventory, $summary, $guardianSignature, $selectedAnecdotalRow;
    public $student_id;
    public function mount()
    {
        $id = session('user_id');
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
        ];
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
                $this->dispatch('closeSignaturePad');
                $this->guardianSignature = null;
            }
        }
    }
}
