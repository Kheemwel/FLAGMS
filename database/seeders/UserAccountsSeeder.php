<?php

namespace Database\Seeders;

use App\Models\UserAccounts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Testing\Fakes\Fake;

class UserAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $password = Str::random(10);
        // DB::table('user_accounts')->insert([
        //     'username' => Str::random(10),
        //     'role_id' => 1,
        //     'first_name' => Str::random(10),
        //     'last_name' => Str::random(10),
        //     'password' => $password,
        //     'hashed_password' => bcrypt($password),
        //     'profile_picture_id' => 22,
        // ]);
        UserAccounts::factory()->count(5)->create();
    }
}
