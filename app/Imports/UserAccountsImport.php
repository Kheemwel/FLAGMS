<?php

namespace App\Imports;

use App\Mail\AccountCreationMail;
use App\Models\Guidance;
use App\Models\Parents;
use App\Models\Principals;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\UserAccounts;
use App\Traits\Toasts;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use Throwable;

class UserAccountsImport implements ToModel, WithBatchInserts, WithProgressBar
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    use Importable;
    use Toasts;
    public function model(array $row)
    {
        $firstname = $row[0];
        $lastname = $row[1];
        $password = $row[2] ? $row[2] : generatePassword();
        $role_id = $row[3];
        $email = $row[4];

        $user = UserAccounts::create([
            'first_name' => $firstname,
            'last_name' => $lastname,
            'password' => bcrypt($password), // You can hash the password here
            'role_id' => $role_id,
            'email' => $email
        ]);

        if ($user->role === 'Student') {
            $school_level_id = $row[5];
            $grade_level_id = $row[6];
            $lrn = $row[7];
 
            Students::create([
                'user_account_id' => $user->id,
                'school_level_id' => $school_level_id,
                'grade_level_id' => $grade_level_id,
                'lrn' => $lrn
            ]);
        }

        
        if ($user->role === 'Parent') {
            $parent = Parents::create([
                'user_account_id' => $user->id
            ]);
            
            $ids = explode(',', str_replace(' ', '', $row[5]));
            $parent->children()->attach($ids);
        }

        if ($user->role === 'Principal') {
            $position_id = $row[5];
            Principals::create([
                'user_account_id' => $user->id,
                'principal_position_id' => $position_id
            ]);
        }

        
        if ($user->role === 'Teacher') {
            Teachers::create([
                'user_account_id' => $user->id
            ]);
        }

        if ($user->role === 'Guidance') {
            Guidance::create([
                'user_account_id' => $user->id
            ]);
        }

        if ($user->email) {
            try {
                Mail::to($user->email)->send(new AccountCreationMail($user->password));
            } catch (Throwable $th) {
                //
            }
        }
    }

    public function batchSize(): int
    {
        return 1000;
    }
}
