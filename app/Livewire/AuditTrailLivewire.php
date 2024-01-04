<?php

namespace App\Livewire;

use App\Exports\AuditLogsExport;
use App\Models\AuditLogs;
use App\Traits\Toasts;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class AuditTrailLivewire extends Component
{
    use Toasts;
    public $audits;
    public function render()
    {
        $this->audits = AuditLogs::latest()->get();
        $this->dispatch('refreshSelectedRows', $this->audits);
        return view('livewire.audit-trail.audit-trail-livewire');
    }

    public function deleteLog($id)
    {
        AuditLogs::find($id)->delete();
        $this->showToast('success', 'The Audit Log is Successfully Deleted');
    }

    public function export()
    {  
        return Excel::download(new AuditLogsExport, 'flagms_audit_logs.xlsx');
    }

    
    public function deleteSelected($ids)
    {
        $user = AuditLogs::whereIn('id', $ids)->delete();
        $this->showToast('success', 'Selected Audit Logs Are Deleted Successfully');
    }
}
