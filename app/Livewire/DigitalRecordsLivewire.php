<?php

namespace App\Livewire;

use App\Models\Forms;
use App\Models\HomeVisitationForms;
use App\Models\ViolationFormsStudents;
use Livewire\Component;

class DigitalRecordsLivewire extends Component
{
    public $home_visistation_forms, $violation_forms;
    public $homeVisitationForm, $violationForm;
    public $caseStatuses = ['Resolved', 'Unresolved', 'Pending'];
    public $offenseTypes = ['Physical', 'Verbal', 'Social', 'Others'];

    public $homeVisitationFormFields = [
        'student_surname' => null,
        'student_firstname' => null,
        'student_middlename' => null,
        'student_no' => null,
        'lrn' => null,
        'level_section' => null,
        'address' => null,
        'birthday' => null,
        'age' => null,
        'father_name' => null,
        'father_contact' => null,
        'mother_name' => null,
        'mother_contact' => null,
        'guardian_name' => null,
        'guardian_contact' => null,
        'visitation_date' => null,
        'place' => null,
        'reason' => null,
        'remark' => null,
        'adviser' => null,
        'student_signature_id' => null,
        'parent_signature_id' => null,
        'teacher_signature_id' => null,
        'guidance_signature_id' => null,
        'junior_principal_signature_id' => null,
        'senior_principal_signature_id' => null,
        'parent_name' => null,
        'guidance_name' => null,
        'teacher_name' => null,
        'junior_principal_name' => null,
        'senior_principal_name' => null,
        'student_name' => null,
    ];

    public $violationFormFields = [
        'date' => null,
        'time' => null,
        'student_name' => null,
        'level_section' => null,
        'age' => null,
        'gender' => null,
        'birthday' => null,
        'parent' => null,
        'contact' => null,
        'address' => null,
        'teacher_name' => null,
        'offense_type' => null,
        'narrative' => null,
        'action_taken' => null,
        'case_status' => null,
        'recommendation' => null,
        'student_signature_id' => null,
    ];

    public function mount()
    {
        $this->home_visistation_forms = Forms::with('homeVisitationForm')
        ->where('form_type', 'Home Visitation Form')
        ->where('status', 'COMPLETE')->get();

        $this->violation_forms = Forms::with('violationForm', 'violationForm.violationFormStudents')
        ->where('form_type', 'Violation Form')
        ->where('status', 'COMPLETE')->get();
    }

    public function render()
    {
        return view('livewire.digital_records.digital-records-livewire');
    }

    public function getHomeVisitationForm($id)
    {
        $this->homeVisitationForm = HomeVisitationForms::where('form_id', $id)->first();
        $this->homeVisitationFormFields = [
            'student_surname' => $this->homeVisitationForm->student_surname,
            'student_firstname' => $this->homeVisitationForm->student_firstname,
            'student_middlename' => $this->homeVisitationForm->student_middlename,
            'student_no' => $this->homeVisitationForm->student_no,
            'student_name' => $this->homeVisitationForm->student_name,
            'lrn' => $this->homeVisitationForm->lrn,
            'level_section' => $this->homeVisitationForm->level_section,
            'address' => $this->homeVisitationForm->address,
            'birthday' => $this->homeVisitationForm->birthday,
            'age' => $this->homeVisitationForm->age,
            'father_name' =>  $this->homeVisitationForm->father_name,
            'father_contact' =>  $this->homeVisitationForm->father_contact,
            'mother_name' =>  $this->homeVisitationForm->mother_name,
            'mother_contact' =>  $this->homeVisitationForm->mother_contact,
            'guardian_name' =>  $this->homeVisitationForm->guardian_name,
            'guardian_contact' =>  $this->homeVisitationForm->guardian_contact,
            'visitation_date' => $this->homeVisitationForm->visitation_date,
            'place' => $this->homeVisitationForm->place,
            'reason' => $this->homeVisitationForm->reason,
            'remark' => $this->homeVisitationForm->remark,
            'student_signature_id' => $this->homeVisitationForm->student_signature_id,
            'parent_signature_id' => $this->homeVisitationForm->parent_signature_id,
            'teacher_signature_id' => $this->homeVisitationForm->teacher_signature_id,
            'guidance_signature_id' => $this->homeVisitationForm->guidance_signature_id,
            'junior_principal_signature_id' => $this->homeVisitationForm->junior_principal_signature_id,
            'senior_principal_signature_id' => $this->homeVisitationForm->senior_principal_signature_id,
            'parent_name' => $this->homeVisitationForm->parent_name,
            'guidance_name' => $this->homeVisitationForm->guidance_name,
            'teacher_name' => $this->homeVisitationForm->teacher_name,
            'junior_principal_name' => $this->homeVisitationForm->junior_principal_name,
            'senior_principal_name' => $this->homeVisitationForm->senior_principal_name,
        ];
    }

    public function getViolationForm($violationFormID, $violationFormStudentID)
    {
        $this->violationForm = ViolationFormsStudents::where('violation_forms_id', $violationFormID)->find($violationFormStudentID);
        $formViolation = $this->violationForm->violationForm;
        $this->violationFormFields = [
            'date' => $formViolation->date,
            'time' => $formViolation->time,
            'student_name' => $this->violationForm->student_name,
            'level_section' => $this->violationForm->level_section,
            'age' => $this->violationForm->age,
            'gender' =>  $this->violationForm->gender,
            'birthday' =>  $this->violationForm->birthday,
            'parent' => $this->violationForm->parent,
            'contact' => $this->violationForm->contact,
            'address' =>  $this->violationForm->address,
            'teacher_name' => $formViolation->teacher_name,
            'offense_type' => $formViolation->offense_type,
            'narrative' => $this->violationForm->narrative,
            'action_taken' => $formViolation->action_taken,
            'case_status' => $formViolation->case_status,
            'recommendation' => $formViolation->recommendation,
            'student_signature_id' => $this->violationForm->student_signature_id,
        ];
    }
}
