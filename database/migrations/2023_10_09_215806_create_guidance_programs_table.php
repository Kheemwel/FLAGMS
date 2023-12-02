<?php

use App\Models\CalendarColors;
use App\Models\GuidanceScheduleTags;
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
        Schema::create('guidance_schedule_tags', function (Blueprint $table) {
            $table->id();
            $table->string('tag_name')->unique();
            $table->string('color')->unique();
            $table->timestamps();
        });

        GuidanceScheduleTags::insert([
            [
                'tag_name' => 'Events',
                'color' => '#6256AC'
            ],
            [
                'tag_name' => 'Home Visitation',
                'color' => '#05ADC7'
            ],
            [
                'tag_name' => 'Student Violation Meeting',
                'color' => '#FA4481'
            ],
            [
                'tag_name' => 'Holidays',
                'color' => '#3C58FF'
            ],
            [
                'tag_name' => 'Drill',
                'color' => '#FC993E'
            ]
        ]);

        Schema::create('guidance_programs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->dateTime('program_start');
            $table->dateTime('program_end');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('schedule_tag_id');
            $table->boolean('is_public')->default(true);
            $table->foreign('schedule_tag_id')->references('id')->on('guidance_schedule_tags')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('guidance_private_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guidance_program_id');
            $table->unsignedBigInteger('user_account_id');
            $table->foreign('guidance_program_id')->references('id')->on('guidance_programs')->cascadeOnDelete();
            $table->foreign('user_account_id')->references('id')->on('user_accounts')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guidance_private_schedules');
        Schema::dropIfExists('guidance_programs');
        Schema::dropIfExists('guidance_schedule_tags');
    }
};
