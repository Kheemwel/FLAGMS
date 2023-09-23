<?php

namespace App\Imports;

use App\Mail\AccountCreationMail;
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
        $username = $this->checkUsername($row[2], $row[0], $row[1]);
        $password = $row[3] ? $row[3] : generatePassword();
        $user = new UserAccounts([
            'first_name' => $row[0],
            'last_name' => $row[1],
            'username' => $username,
            'password' => $password,
            'hashed_password' => bcrypt($password), // You can hash the password here
            'role_id' => $row[4],
            'email' => $row[5]
        ]);

        if ($user->email) {
            try {
                Mail::to($user->email)->send(new AccountCreationMail($user->username, $user->password));
            } catch (Throwable $th) {
                //
            }
        }
        return $user;
    }

    public function checkUsername($username, $firstname, $lastname)
    {
        $valid_username = $username ? $username : generateUsername($firstname, $lastname);
        while(UserAccounts::where('username', $valid_username)->exists()) {
            $valid_username = generateUsername($firstname, $lastname);
        }
        return $valid_username;
    }

    public function batchSize(): int
    {
        return 1000;
    }
}
