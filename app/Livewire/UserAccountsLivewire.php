<?php

namespace App\Livewire;

use App\Exports\UsersAccountsExport;
use App\Imports\UserAccountsImport;
use App\Mail\AccountCreationMail;
use App\Models\AuditLogs;
use App\Models\GradeLevels;
use App\Models\Guidance;
use App\Models\Parents;
use App\Models\PrincipalPositions;
use App\Models\Principals;
use App\Models\ProfilePictures;
use App\Models\Roles;
use App\Models\SchoolLevels;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\UserAccounts;
use App\Traits\SortTable;
use App\Traits\Toasts;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

class UserAccountsLivewire extends Component
{
    use Toasts;
    use SortTable;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $user_id, $name, $first_name, $last_name, $password, $email;
    public $roles, $role_id, $role;
    public $profile_picture_id, $profile_picture;
    public $school_levels, $grade_levels, $school_level, $grade_level, $lrn;
    public $principal_positions, $principal_position;
    public $students, $selectedStudents;
    public $parents, $children;
    public $total_login, $last_login, $user_is_archive;
    public $batch_file, $file_name;
    public $search = '', $filterRole;
    public $per_page = 30;
    public $my_id;
    public $privileges = [];

    public $allowedRoles = [];
    public $users, $archived_users;
    public function mount()
    {
        $this->school_levels = SchoolLevels::select('school_level')->get();
        $this->grade_levels = GradeLevels::all();

        $this->principal_positions = PrincipalPositions::select('position')->get();

        $this->my_id = session('user_id');
        if ($this->my_id) {
            $user = UserAccounts::find($this->my_id);
            $this->privileges = $user->Roles->privileges()->pluck('privilege')->toArray();
        }

        if (in_array('ViewGuidanceAccounts', $this->privileges)) {
            $this->allowedRoles[] = 'Guidance';
        }
        if (in_array('ViewStudentAccounts', $this->privileges)) {
            $this->allowedRoles[] = 'Student';
        }
        if (in_array('ViewParentAccounts', $this->privileges)) {
            $this->allowedRoles[] = 'Parent';
        }
        if (in_array('ViewTeacherAccounts', $this->privileges)) {
            $this->allowedRoles[] = 'Teacher';
        }
        if (in_array('ViewPrincipalAccounts', $this->privileges)) {
            $this->allowedRoles[] = 'Principal';
        }
        if (in_array('ViewAccounts', $this->privileges)) {
            $this->allowedRoles = Roles::get()->pluck('role')->toArray();
        }

        $this->roles = Roles::whereIn('role', $this->allowedRoles)->select('id', 'role')->get();

        $this->loadAccounts();
        $this->loadStudents();
    }

    public function render()
    {
        return view('livewire.user_accounts.user-accounts-livewire',);
    }

    public function loadAccounts()
    {
        $query_normal = UserAccounts::with('Roles')->where('is_archive', false);
        $query_archives = UserAccounts::with('Roles')->where('is_archive', true);

        if (!empty($this->allowedRoles)) {
            $query_normal->whereHas('Roles', function ($sub) {
                $sub->whereIn('role', $this->allowedRoles);
            });
            $query_archives->whereHas('Roles', function ($sub) {
                $sub->whereIn('role', $this->allowedRoles);
            });
        }

        $this->users = $query_normal->orderBy('id', 'asc')->get();
        $this->archived_users = $query_archives->orderBy('id', 'asc')->get();
        $this->dispatch('refreshSelectedRows', $this->users, $this->archived_users, $this->students);
    }

    public function loadStudents()
    {
        $this->students = Students::whereHas('getUserAccount', function ($query) {
            // Filter students where the associated user account is not archived
            $query->where('is_archive', false);
        })->get();

        $this->dispatch('loadStudents', $this->students);
    }

    public function updatedBatchFile($file)
    {
        $this->file_name = $this->batch_file->getClientOriginalName();
    }

