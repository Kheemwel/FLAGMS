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
        return UserAccounts::join('roles', 'user_accounts.role_id', '=', 'roles.id')
        ->select(
            'user_accounts.id','user_accounts.first_name', 'user_accounts.last_name', 'user_accounts.password', 
            'user_accounts.email', 'roles.role as role'
            )
        ->where('is_archive', false)
        ->orderBy('id', 'asc')
        ->get();
    }
}
