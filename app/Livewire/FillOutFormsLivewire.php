<?php

namespace App\Livewire;

use App\Models\Forms;
use App\Models\Guidance;
use App\Models\GuidanceFormSignatures;
use App\Models\HomeVisitationForms;
use App\Models\JuniorPrincipalSignatures;
use App\Models\ParentFormSignatures;
use App\Models\Parents;
use App\Models\Principals;
use App\Models\SeniorPrincipalSignatures;
use App\Models\StudentHomeVisitationSignatures;
use App\Models\Students;
use App\Models\StudentViolationSignatures;
use App\Models\TeacherFormSignatures;
use App\Models\Teachers;
use App\Models\UserAccounts;
use App\Models\ViolationForms;
use App\Models\ViolationFormsStudents;
use App\Traits\Notify;
use App\Traits\Toasts;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class FillOutFormsLivewire extends Component
{
    use Toasts;
    use Notify;
    use WithFileUploads;
    public $forms, $role, $studentID, $homeVisitationForm, $violationForm, $myChildIDs, $teacherID, $guidanceID, $principalID, $principalPosition;
    public $caseStatuses = ['Resolved', 'Unresolved', 'Pending'];
    public $offenseTypes = ['Physical', 'Verbal', 'Social', 'Others'];
    public $my_id, $privileges;
    public $teachers, $students, $studentsInvolve, $selectedStudent, $selectedTeacher;
    public $violationReason, $homeVisitationReason, $signature, $signatureType;

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
        } elseif ($this->role == 'Principal') {
            $this->principalID = $user->hasPrincipal->id;
            $this->principalPosition = $user->hasPrincipal->position;
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

    public function setSignature($value)
    {
        $this->updatedSignature($value);
    }

    public function updatedSignature($value)
    {
        $signature = null;
        if (!is_string($value) && !preg_match('/^data:image\/\w+;base64,/', $value)) {
            $signature = file_get_contents($value->getRealPath());
        } else if (is_string($value) && preg_match('/^data:image\/\w+;base64,/', $value)) {
            $base64String = preg_replace('#^data:image/\w+;base64,#i', '', $value);
            // Decode the base64 string to binary data
            $signature = base64_decode($base64String);
        }

        if ($this->signatureType == 'studentViolation') {

            $studentSignatureViolation = StudentViolationSignatures::create([
                'signature' => $signature,
            ]);

            $this->violationForm->update([
                'student_signature_id' => $studentSignatureViolation->id,
            ]);

            $this->violationFormFields['student_signature_id'] = $studentSignatureViolation->id;
            $this->showToast('success', 'Signature Updated Successfully');
            $this->dispatch('closeSignaturePad');
        } else if ($this->signatureType == 'studentHomeVisitation') {
            $studentSignatureHomeVisitation = StudentHomeVisitationSignatures::create([
                'signature' => $signature,
            ]);

            $this->homeVisitationForm->update([
                'student_signature_id' => $studentSignatureHomeVisitation->id,
            ]);

            $this->homeVisitationFormFields['student_signature_id'] = $studentSignatureHomeVisitation->id;
            $this->showToast('success', 'Signature Updated Successfully');
            $this->dispatch('closeSignaturePad');
        } else if ($this->signatureType == 'parent') {
            $parentSignature = ParentFormSignatures::create([
                'signature' => $signature,
            ]);

            $this->homeVisitationForm->update([
                'parent_signature_id' => $parentSignature->id,
            ]);

            $this->homeVisitationFormFields['parent_signature_id'] = $parentSignature->id;
            $this->showToast('success', 'Signature Updated Successfully');
            $this->dispatch('closeSignaturePad');
        } else if ($this->signatureType == 'guidance') {
            $guidanceSignature = GuidanceFormSignatures::create([
                'signature' => $signature,
            ]);

            $this->homeVisitationForm->update([
                'guidance_signature_id' => $guidanceSignature->id,
            ]);

            $this->homeVisitationFormFields['guidance_signature_id'] = $guidanceSignature->id;
            $this->showToast('success', 'Signature Updated Successfully');
            $this->dispatch('closeSignaturePad');
        } else if ($this->signatureType == 'teacher') {
            $teacherSignature = TeacherFormSignatures::create([
                'signature' => $signature,
            ]);

            $this->homeVisitationForm->update([
                'teacher_signature_id' => $teacherSignature->id,
            ]);

            $this->homeVisitationFormFields['teacher_signature_id'] = $teacherSignature->id;
            $this->showToast('success', 'Signature Updated Successfully');
            $this->dispatch('closeSignaturePad');
        } else if ($this->signatureType == 'juniorPrincipal') {
            $juniorPrincipalSignature = JuniorPrincipalSignatures::create([
                'signature' => $signature,
            ]);

            $this->homeVisitationForm->update([
                'junior_principal_signature_id' => $juniorPrincipalSignature->id,
            ]);

            $this->homeVisitationFormFields['junior_principal_signature_id'] = $juniorPrincipalSignature->id;
            $this->showToast('success', 'Signature Updated Successfully');
            $this->dispatch('closeSignaturePad');
        } else if ($this->signatureType == 'seniorPrincipal') {
            $seniorPrincipalSignature = SeniorPrincipalSignatures::create([
                'signature' => $signature,
            ]);

            $this->homeVisitationForm->update([
                'senior_principal_signature_id' => $seniorPrincipalSignature->id,
            ]);

            $this->homeVisitationFormFields['senior_principal_signature_id'] = $seniorPrincipalSignature->id;
            $this->showToast('success', 'Signature Updated Successfully');
            $this->dispatch('closeSignaturePad');
        }
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
                        $query->where('junior_principal_id', $this->principalID);
                    })->get();
            } else if ($position === 'Senior High School Principal') {
                $this->forms = Forms::with('homeVisitationForm')
                    ->whereHas('homeVisitationForm', function ($query) {
                        $query->where('senior_principal_id', $this->principalID);
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
                'teacher_name' => Teachers::find($validatedData['selectedTeacher'])->name,
            ])->createViolationFormStudents($validatedData['studentsInvolve'], $this->my_id);
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
            $inventory = $student->IndividualInventory;

            $homeVisitationForm = HomeVisitationForms::create([
                'form_id' => $form->id,
                'student_id' => $student->id,
                'reason' => $validatedData['homeVisitationReason'],
                'student_surname' => $student->last_name,
                'student_firstname' => $student->first_name,
                'student_middlename' => $inventory ? $inventory->middle_name : null,
                'student_name' => $student->name,
                'student_no' => null,
                'lrn' => $student->lrn,
                'level_section' => "Grade {$student->getGradeLevel()} Mars",
                'address' => $inventory ? $inventory->address : null,
                'birthday' => $inventory ? $inventory->birthday : null,
                'age' => $inventory ? Carbon::parse($inventory->birthday)->diffInYears(Carbon::now()) : null,
                'father_name' =>  $inventory ? $inventory->father_name : null,
                'father_contact' =>  $inventory ? $inventory->father_contact : null,
                'mother_name' =>  $inventory ? $inventory->mother_name : null,
                'mother_contact' =>  $inventory ? $inventory->mother_contact : null,
                'guardian_name' =>  $inventory ? $inventory->guardian_name : null,
                'guardian_contact' =>  $inventory ? $inventory->guardian_contact : null,
                'parent_id' => $student->parents()->first()->id,
                'junior_principal_id' => 1,
                'senior_principal_id' => 2,
                'parent_name' => $student->parentName(),
                'guidance_name' => Guidance::first()->name,
                'teacher_name' => $form->teacher_name,
                'junior_principal_name' => Principals::find(1)->name,
                'senior_principal_name' => Principals::find(2)->name,
            ]);

            $this->notify(
                $this->my_id,
                $form->teacher->user_account_id,
                "I created Home Visitation Form (HF#{$homeVisitationForm->id}) for {$homeVisitationForm->student_name}",
                'fill-out',
            );
            $this->notify(
                $this->my_id,
                $homeVisitationForm->parent->user_account_id,
                "I created Home Visitation Form (HF#{$homeVisitationForm->id}) for your child {$homeVisitationForm->student_name}",
                'fill-out',
            );
            $this->notify(
                $this->my_id,
                $homeVisitationForm->student->user_account_id,
                "I created Home Visitation Form (HF#{$homeVisitationForm->id}) for you",
                'fill-out',
            );
            $juniorPrincipal = Principals::find(1)->getUserAccount->id;
            $seniorPrincipal = Principals::find(2)->getUserAccount->id;
            $this->notify(
                $this->my_id,
                $juniorPrincipal,
                "I created Home Visitation Form (HF#{$homeVisitationForm->id}) for {$homeVisitationForm->student_name}",
                'fill-out',
            );
            $this->notify(
                $this->my_id,
                $seniorPrincipal,
                "I created Home Visitation Form (HF#{$homeVisitationForm->id}) for {$homeVisitationForm->student_name}",
                'fill-out',
            );
        }
        $this->showToast('success', "{$type} is Created Successfully");
        $this->loadForms();
        $this->resetFields();
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

    public function updateHomeVisitationForm()
    {
        $this->validate([
            'homeVisitationFormFields.student_surname' => 'nullable',
            'homeVisitationFormFields.student_firstname' => 'nullable',
            'homeVisitationFormFields.student_middlename' => 'nullable',
            'homeVisitationFormFields.student_no' => 'nullable',
            'homeVisitationFormFields.lrn' => 'nullable',
            'homeVisitationFormFields.level_section' => 'nullable',
            'homeVisitationFormFields.address' => 'nullable',
            'homeVisitationFormFields.birthday' => 'nullable|date',
            'homeVisitationFormFields.age' => 'nullable',
            'homeVisitationFormFields.father_name' => 'nullable',
            'homeVisitationFormFields.father_contact' => 'nullable',
            'homeVisitationFormFields.mother_name' => 'nullable',
            'homeVisitationFormFields.mother_contact' => 'nullable',
            'homeVisitationFormFields.guardian_name' => 'nullable',
            'homeVisitationFormFields.guardian_contact' => 'nullable',
            'homeVisitationFormFields.visitation_date' => 'nullable|date',
            'homeVisitationFormFields.place' => 'nullable',
            'homeVisitationFormFields.reason' => 'nullable',
            'homeVisitationFormFields.remark' => 'nullable',
            'homeVisitationFormFields.adviser' => 'nullable',
            'homeVisitationFormFields.student_signature_id' => 'nullable',
            'homeVisitationFormFields.parent_signature_id' => 'nullable',
            'homeVisitationFormFields.teacher_signature_id' => 'nullable',
            'homeVisitationFormFields.guidance_signature_id' => 'nullable',
            'homeVisitationFormFields.junior_principal_signature_id' => 'nullable',
            'homeVisitationFormFields.senior_principal_signature_id' => 'nullable',
            'homeVisitationFormFields.parent_name' => 'nullable',
            'homeVisitationFormFields.guidance_name' => 'nullable',
            'homeVisitationFormFields.teacher_name' => 'nullable',
            'homeVisitationFormFields.junior_principal_name' => 'nullable',
            'homeVisitationFormFields.senior_principal_name' => 'nullable',
            'homeVisitationFormFields.student_name' => 'nullable',
        ]);
        $this->homeVisitationForm->update($this->homeVisitationFormFields);
        $this->showToast('success', 'The Home Visitation Form is Updated Successfully');
        $this->dispatch('closeModals');
        $this->resetFields();
    }

    public function updateViolationForm()
    {
        $this->validate([
            'violationFormFields.date' => 'nullable|date',
            'violationFormFields.time' => 'nullable',
            'violationFormFields.student_name' => 'nullable',
            'violationFormFields.level_section' => 'nullable',
            'violationFormFields.age' => 'nullable',
            'violationFormFields.gender' => 'nullable',
            'violationFormFields.birthday' => 'nullable|date',
            'violationFormFields.parent' => 'nullable',
            'violationFormFields.contact' => 'nullable',
            'violationFormFields.address' => 'nullable',
            'violationFormFields.teacher_name' => 'nullable',
            'violationFormFields.offense_type' => 'nullable',
            'violationFormFields.narrative' => 'nullable',
            'violationFormFields.action_taken' => 'nullable',
            'violationFormFields.case_status' => 'nullable',
            'violationFormFields.recommendation' => 'nullable',
            'violationFormFields.student_signature_id' => 'nullable',
        ]);
        $formViolation = $this->violationForm->violationForm;
        $formViolation->update([
            'offense_type' => $this->violationFormFields['offense_type'],
            'date' => $this->violationFormFields['date'],
            'time' => $this->violationFormFields['time'],
            'action_taken' => $this->violationFormFields['action_taken'],
            'case_status' => $this->violationFormFields['case_status'],
            'recommendation' => $this->violationFormFields['recommendation'],
            'teacher_name' => $this->violationFormFields['teacher_name'],
        ]);
        $this->violationForm->update([
            'narrative' => $this->violationFormFields['narrative'],
            'student_signature_id' => $this->violationFormFields['student_signature_id'],
            'student_name' => $this->violationFormFields['student_name'],
            'level_section' => $this->violationFormFields['level_section'],
            'age' => $this->violationFormFields['age'],
            'gender' => $this->violationFormFields['gender'],
            'birthday' => $this->violationFormFields['birthday'],
            'parent' => $this->violationFormFields['parent'],
            'contact' => $this->violationFormFields['contact'],
            'address' => $this->violationFormFields['address'],
        ]);
        $this->showToast('success', 'The Violation Form is Updated Successfully');
        $this->dispatch('closeModals');
        $this->resetFields();
    }


    public function resetFields()
    {
        $this->violationForm = null;
        $this->homeVisitationForm = null;
        $this->violationReason = null;
        $this->homeVisitationReason = null;
        $this->homeVisitationFormFields = array_fill_keys(array_keys($this->homeVisitationFormFields), null);
        $this->violationFormFields = array_fill_keys(array_keys($this->violationFormFields), null);
        $this->dispatch('clearSelections');
    }
}
