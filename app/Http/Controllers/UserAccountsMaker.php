<?php

namespace App\Http\Controllers;

use App\Models\GradeLevels;
use App\Models\GradeSchoolLevels;
use App\Models\Parents;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\UserAccounts;

class UserAccountsMaker extends Controller
{
    public static function createAdmins($count)
    {
        $model = [];
        for ($i = 1; $i <= $count; $i++) {
            $password = fake()->password;
            $model[] = [
                'role_id' => rand(6, 7),
                'first_name' => fake()->firstName,
                'last_name' => fake()->lastName,
                'password' => bcrypt($password),
                'email' => fake()->email
            ];
        }
        foreach ($model as $entry) {
            echo (UserAccounts::create($entry) ? 'SUCCESS: ' : 'FAILED: ') . implode(',', $entry) . '<br>';
        }
    }
    public static function createStudents($count)
    {
        $model = [];
        $grade_school_levels = GradeSchoolLevels::select('grade_level_id', 'school_level_id')->get()->toArray();
        for ($i = 1; $i <= $count; $i++) {
            $password = fake()->password;
            $model[] = [
                'role_id' => 2,
                'first_name' => fake()->firstName,
                'last_name' => fake()->lastName,
                'password' => bcrypt($password),
                'email' => fake()->email
            ];
        }
        foreach ($model as $entry) {
            $user = UserAccounts::create($entry);
            echo ($user ? 'SUCCESS: ' : 'FAILED: ') . implode(',', $entry) . '<br>';

            $randID = array_rand($grade_school_levels);
            $student = [
                'user_account_id' => $user->id,
                'school_level_id' => $grade_school_levels[$randID]['school_level_id'],
                'grade_level_id' => $grade_school_levels[$randID]['grade_level_id'],
                'lrn' => mt_rand(100000000000, 299999999999),
            ];
            echo (Students::create($student) ? 'SUCCESS: ' : 'FAILED: ') . implode(',', $student) . '<br><br>';
        }
    }

    public static function createParents($count)
    {
        $model = [];
        $students = Students::pluck('id')->toArray();
        for ($i = 1; $i <= $count; $i++) {
            $password = fake()->password;
            $model[] = [
                'role_id' => 3,
                'first_name' => fake()->firstName,
                'last_name' => fake()->lastName,
                'password' => bcrypt($password),
                'email' => fake()->email
            ];
        }
        foreach ($model as $entry) {
            $user = UserAccounts::create($entry);
            echo ($user ? 'SUCCESS: ' : 'FAILED: ') . implode(',', $entry) . '<br>';

            $parent = Parents::create([
                'user_account_id' => $user->id
            ]);
            $id = $students[array_rand($students)];
            $parent->children()->attach($id);
            echo ($parent ? 'SUCCESS: ' : 'FAILED: ') . "Child: $id" . '<br><br>';
        }
    }

    public static function createTeachers($count)
    {
        $model = [];
        for ($i = 1; $i <= $count; $i++) {
            $password = fake()->password;
            $model[] = [
                'role_id' => 4,
                'first_name' => fake()->firstName,
                'last_name' => fake()->lastName,
                'password' => bcrypt($password),
                'email' => fake()->email
            ];
        }
        foreach ($model as $entry) {
            $user = UserAccounts::create($entry);
            echo ($user ? 'SUCCESS: ' : 'FAILED: ') . implode(',', $entry) . '<br>';

            $teacher = Teachers::create([
                'user_account_id' => $user->id
            ]);
            echo ($teacher ? 'SUCCESS: ' : 'FAILED: ') . '<br><br>';
        }
    }
}
