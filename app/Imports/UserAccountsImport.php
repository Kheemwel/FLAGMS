<?php

namespace App\Imports;

use App\Models\UserAccounts;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithProgressBar;

class UserAccountsImport implements ToModel, WithBatchInserts, WithProgressBar
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    use Importable;
    public function model(array $row)
    {
        $username = $row[2] ? $row[2] : generateUsername($row[0], $row[1]);
        $password = $row[3] ? $row[3] : generatePassword();
        return new UserAccounts([
            'first_name' => $row[0],
            'last_name' => $row[1],
            'username' => $username,
            'password' => $password,
            'hashed_password' => bcrypt($password), // You can hash the password here
            'role_id' => $row[4]
        ]);
    }
    public function batchSize(): int
    {
        return 1000;
    }
}
