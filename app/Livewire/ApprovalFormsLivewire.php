<?php

namespace App\Livewire;

use App\Events\NewNotification;
use App\Models\Notifications;
use App\Models\RequestForms;
use App\Models\UserAccounts;
use App\Traits\Toasts;
use Livewire\Component;

class ApprovalFormsLivewire extends Component
{
    use Toasts;
    public $pending_requestforms, $approved_requestforms, $disapproved_requestforms, $violationForm, $homeVisitationForm;
    public $selectedRequestFormID, $selectedRequestFormType, $disApprovalReason;
    public $my_id;

    public function mount()
    {
        $this->my_id = session('user_id');
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
            $request->createViolationForm();
        } else if ($this->selectedRequestFormType == 'Home Visitation Form') {
            $users = [
                $request->teacher->user_account_id,
                $request->homeVisitationForm->student->user_account_id,
            ];
            $request->createHomeVisitationForm();
        }

        $this->showToast('success', "Requested $this->selectedRequestFormType is Approved Successfully");
        $this->resetFields();

        $this->notify($request->teacher->user_account_id, "Your requested $request->form_type is approved");

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

        $this->notify($request->teacher->user_account_id, "Your requested $request->form_type is disapproved");
    }

    public function notify($teacher_id, $message)
    {
        Notifications::create([
            'from_user' => $this->my_id,
            'to_user' => $teacher_id,
            'message' => $message,
        ]);
        NewNotification::dispatch();
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
