<?php

namespace App\Livewire;

use App\Events\NewNotification;
use App\Models\Forms;
use App\Models\Guidance;
use App\Models\HomeVisitationForms;
use App\Models\Notifications;
use App\Models\Parents;
use App\Models\Principals;
use App\Models\RequestForms;
use App\Models\Students;
use App\Models\UserAccounts;
use App\Traits\Notify;
use App\Traits\Toasts;
use Carbon\Carbon;
use Livewire\Component;

class ApprovalFormsLivewire extends Component
{
    use Toasts;
    use Notify;
    public $pending_requestforms, $approved_requestforms, $disapproved_requestforms, $violationForm, $homeVisitationForm;
    public $selectedRequestFormID, $selectedRequestFormType, $disApprovalReason;
    public $my_id, $guidanceID;

    public function mount()
    {
        $this->my_id = session('user_id');
        $this->guidanceID = UserAccounts::find($this->my_id)->hasGuidance->id;
    }

    public function render()
    {
        $this->pending_requestforms = RequestForms::where('status', 'pending')
            ->oldest()->get();
        $this->approved_requestforms = RequestForms::where('status', 'approved')
            ->latest()->get();
        $this->disapproved_requestforms = RequestForms::where('status', 'disapproved')
            ->latest()->get();
        return view('livewire.approval_forms.approval-forms-livewire');
    }

    public function read($type, $id)
    {
        $this->selectedRequestFormID = $id;
        $this->selectedRequestFormType = $type;
        if ($type == 'Violation Form') {
            $requestForm = RequestForms::where('id', $id)->where('form_type', $type)->first();
            $this->violationForm = $requestForm->violationForm;
        } else if ($type == 'Home Visitation Form') {
            $requestForm = RequestForms::where('id', $id)->where('form_type', $type)->first();
            $this->homeVisitationForm = $requestForm->homeVisitationForm;
        }
    }

    public function approveRequest()
    {
        $request = RequestForms::find($this->selectedRequestFormID);
        $request->update([
            'is_approve' => true
        ]);

        $users = [];
        if ($this->selectedRequestFormType == 'Violation Form') {
            $users = [
                $request->teacher->user_account_id,
                ...$request->violationForm->students->pluck('user_account_id')->toArray(),
            ];
            // $request->createViolationForm();
        } else if ($this->selectedRequestFormType == 'Home Visitation Form') {
            $users = [
                $request->teacher->user_account_id,
                $request->homeVisitationForm->student->user_account_id,
            ];
            $form = Forms::create([
                'guidance_id' => $this->guidanceID,
                'teacher_id' => $request->teacher_id,
                'form_type' => $request->form_type,
            ]);

            $student = Students::find($request->homeVisitationForm->student_id);
            $inventory = $student->IndividualInventory;

            $homeVisitationForm = HomeVisitationForms::create([
                'form_id' => $form->id,
                'student_id' => $student->id,
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
        }

        $this->showToast('success', "Requested $this->selectedRequestFormType is Approved Successfully");
        $this->resetFields();


        $requestID = $request->form_type == 'Violation Form' ? "VF#{$request->id}" : "RF#{$request->id}";
        $this->notify(
            $this->my_id,
            $request->teacher->user_account_id,
            "Your requested $request->form_type ($requestID) is approved",
            'request',
        );
        $this->notify(
            $this->my_id,
            $request->teacher->user_account_id,
            "I created Home Visitation Form (HF#{$homeVisitationForm->id}) for {$homeVisitationForm->student_name}",
            'fill-out',
        );
        $studentUserID = Students::find($homeVisitationForm->student_id)->getUserAccount->id;
        $parentUserID = Parents::find($homeVisitationForm->parent_id)->getUserAccount->id;
        $this->notify(
            $this->my_id,
            $parentUserID,
            "I created Home Visitation Form (HF#{$homeVisitationForm->id}) for your child {$homeVisitationForm->student_name}",
            'fill-out',
        );
        $this->notify(
            $this->my_id,
            $studentUserID,
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

        redirect()->route('guidance-program-page', ['private_schedule' => [
            'users' => $users,
        ]]);
    }

    public function disApproveRequest()
    {
        $validateData = $this->validate([
            'disApprovalReason' => 'required|string'
        ]);

        $request = RequestForms::find($this->selectedRequestFormID);
        $request->update([
            'disapproval_reason' => $validateData['disApprovalReason'],
        ]);


        $this->showToast('success', "Requested Home Visitation Form is Disapproved Successfully");
        $this->resetFields();

        $requestID = $request->form_type == 'Violation Form' ? "VF#{$request->id}" : "RF#{$request->id}";
        $this->notify(
            $this->my_id,
            $request->teacher->user_account_id,
            "Your requested $request->form_type ($requestID) is disapproved",
            'request',
        );
    }

    public function resetFields()
    {
        $this->violationForm = null;
        $this->homeVisitationForm = null;
        $this->selectedRequestFormID = null;
        $this->disApprovalReason = null;
        $this->resetErrorBag();
        $this->dispatch('closeModals');
    }
}
