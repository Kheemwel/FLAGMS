<?php

namespace App\Livewire;

use App\Models\StudentAnecdotalSignatures;
use App\Models\Students;
use App\Models\StudentsAnecdotals;
use App\Traits\Notify;
use App\Traits\Toasts;
use Livewire\Component;
use Livewire\WithFileUploads;

class StudentAnecdotalLivewire extends Component
{
    use WithFileUploads;
    use Toasts;
    use Notify;
    public $anecdotal, $student_id, $my_id, $studentSignature, $selectedAnecdotalRow, $parent_id;

    public function mount()
    {
        $id = session('user_id');
        $this->my_id = $id;
        if ($id) {
            $student = Students::where('user_account_id', $id)->first();
            $this->student_id = $student->id;
            $this->anecdotal = StudentsAnecdotals::where('student_id', $student->id) ? StudentsAnecdotals::where('student_id', $student->id)->get() : null;
            $this->parent_id = $student->parents()->first()->getUserAccount->id;
        }
    }

    public function render()
    {
        return view('livewire.student_anecodotal.student-anecdotal-livewire');
    }

    public function updatedStudentSignature($value)
    {
        if (!is_string($value) && !preg_match('/^data:image\/\w+;base64,/', $value)) {
            $this->studentSignature = imageBinaryToSRC(file_get_contents($value->getRealPath()));
        }
    }

    public function updateSignature()
    {
        $this->validate([
            'studentSignature' => 'required',
        ]);

        $signature = null;
        if ($this->studentSignature) {
            if (is_string($this->studentSignature) && preg_match('/^data:image\/\w+;base64,/', $this->studentSignature)) {
                $base64String = preg_replace('#^data:image/\w+;base64,#i', '', $this->studentSignature);
                // Decode the base64 string to binary data
                $signature = base64_decode($base64String);



                $studentSignature = StudentAnecdotalSignatures::create([
                    'student_signature' => $signature,
                ]);

                $student_signature_id = $studentSignature->id;

                $anecdotal = StudentsAnecdotals::find($this->selectedAnecdotalRow);
                $anecdotal->update([
                    'student_signature_id' => $student_signature_id,
                ]);

                $this->anecdotal = StudentsAnecdotals::where('student_id', $this->student_id)->get();
                $this->showToast('success', 'Signature Updated Successfully');
                $this->notify($this->my_id, $this->parent_id, 'I updated my signature in anecdotal record', 'child-anecdotal');
                $this->dispatch('closeSignaturePad');
                $this->studentSignature = null;
            }
        }
    }
}
