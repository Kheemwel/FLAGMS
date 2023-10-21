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
        UserAccounts::factory()->count(5)->create();
    }
}
