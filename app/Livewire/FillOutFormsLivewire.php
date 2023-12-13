<?php

namespace App\Livewire;

use App\Models\Forms;
use App\Models\Guidance;
use App\Models\HomeVisitationForms;
use App\Models\Parents;
use App\Models\Principals;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\UserAccounts;
use App\Models\ViolationForms;
use App\Models\ViolationFormsStudents;
use App\Traits\Notify;
use App\Traits\Toasts;
use Carbon\Carbon;
use Livewire\Component;

class FillOutFormsLivewire extends Component
{
    use Toasts;
    use Notify;
    public $forms, $role, $studentID, $homeVisitationForm, $violationForm, $myChildIDs, $teacherID, $guidanceID, $principalID;
    public $caseStatuses = ['Resolved', 'Unresolved', 'Pending'];
    public $offenseTypes = ['Physical', 'Verbal', 'Social', 'Others'];
    public $my_id, $privileges;
    public $teachers, $students, $studentsInvolve, $selectedStudent, $selectedTeacher;
    public $violationReason, $homeVisitationReason;

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
        'teacher' => null,
        'offense_type' => null,
        'narrative' => null,
        'action_taken' => null,
        'case_status' => null,
        'recommendation' => null,
        'student_signature_id' => null,
    ];

    public function mount()
    {
        $myID = session('user_id');
        $user =  UserAccounts::find($myID);
        $this->my_id = $user->id;
        $this->role = $user->role;
        $this->privileges = $user->Roles->privileges()->pluck('privilege')->toArray();
        if ($this->role == 'Student') {
            $this->studentID = $user->hasStudent->id;
        } elseif ($this->role == 'Parent') {
            $this->myChildIDs = $user->hasParent->children->pluck('id')->toArray();
        } elseif ($this->role == 'Teacher') {
            $this->teacherID = $user->hasTeacher->id;
        } elseif ($this->role == 'Guidance') {
            $this->guidanceID = $user->hasGuidance->id;
        } elseif ($this->role == 'principalID') {
            $this->principalID = $user->hasPrincipal->id;
        }

        $this->students = Students::whereHas('getUserAccount', function ($query) {
            // Filter students where the associated user account is not archived
            $query->where('is_archive', false);
        })->get();
        $this->teachers = Teachers::whereHas('getUserAccount', function ($query) {
            // Filter students where the associated user account is not archived
            $query->where('is_archive', false);
        })->get();
        $this->loadForms();
    }
    public function render()
    {
        return view('livewire.fill_out_forms.fill-out-forms-livewire');
    }
    public function loadForms()
    {
        if ($this->role == 'Student') {
            $this->forms = Forms::with('homeVisitationForm', 'violationForm', 'violationForm.violationFormStudents')
                ->whereHas('homeVisitationForm', function ($query) {
                    $query->where('student_id', $this->studentID);
                })->orWhereHas('violationForm', function ($query) {
                    $query->WhereHas('violationFormStudents',  function ($subQuery) {
                        $subQuery->where('student_id', $this->studentID);
                    });
                })->get();
        } elseif ($this->role == 'Parent') {
            $this->forms = Forms::with('homeVisitationForm', 'violationForm', 'violationForm.violationFormStudents')
                ->whereHas('homeVisitationForm', function ($query) {
                    $query->whereIn('student_id', $this->myChildIDs);
                })->orWhereHas('violationForm', function ($query) {
                    $query->WhereHas('violationFormStudents',  function ($subQuery) {
                        $subQuery->whereIn('student_id', $this->myChildIDs);
                    });
                })->get();
        } elseif ($this->role == 'Teacher') {
            $this->forms = Forms::with('homeVisitationForm', 'violationForm', 'violationForm.violationFormStudents')->where('teacher_id', $this->teacherID)->get();
        } elseif ($this->role == 'Principal') {
            $position = Principals::find($this->principalID)->position;
            if ($position === 'Junior High School Principal') {
                $this->forms = Forms::with('homeVisitationForm')
                ->whereHas('homeVisitationForm', function ($query) {
                    $query->whereIn('junior_principal_id', $this->myChildIDs);
                })->get();
            } else if ($position === 'Senior High School Principal') {
                $this->forms = Forms::with('homeVisitationForm')
                ->whereHas('homeVisitationForm', function ($query) {
                    $query->whereIn('senior_principal_id', $this->myChildIDs);
                })->get();
            } 
        } else {
            $this->forms = Forms::with('homeVisitationForm', 'violationForm', 'violationForm.violationFormStudents')->get();
        }
    }

    public function createForm($type)
    {
        if ($type == 'Violation Form') {
            $validatedData = $this->validate([
                'selectedTeacher' => 'required|integer',
                'studentsInvolve' => 'required|array|min:1',
            ]);

            $form = Forms::create([
                'guidance_id' => $this->guidanceID,
                'teacher_id' => $validatedData['selectedTeacher'],
                'form_type' => $type,
            ]);

            $violation = ViolationForms::create([
                'form_id' => $form->id,
            ])->createViolationFormStudents($validatedData['studentsInvolve']);


        } else if ($type == 'Home Visitation Form') {
            $validatedData = $this->validate([
                'selectedTeacher' => 'required|integer',
                'selectedStudent' => 'required|integer',
                'homeVisitationReason' => 'required|string',
            ]);

            $form = Forms::create([
                'guidance_id' => $this->guidanceID,
                'teacher_id' => $validatedData['selectedTeacher'],
                'form_type' => $type,
            ]);

            $student = Students::find($validatedData['selectedStudent']);

            HomeVisitationForms::create([
                'form_id' => $form->id,
                'student_id' => $student->id,
                'reason' => $validatedData['homeVisitationReason'],
                'parent_id' => $student->parents()->first()->id,
                'junior_principal_id' => 1,
                'senior_principal_id' => 2,
            ]);
        }
        $this->showToast('success', "{$type} is Created Successfully");
        $this->loadForms();
        $this->resetFields();
    }

    public function getHomeVisitationForm($id)
    {
        $this->homeVisitationForm = HomeVisitationForms::where('form_id', $id)->first();
        $student = $this->homeVisitationForm->student;
        $inventory = $student->IndividualInventory;
        $this->homeVisitationFormFields = [
            'student_surname' => $student->last_name,
            'student_firstname' => $student->first_name, 
            'student_middlename' => $inventory ? $inventory->middle_name : null, 
            'student_no' => null,
            'lrn' => $student->lrn,
            'level_section' => "Grade $student->grade_level Mars", 
            'address' => $inventory ? $inventory->address : null, 
            'birthday' => $inventory ? $inventory->birthday : null, 
            'age' => $inventory ? Carbon::parse($inventory->birthday)->diffInYears(Carbon::now()) : null, 
            'father_name' =>  $inventory ? $inventory->father_name : null,  
            'father_contact' =>  $inventory ? $inventory->father_contact : null, 
            'mother_name' =>  $inventory ? $inventory->mother_name : null, 
            'mother_contact' =>  $inventory ? $inventory->mother_contact : null, 
            'guardian_name' =>  $inventory ? $inventory->guardian_name : null, 
            'guardian_contact' =>  $inventory ? $inventory->guardian_contact : null,  
            'visitation_date' => $this->homeVisitationForm->visitation_date,
            'place' => $this->homeVisitationForm->place,
            'reason' => $this->homeVisitationForm->reason,
            'remark' => $this->homeVisitationForm->remark,
            'student_signature_id' => null,
            'parent_signature_id' => null, 
            'teacher_signature_id' => null, 
            'guidance_signature_id' => null, 
            'junior_principal_signature_id' => null, 
            'senior_principal_signature_id' => null,
            'parent_name' => $student->parentName(),
            'guidance_name' => Guidance::first()->name,
            'teacher_name' => $this->homeVisitationForm->teacherName(), 
            'junior_principal_name' => Principals::find(1)->name, 
            'senior_principal_name' => Principals::find(2)->name,
            'student_name' => $student->name,
        ];
    }

    public function getViolationForm($violationFormID, $violationFormStudentID)
    {
        $this->violationForm = ViolationFormsStudents::where('violation_forms_id', $violationFormID)->find($violationFormStudentID);
        $violationForm = $this->violationForm->violationForm;
        $student = $this->violationForm->student;
        $inventory = $student->IndividualInventory;
        $this->violationFormFields = [
            'date' => $violationForm->date,
            'time' => $violationForm->time,
            'student_name' => $student->name,
            'level_section' => "Grade $student->grade_level Mars", 
            'age' => $inventory ? Carbon::parse($inventory->birthday)->diffInYears(Carbon::now()) : null, 
            'gender' =>  $inventory ? $inventory->gender : null, 
            'birthday' =>  $inventory ? $inventory->birthday : null, 
            'parent' => $student->parentName(),
            'contact' => $inventory ?  $inventory->mobile_no : null,
            'address' =>  $inventory ? $inventory->address : null, 
            'teacher' => $violationForm->teacherName(),
            'offense_type' => $violationForm->offense_type,
            'narrative' => $violationForm->narrative,
            'action_taken' => $violationForm->action_taken,
            'case_status' => $violationForm->case_status,
            'recommendation' => $violationForm->recommendation,
            'student_signature_id' => null,
        ];
    }

    public function resetFields()
    {
        $this->violationForm = null;
        $this->homeVisitationForm = null;
    }
}
