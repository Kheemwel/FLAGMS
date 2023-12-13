<?php

namespace App\Livewire;

use App\Events\NewNotification;
use App\Models\Notifications;
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
    public $violationReason, $homeVisitationReason;
    public $pending_requestforms, $approved_requestforms, $disapproved_requestforms, $violationForm, $homeVisitationForm;
    public $guidanceIDs = [];
    public function mount()
    {
        // dd(RequestForms::find(1)->teacher_name);
        $this->students = Students::whereHas('getUserAccount', function ($query) {
            // Filter students where the associated user account is not archived
            $query->where('is_archive', false);
        })->get();

        $id = session('user_id');
        if ($id) {
            $this->teacher_id = UserAccounts::find($id)->hasTeacher->id;
        }

        $this->guidanceIDs = UserAccounts::with('Roles')->where('is_archive', false)->whereHas('Roles', function ($sub) {
            $sub->whereIn('role', ['Guidance', 'Admin', 'SuperAdmin']);
        })->get()->pluck('id')->toArray();
    }

    public function render()
    {
        $this->pending_requestforms = RequestForms::where('status', 'pending')
            ->where('teacher_id', $this->teacher_id)->oldest()->get();
        $this->approved_requestforms = RequestForms::where('status', 'approved')
            ->where('teacher_id', $this->teacher_id)->latest()->get();
        $this->disapproved_requestforms = RequestForms::where('status', 'disapproved')
            ->where('teacher_id', $this->teacher_id)->latest()->get();
        return view('livewire.request_forms.request-forms-livewire');
    }

    public function requestForm($type)
    {
        if ($type == 'Violation Form') {
            $validatedData = $this->validate([
                'studentsInvolve' => 'required|array|min:1',
                'violationReason' => 'required|string'
            ]);

            $request_form = RequestForms::create([
                'teacher_id' => $this->teacher_id,
                'form_type' => $type
            ]);

            $violationForm = RequestViolationForms::create([
                'request_form_id' => $request_form->id,
                'reason' => $validatedData['violationReason']
            ]);

            $violationForm->students()->attach($validatedData['studentsInvolve']);
        } else if ($type == 'Home Visitation Form') {
            $validatedData = $this->validate([
                'selectedStudent' => 'required|integer',
                'homeVisitationReason' => 'required|string'
            ]);

            $request_form = RequestForms::create([
                'teacher_id' => $this->teacher_id,
                'form_type' => $type,
            ]);

            RequestHomeVisitationForms::create([
                'request_form_id' => $request_form->id,
                'student_id' => $validatedData['selectedStudent'],
                'reason' => $validatedData['homeVisitationReason']
            ]);
        }
        $this->showToast('success', 'Request Form is Submitted Successfully');
        $this->resetFields();

        foreach ($this->guidanceIDs as $id) {
            Notifications::create([
                'from_user' => $this->teacher_id,
                'to_user' => $id,
                'message' => "I request a $type"
            ]);
        }
        NewNotification::dispatch();
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
        $this->violationReason = null;
        $this->violationForm = null;
        $this->homeVisitationForm = null;
        $this->resetErrorBag();
    }
}
