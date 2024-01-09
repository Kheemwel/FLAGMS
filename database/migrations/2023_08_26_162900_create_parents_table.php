<?php

use App\Models\Parents;
use App\Models\Students;
use App\Models\UserAccounts;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_account_id');
            $table->foreign('user_account_id')->references('id')->on('user_accounts')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('parent_and_child', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('student_id');
            $table->foreign('parent_id')->references('id')->on('parents')->cascadeOnDelete();
            $table->foreign('student_id')->references('id')->on('students')->cascadeOnDelete();
            $table->timestamps();
        });

        $student1 = UserAccounts::create([
            'first_name' => 'Anne',
            'last_name' => 'Lopez',
            'password' => bcrypt('test'),
            'email' => 'student1@email.com',
            'role_id' => 2,
        ]);

        $stud1 = Students::create([
            'user_account_id' => $student1->id,
            'school_level_id' => 1,
            'grade_level_id' => 1,
            'lrn' => '123456789000',
        ]);

        $student2 = UserAccounts::create([
            'first_name' => 'Val',
            'last_name' => 'Cruz',
            'password' => bcrypt('test'),
            'email' => 'student2@email.com',
            'role_id' => 2,
        ]);

        $stud2 = Students::create([
            'user_account_id' => $student2->id,
            'school_level_id' => 2,
            'grade_level_id' => 5,
            'lrn' => '123456789001',
        ]);

        $student3 = UserAccounts::create([
            'first_name' => 'Mark',
            'last_name' => 'Lopez',
            'password' => bcrypt('test'),
            'email' => 'student3@email.com',
            'role_id' => 2,
        ]);

        $stud3 = Students::create([
            'user_account_id' => $student3->id,
            'school_level_id' => 1,
            'grade_level_id' => 4,
            'lrn' => '123456789002',
        ]);

        $parent1 = UserAccounts::create([
            'first_name' => 'Emilio',
            'last_name' => 'Lopez',
            'password' => bcrypt('test'),
            'email' => 'parent1@email.com',
            'role_id' => 3,
        ]);

        $pr1 = Parents::create([
            'user_account_id' => $parent1->id
        ]);
        $pr1->children()->attach([$stud1->id, $stud3->id]);

        $parent2 = UserAccounts::create([
            'first_name' => 'Fatima',
            'last_name' => 'Cruz',
            'password' => bcrypt('test'),
            'email' => 'parent2@email.com',
            'role_id' => 3,
        ]);

        $pr2 = Parents::create([
            'user_account_id' => $parent2->id
        ]);
        $pr2->children()->attach([$stud2->id]);

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_and_child');
        Schema::dropIfExists('parents');
    }
};
