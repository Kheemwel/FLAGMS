<?php

use App\Models\Privileges;
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
        Schema::create('privileges', function (Blueprint $table) {
            $table->id();
            $table->string('privilege')->unique();
            $table->boolean('is_exclusive')->default(false);
            $table->timestamps();
        });

        Privileges::insert([
            [
                'privilege' => 'AddAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'AddGuidanceAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'AddGuidanceProgram',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'AddLostAndFound',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'AddParentAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'AddPrincipalAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'AddStudentAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'AddTeacherAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ArchiveAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ArchiveGuidanceAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ArchiveParentAcccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ArchivePrincipalAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ArchiveStudentAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ArchiveTeacherAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'DeleteAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'DeleteGuidanceAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'DeleteGuidanceProgram',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'DeleteLostAndFound',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'DeleteParentAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'DeletePrincipalAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'DeleteStudentAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'DeleteTeacherAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'EditAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'EditGuidanceAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'EditGuidanceProgram',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'EditLostAndFound',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'EditParentAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'EditPrincipalAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'EditStudentAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'EditTeacherAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ExportAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ExportGuidanceAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ExportParentAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ExportPrincipalAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ExportStudentAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ExportTeacherAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'FillOutForms',
                'is_exclusive' => 1
            ],
            [
                'privilege' => 'ParentAnecdotalSignature',
                'is_exclusive' => 1
            ],
            [
                'privilege' => 'ApproveForm',
                'is_exclusive' => 1
            ],
            [
                'privilege' => 'ParentPrivileges',
                'is_exclusive' => 1
            ],
            [
                'privilege' => 'RequestForm',
                'is_exclusive' => 1
            ],
            [
                'privilege' => 'StudentAnecdotalSignature',
                'is_exclusive' => 1
            ],
            [
                'privilege' => 'StudentPrivileges',
                'is_exclusive' => 1
            ],
            [
                'privilege' => 'ViewAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ViewGuidanceAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ViewOnlyFoundtItems',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ViewParentAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ViewPrincipalAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ManageDatabase',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ManageRoles',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ManageWebsiteContent',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ManageExpiredItems',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ManageClaimedItems',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ViewStudentAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ViewStudentsAnecdotal',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ViewStudentSummary',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ViewTeacherAccounts',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'WriteStudentsAnecdotal',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'ModifyStudentsAnecdotal',
                'is_exclusive' => 0
            ],
            [
                'privilege' => 'CreateForms',
                'is_exclusive' => 1
            ],
            [
                'privilege' => 'ViewStudentsInventory',
                'is_exclusive' => 0,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privileges');
    }
};
