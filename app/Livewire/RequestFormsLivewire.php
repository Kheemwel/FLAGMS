<?php

namespace App\Livewire;

use App\Models\RequestForms;
use App\Models\RequestHomeVisitationForms;
use App\Models\RequestViolationForms;
use App\Models\Students;
use App\Models\UserAccounts;
use App\Traits\Toasts;
use Livewire\Component;

class RequestFormsLivewire extends Component
{
    use Toasts;
    public $teacher_id;
    public $students;
    public $studentsInvolve, $selectedStudent;
    public $offenseType, $homeVisitationReason;
    public $offenseTypes = ['Physical', 'Verbal', 'Social', 'Others'];
    public $requestforms, $violationForm, $homeVisitationForm;
    public function mount()
    {
        $this->students = Students::whereHas('getUserAccount', function ($query) {
            // Filter students where the associated user account is not archived
            $query->where('is_archive', false);
        })->get();

        $id = session('user_id');
        if ($id) {
            $this->teacher_id = UserAccounts::find($id)->hasTeacher->id;
        }
    }

    public function render()
    {
        $this->requestforms = RequestForms::where('teacher_id', $this->teacher_id)->oldest()->get();
        return view('livewire.request_forms.request-forms-livewire');
    }

    public function requestForm($type)
    {
        if ($type == 'Violation Form') {
            $validatedData = $this->validate([
                'studentsInvolve' => 'required|array|min:1',
                'offenseType' => 'required|string'
            ]);

            $request_form = RequestForms::create([
                'teacher_id' => $this->teacher_id,
                'form_type' => $type
            ]);

            $violationForm = RequestViolationForms::create([
                'request_form_id' => $request_form->id,
                'offense_type' => $validatedData['offenseType']
            ]);

            $violationForm->students()->attach($validatedData['studentsInvolve']);
        } else if ($type == 'Home Visitation Form') {
            $validatedData = $this->validate([
                'selectedStudent' => 'required|integer',
                'homeVisitationReason' => 'required|string'
            ]);

            $request_form = RequestForms::create([
                'teacher_id' => $this->teacher_id,
                'form_type' => $type
            ]);

            RequestHomeVisitationForms::create([
                'request_form_id' => $request_form->id,
                'student_id' => $validatedData['selectedStudent'],
                'reason' => $validatedData['homeVisitationReason']
            ]);
        }
        $this->showToast('success', 'Request Form is Submitted Successfully');
        $this->resetFields();
    }

    public function read($type, $id)
    {
        if ($type == 'Violation Form') {
            $this->violationForm = RequestForms::where('id', $id)->where('form_type', $type)->first()->violationForm;
        } else if ($type == 'Home Visitation Form') {
            $this->homeVisitationForm = RequestForms::where('id', $id)->where('form_type', $type)->first()->homeVisitationForm;
        }
    }

    public function resetFields()
    {
        $this->studentsInvolve = null;
        $this->selectedStudent = null;
        $this->homeVisitationReason = null;
        $this->offenseType = null;
        $this->violationForm = null;
        $this->homeVisitationForm = null;
        $this->resetErrorBag();
    }
}
