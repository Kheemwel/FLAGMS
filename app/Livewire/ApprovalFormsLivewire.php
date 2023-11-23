<?php

namespace App\Livewire;

use App\Models\RequestForms;
use App\Traits\Toasts;
use Livewire\Component;

class ApprovalFormsLivewire extends Component
{
    use Toasts;
    public $requestforms, $violationForm, $homeVisitationForm;

    public function render()
    {
        $this->requestforms = RequestForms::orderBy('is_approve', 'asc')->oldest()->get();
        return view('livewire.approval_forms.approval-forms-livewire');
    }

    public function read($type, $id)
    {
        if ($type == 'Violation Form') {
            $this->violationForm = RequestForms::where('id', $id)->where('form_type', $type)->first()->violationForm;
        } else if ($type == 'Home Visitation Form') {
            $this->homeVisitationForm = RequestForms::where('id', $id)->where('form_type', $type)->first()->homeVisitationForm;
        }
    }

    public function approveViolationForm()    
    {
        $this->violationForm->requestForm->is_approve = true;
        $this->violationForm->requestForm->save();
        $this->violationForm->requestForm->createViolationForm();
        $this->showToast('success', "Requested Violation Form is Approved Successfully");
    }

    public function approveHomeVisitationForm()
    {
        $this->homeVisitationForm->requestForm->is_approve = true;
        $this->homeVisitationForm->requestForm->save();
        $this->homeVisitationForm->requestForm->createHomeVisitationForm();
        $this->showToast('success', "Requested Home Visitation Form is Approved Successfully");
    }

    public function resetFields()
    {
        $this->violationForm = null;
        $this->homeVisitationForm = null;
        $this->resetErrorBag();
    }
}