    public function import()
    {
        $this->validate([
            'batch_file' => 'required|file|mimes:csv|max:10240',
        ], [
            'batch_file.required' => 'You must upload a file before submitting.',
            'batch_file.mimes' => 'The file must be in .csv format.',
            'batch_file.max' => 'The file must be at least 10MB.'
        ]);

        try {
            Excel::import(new UserAccountsImport, $this->batch_file);

            // Add any additional logic or feedback messages here
            $this->showToast('success', 'Users Are Added Successfully');
            $this->loadAccounts();
            $this->loadStudents();

            AuditLogs::create([
                'user_account_id' => $this->my_id,
                'action' => 'Import',
                'description' => 'The user successfully imported a user accounts record',
            ]);

        } catch (Throwable $th) {
            Log::error($th->getMessage());
            $this->showToast('error', 'Failed to import user accounts');
        }

        // Clear the file input field
        $this->batch_file = null;
        $this->file_name = null;
    }

    public function export()
    {
        AuditLogs::create([
            'user_account_id' => $this->my_id,
            'action' => 'Export',
            'description' => 'The user exported the user accounts record',
        ]);

        return Excel::download(new UsersAccountsExport, 'user_accounts.xlsx');
    }

    public function store($anotherRule): UserAccounts
    {
        $rules = [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'password' => 'required|max:255',
            'role' => 'required|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'email' => 'required|email|unique:user_accounts,email|max:255'
        ];

        $customMessages = [
            'profile_picture.image' => 'The profile picture must be an image file.',
            'profile_picture.mimes' => 'The profile picture must be in JPEG, PNG, or JPG format.',
            'profile_picture.max' => 'The profile picture may not be greater than 1MB.'
        ];

        $validatedData = $this->validate($rules + $anotherRule, $customMessages);
        $validatedData['hashed_password'] = Hash::make($validatedData['password']);

        $role_id = Roles::where('role', $this->role)->first();


        $profile_picture_id = null;
        if ($this->profile_picture) {
            $profileImageContent = file_get_contents($this->profile_picture->getRealPath());

            $newProfile = ProfilePictures::create([
                'profile_picture' => $profileImageContent
            ]);

            $profile_picture_id = $newProfile->id;
        }

        try {
            $user = UserAccounts::create([
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'password' => $validatedData['hashed_password'],
                'role_id' => $role_id->id,
                'profile_picture_id' => $profile_picture_id,
                'email' => $validatedData['email']
            ]);

            AuditLogs::create([
                'user_account_id' => $this->my_id,
                'action' => 'Add',
                'description' => "The user add a new {$user->role} user with ID#{$user->id}",
            ]);

            if ($user->email) {
                try {
                    Mail::to($user->email)->send(new AccountCreationMail($validatedData['password']));
                } catch (Throwable $th) {
                    Log::error($th->getMessage());
                    $this->showToast('error', 'Failed to Send User Credentials to Email');
                }
            }

        } catch (Throwable $th) {
            Log::error($th->getMessage());
            $this->showToast('error', 'Failed to Add User');
        }

        $this->loadAccounts();
        return $user;
    }

    // For Other Roles
    public function addUser()
    {
        $user = $this->store([]);
        if ($user) {
            $this->showToast('success', 'User Added Successfully');
            $this->resetInputFields();
        }
    }

    public function addStudent($schoolLevel, $gradeLevel)
    {
        $this->school_level = $schoolLevel;
        $this->grade_level = $gradeLevel;
        $rules = [
            'school_level' => 'required',
            'grade_level' => 'required',
            'lrn' => 'required|unique:students,lrn|min:12|max:12'
        ];

        $user = $this->store($rules);

        if ($user) {
            $school_level_id = SchoolLevels::where('school_level', $this->school_level)->first()->id;
            $grade_level_id = GradeLevels::where('grade_level', $this->grade_level)->first()->id;

            try {
                Students::create([
                    'user_account_id' => $user->id,
                    'school_level_id' => $school_level_id,
                    'grade_level_id' => $grade_level_id,
                    'lrn' => $this->lrn,
                ]);
            } catch (Throwable $th) {
                Log::error($th->getMessage());
                $this->showToast('error', 'Failed to Add Student');
            }
            $this->showToast('success', 'Student Added Successfully');
            $this->loadStudents();
            $this->resetInputFields();
        }
    }

