<?php

namespace App\Livewire;

use App\Models\Forms;
use App\Models\HomeVisitationForms;
use App\Models\Parents;
use App\Models\UserAccounts;
use App\Models\ViolationForms;
use App\Models\ViolationFormsStudents;
use Livewire\Component;

class FillOutFormsLivewire extends Component
{
    public $forms, $role, $studentID, $homeVisitationForm, $violationForm, $myChildIDs, $teacherID;
    public $caseStatuses = ['Resolved', 'Unresolved', 'Pending'];
    public $offenseTypes = ['Physical', 'Verbal', 'Social', 'Others'];

    public $homeVisitationFormFields = [
        'student_first_name' => null,
        'student_last_name' => null,
        'student_number' => null,
        'lrn' => null,
        'visitation_date' => null,
        'place' => null,
        'reason' => null,
        'remark' => null,
        'adviser' => null,
    ];

    public $violationFormFields = [
        'date_time' => null,
        'time' => null,
        'student_name' => null,
        'parent' => null,
        'teacher' => null,
        'offense_type' => null,
        'narrative' => null,
        'action_taken' => null,
        'case_status' => null,
        'recommendation' => null,
    ];

    public function mount()
    {
        $myID = session('user_id');
        $user =  UserAccounts::find($myID);
        $this->role = $user->role;
        if ($this->role == 'Student') {
            $this->studentID = $user->hasStudent->id;
        } elseif ($this->role == 'Parent') {
            $this->myChildIDs = $user->hasParent->children->pluck('id')->toArray();
        } elseif ($this->role == 'Teacher') {
            $this->teacherID = $user->hasTeacher->id;
        }
        $this->loadForms();
    }
    public function render()
    {
        return view('livewire.fill_out_forms.fill-out-forms-livewire');
    }

    public function loadForms()
    {
        if ($this->role == 'Student') {
            $this->forms = Forms::with('requestForm', 'homeVisitationForm', 'violationForm', 'violationForm.violationFormStudents')
                ->whereHas('homeVisitationForm', function ($query) {
                    $query->where('student_id', $this->studentID);
                })->orWhereHas('violationForm', function ($query) {
                    $query->WhereHas('violationFormStudents',  function ($subQuery) {
                        $subQuery->where('student_id', $this->studentID);
                    });
                })->get();
        } elseif ($this->role == 'Parent') {
            $this->forms = Forms::with('requestForm', 'homeVisitationForm', 'violationForm', 'violationForm.violationFormStudents')
                ->whereHas('homeVisitationForm', function ($query) {
                    $query->whereIn('student_id', $this->myChildIDs);
                })->orWhereHas('violationForm', function ($query) {
                    $query->WhereHas('violationFormStudents',  function ($subQuery) {
                        $subQuery->whereIn('student_id', $this->myChildIDs);
                    });
                })->get();
        } elseif ($this->role == 'Teacher') {
            $this->forms = Forms::with('requestForm', 'homeVisitationForm', 'violationForm', 'violationForm.violationFormStudents')
                ->whereHas('requestForm', function ($query) {
                    $query->where('teacher_id', $this->teacherID);
                })->get();
        } else {
            $this->forms = Forms::with('homeVisitationForm', 'violationForm', 'violationForm.violationFormStudents')->get();
        }
    }

    public function getHomeVisitationForm($id)
    {
        $this->homeVisitationForm = HomeVisitationForms::where('form_id', $id)->first();
        $this->homeVisitationFormFields = [
            'student_first_name' => $this->homeVisitationForm->student->getUserAccount->first_name,
            'student_last_name' => $this->homeVisitationForm->student->getUserAccount->last_name,
            'student_number' => null,
            'lrn' => $this->homeVisitationForm->student->lrn,
            'visitation_date' => $this->homeVisitationForm->visitation_date,
            'place' => $this->homeVisitationForm->place,
            'reason' => $this->homeVisitationForm->reason,
            'remark' => $this->homeVisitationForm->remark,
            'adviser' => $this->homeVisitationForm->teacherName(),
        ];
    }

    public function getViolationForm($violationFormID, $violationFormStudentID)
    {
        $this->violationForm = ViolationFormsStudents::where('violation_forms_id', $violationFormID)->find($violationFormStudentID);
        $this->violationFormFields = [
            'date' => $this->violationForm->date,
            'time' => $this->violationForm->time,
            'student_name' => $this->violationForm->student->name(),
            'parent' => $this->violationForm->student->parentName(),
            'teacher' => $this->violationForm->violationForm->teacherName(),
            'offense_type' => $this->violationForm->violationForm->offense_type,
            'narrative' => $this->violationForm->narrative,
            'action_taken' => $this->violationForm->violationForm->action_taken,
            'case_status' => $this->violationForm->violationForm->case_status,
            'recommendation' => $this->violationForm->violationForm->recommendation,
        ];
    }

    public function resetFields()
    {
        $this->violationForm = null;
        $this->homeVisitationForm = null;
    }
}
