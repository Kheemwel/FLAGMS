<?php

namespace App\Exports;

use App\Models\AuditLogs;
use Maatwebsite\Excel\Concerns\FromCollection;

class AuditLogsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return UserAccounts::all();
        $model = AuditLogs::select(
            'id',
            'user_account_id',
            'action',
            'description',
            'created_at',
        )->get();

        $selectedAttributes = [];
        foreach ($model->toArray() as $value) {
            $selectedAttributes[] = array_intersect_key($value, array_flip(['id', 'user_name', 'action', 'description', 'created_at']));
        }

        return collect($selectedAttributes);
    }
}