    public function addParent($selectedStudents)
    {
        $this->selectedStudents = $selectedStudents;
        $rules = [
            'selectedStudents' => 'required|array|min:1'
        ];
        $user = $this->store($rules);
        if ($user) {
            $parent = Parents::create([
                'user_account_id' => $user->id
            ]);

            $parent->children()->attach($this->selectedStudents);

            $this->showToast('success', 'Parent Added Successfully');
            $this->resetInputFields();
        }
    }

    public function addPrincipal()
    {
        $rules = [
            'principal_position' => 'required'
        ];

        $user = $this->store($rules);

        if ($user) {
            $position = PrincipalPositions::where('position', $this->principal_position)->first();
            Principals::create([
                'user_account_id' => $user->id,
                'principal_position_id' => $position->id
            ]);
            $this->showToast('success', 'Principal Added Successfully');
            $this->resetInputFields();
        }
    }

    public function addGuidance()
    {
        $user = $this->store([]);
        if ($user) {
            Guidance::create([
                'user_account_id' => $user->id
            ]);
            $this->showToast('success', 'Guidance Associate Added Successfully');
            $this->resetInputFields();
        }
    }

    public function addTeacher()
    {
        $user = $this->store([]);
        if ($user) {
            Teachers::create([
                'user_account_id' => $user->id
            ]);
            $this->showToast('success', 'Teacher Added Successfully');
            $this->resetInputFields();
        }
    }

    public function update()
    {
        $rules = [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'password' => 'required|max:255',
            'role_id' => 'required|integer',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'email' => 'required|email|unique:user_accounts,email,' . $this->user_id . '|max:255'
        ];

        $customMessages = [
            'profile_picture.image' => 'The profile picture must be an image file.',
            'profile_picture.mimes' => 'The profile picture must be in JPEG, PNG, or JPG format.',
            'profile_picture.max' => 'The profile picture may not be greater than 1MB.',
        ];

        $validatedData = $this->validate($rules, $customMessages);
        $validatedData['hashed_password'] = Hash::make($validatedData['password']);

        $role_id = Roles::find($this->role_id);

        $user = UserAccounts::find($this->user_id);

        if ($this->profile_picture) {
            $profileImageContent = file_get_contents($this->profile_picture->getRealPath());

            // Create a new profile picture record
            if ($this->profile_picture_id) {
                $newProfile = ProfilePictures::find($this->profile_picture_id)->update([
                    'profile_picture' => $profileImageContent
                ]);
            } else {
                $newProfile = ProfilePictures::create([
                    'profile_picture' => $profileImageContent
                ]);
                $this->profile_picture_id = $newProfile->id;
            }
        }

        $user->update([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['hashed_password'],
            'role_id' => $role_id->id,
            'profile_picture_id' => $this->profile_picture_id
        ]);

        
        AuditLogs::create([
            'user_account_id' => $this->my_id,
            'action' => 'Update',
            'description' => "The user update the user with ID#{$user->id}",
        ]);


        $this->showToast('success', 'User Updated Successfully');
        $this->dispatch('closeModals');
        $this->resetInputFields();
        $this->loadAccounts();
    }

    public function resetInputFields()
    {
        $this->first_name = null;
        $this->last_name = null;
        $this->password = null;
        $this->role = null;
        $this->profile_picture = null;
        $this->email = null;
        $this->user_is_archive = null;
        $this->school_level = null;
        $this->grade_level = null;
        $this->lrn = null;
        $this->principal_position = null;
        $this->selectedStudents = null;
        $this->batch_file = null;
        $this->resetErrorBag();
    }

