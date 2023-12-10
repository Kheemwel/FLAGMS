<?php

namespace App\Exports;

use App\Models\UserAccounts;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersAccountsExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return UserAccounts::all();
        $model = UserAccounts::select(
            'id',
            'first_name',
            'last_name',
            'email',
            'role_id',
        )
            ->where('is_archive', false)
            ->orderBy('id', 'asc')
            ->get();

        $selectedAttributes = [];
        foreach ($model->toArray() as $value) {
            $selectedAttributes[] = array_intersect_key($value, array_flip(['id', 'first_name', 'last_name', 'email', 'role']));
        }

        return collect($selectedAttributes);
    }
}
