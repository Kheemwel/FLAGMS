<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_violation_signatures', function (Blueprint $table) {
            $table->id();
            $table->binary('signature');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE student_violation_signatures MODIFY signature MEDIUMBLOB");

        Schema::create('student_home_visitation_signatures', function (Blueprint $table) {
            $table->id();
            $table->binary('signature');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE student_home_visitation_signatures MODIFY signature MEDIUMBLOB");

        Schema::create('parent_form_signatures', function (Blueprint $table) {
            $table->id();
            $table->binary('signature');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE parent_form_signatures MODIFY signature MEDIUMBLOB");

        Schema::create('teacher_form_signatures', function (Blueprint $table) {
            $table->id();
            $table->binary('signature');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE teacher_form_signatures MODIFY signature MEDIUMBLOB");

        Schema::create('guidance_form_signatures', function (Blueprint $table) {
            $table->id();
            $table->binary('signature');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE guidance_form_signatures MODIFY signature MEDIUMBLOB");

        Schema::create('junior_principal_signatures', function (Blueprint $table) {
            $table->id();
            $table->binary('signature');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE junior_principal_signatures MODIFY signature MEDIUMBLOB");

        Schema::create('senior_principal_signatures', function (Blueprint $table) {
            $table->id();
            $table->binary('signature');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE senior_principal_signatures MODIFY signature MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('senior_principal_signatures');
        Schema::dropIfExists('junior_principal_signatures');
        Schema::dropIfExists('guidance_form_signatures');
        Schema::dropIfExists('teacher_form_signatures');
        Schema::dropIfExists('parent_form_signatures');
        Schema::dropIfExists('student_home_visitation_signatures');
        Schema::dropIfExists('student_violation_signatures');
    }
};