    public function get_data($id)
    {
        $user = UserAccounts::find($id);
        $this->user_id = $user->id;
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role_id = $user->role_id;
        $this->role = $user->role;
        $this->profile_picture_id = $user->profile_picture_id;
        $this->total_login = $user->total_login;
        $this->last_login = $user->last_login;
        $this->user_is_archive = $user->is_archive;

        
        AuditLogs::create([
            'user_account_id' => $this->my_id,
            'action' => 'View',
            'description' => "The user view the user with ID#{$user->id} info",
        ]);


        if ($this->role == 'Student') {
            $student = Students::where('user_account_id', $this->user_id)->first();
            $this->parents = $student->parents;
            $this->lrn = $student->lrn;

            if ($student) {
                $this->school_level = $student->schoolLevel->school_level;
                $this->grade_level = $student->gradeLevel->grade_level;
            }
        }
        if ($this->role == 'Principal') {
            $principal = Principals::where('user_account_id', $this->user_id)->first();

            if ($principal) {
                $this->principal_position = $principal->getPrincipalPosition->position;
            }
        }
        if ($this->role == 'Parent') {
            $parent = Parents::where('user_account_id', $this->user_id)->first();
            $this->children = $parent->children;
        }
    }

    public function delete()
    {
        $user = UserAccounts::find($this->user_id);
        if ($user && $user->is_archive) {
            $role = $user->role;
            if ($role == 'Guidance') {
                $user->hasGuidance()->delete();
            } elseif ($role == 'Student') {
                $user->hasStudent->hasParentRelationship()->delete();
                $user->hasStudent()->delete();
            } elseif ($role == 'Parent') {
                $user->hasParent->hasChildRelationship()->delete();
                $user->hasParent()->delete();
            } elseif ($role == 'Teacher') {
                $user->hasTeacher()->delete();
            } elseif ($role == 'Principal') {
                $user->hasPrincipal()->delete();
            }
            $user->delete();
            $user->getProfilePicture()->delete();
            $this->showToast('success', 'User Deleted Successfully');

            AuditLogs::create([
                'user_account_id' => $this->my_id,
                'action' => 'Delete',
                'description' => "The user delete the user with ID#{$user->id}",
            ]);

            $this->dispatch('closeModals');
            $this->loadAccounts();
        }
    }

    public function viewProfile()
    {
        $profile = ProfilePictures::find($this->profile_picture_id);
        if ($profile) {
            return imageBinaryToSRC($profile->profile_picture);
        } else {
            return defaultProfilePicture();
        }
    }

    public function archive()
    {
        $user = UserAccounts::find($this->user_id);

        if (!$user->is_archive) {
            $user->update([
                'is_archive' => true,
                'archived_at' => now(), // Set 'archived_at' to the current date and time
            ]);

            $this->showToast('success', 'User Archived Successfully');

            AuditLogs::create([
                'user_account_id' => $this->my_id,
                'action' => 'Archive',
                'description' => "The user archive the user with ID#{$user->id}",
            ]);

            $this->dispatch('closeModals');
            $this->loadAccounts();
        }
    }

    public function unArchive()
    {

        $user = UserAccounts::find($this->user_id);

        if ($user->is_archive) {
            $user->update([
                'is_archive' => false,
            ]);

            $this->showToast('success', 'User Unarchived Successfully');

            AuditLogs::create([
                'user_account_id' => $this->my_id,
                'action' => 'Unarchive',
                'description' => "The user unarchive th user with ID#{$user->id}",
            ]);

            $this->dispatch('closeModals');
            $this->loadAccounts();
        }
    }

    public function markArchive($ids)
    {
        $user = UserAccounts::whereIn('id', $ids)->where('is_archive', false);

        $user->update([
            'is_archive' => true,
            'archived_at' => now(), // Set 'archived_at' to the current date and time
        ]);
        $this->showToast('success', 'Selected Users Are Archived Successfully');
        $this->loadAccounts();
    }

    public function markUnarchive($ids)
    {
        $user = UserAccounts::whereIn('id', $ids)->where('is_archive', true);

        $user->update([
            'is_archive' => false,
            'archived_at' => now(), // Set 'archived_at' to the current date and time
        ]);

        $this->showToast('success', 'Selected Users Are Unarchived Successfully');
        $this->loadAccounts();
    }

    public function deleteSelected($ids)
    {
        $user = UserAccounts::whereIn('id', $ids)->where('is_archive', true)->delete();
        $this->showToast('success', 'Selected Users Are Deleted Successfully');
        $this->loadAccounts();
    }
}
