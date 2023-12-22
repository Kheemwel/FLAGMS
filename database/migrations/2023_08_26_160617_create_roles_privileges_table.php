<?php

use App\Models\Roles;
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
        Schema::create('roles_privileges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('privilege_id');
            $table->foreign('role_id')->references('id')->on('roles')->cascadeOnDelete();
            $table->foreign('privilege_id')->references('id')->on('privileges')->cascadeOnDelete();
            $table->timestamps();
        });

        $guidance = Roles::create([
            'role' => 'Guidance',
            'is_default' => true
        ]);
        $guidance->privileges()->attach([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26,
        27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 42, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61]);
     
        $student = Roles::create([
            'role' => 'Student',
            'is_default' => true
        ]);
        $student->privileges()->attach([37, 42, 43, 46]);

        $parent = Roles::create([
            'role' => 'Parent',
            'is_default' => true
        ]);
        $parent->privileges()->attach([37, 38, 40, 46]);

        $teacher = Roles::create([
            'role' => 'Teacher',
            'is_default' => true
        ]);
        $teacher->privileges()->attach([5, 7, 11, 13, 19, 21, 27, 29, 33, 35, 37, 41, 46, 47, 54, 55, 58, 59]);

        $principal = Roles::create([
            'role' => 'Principal',
            'is_default' => true
        ]);
        $principal->privileges()->attach([37, 46]);
        
        $admin = Roles::create([
            'role' => 'Admin',
            'is_default' => false
        ]);
        $admin->privileges()->attach([1, 2, 9, 10, 15, 16, 23, 24, 31, 32, 44, 45, 49, 50, 51]);

        $superAdmin = Roles::create([
            'role' => 'SuperAdmin',
            'is_default' => false
        ]);
        $superAdmin->privileges()->attach([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26,
        27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 38, 42, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 61]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles_privileges');
    }
};
