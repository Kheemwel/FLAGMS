<?php

namespace App\Livewire;

use App\Exports\UsersAccountsExport;
use App\Imports\UserAccountsImport;
use App\Mail\AccountCreationMail;
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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $user_id, $name, $first_name, $last_name, $password, $hashed_password, $email;
    public $roles, $role_id, $role;
    public $profile_picture_id, $profile_picture;
    public $school_levels, $grade_levels, $school_level, $grade_level, $lrn;
    public $principal_positions, $principal_position;
    public $students, $selectedStudents;
    public $parents, $children;
    public $total_login, $last_login;
    public $batch_file;
    public $search = '', $filterRole;
    public $per_page = 30;
    public $my_id;
    public $privileges = [];

    public $allowedRoles = [];

    protected $listeners = ['setSelectedStudents'];

    public function mount()
    {
        $this->school_levels = SchoolLevels::all();
        $this->grade_levels = GradeLevels::all();
        $this->principal_positions = PrincipalPositions::all();

        $this->my_id = session('user_id');
        if ($this->my_id) {
            $user = UserAccounts::find($this->my_id);
            $this->privileges = $user->getRole->privileges()->pluck('privilege')->toArray();
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
    }

    public function render()
    {
        $this->renderSelect2();
        $this->roles = Roles::whereIn('role', $this->allowedRoles)->get();

        $this->students = Students::whereHas('getUserAccount', function ($query) {
            // Filter students where the associated user account is not archived
            $query->where('is_archive', false);
        })->get();
        $query_normal = UserAccounts::join('roles', 'user_accounts.role_id', '=', 'roles.id')
            ->select('user_accounts.*', 'roles.role as role', DB::raw("CONCAT(first_name, ' ', last_name) as name"))
            ->where('is_archive', false);
        $query_archives = UserAccounts::join('roles', 'user_accounts.role_id', '=', 'roles.id')
            ->select('user_accounts.*', 'roles.role as role', DB::raw("CONCAT(first_name, ' ', last_name) as name"))
            ->where('is_archive', true);

        if (!empty($this->allowedRoles)) {
            $query_normal->whereIn('role', $this->allowedRoles);
            $query_archives->whereIn('role', $this->allowedRoles);
        }

        $this->filterRole = $this->filterRole == 'All' ? '' : $this->filterRole;
        if (!empty($this->filterRole)) {
            $query_normal->where('role', $this->filterRole);
            $query_archives->where('role', $this->filterRole);
        }

        if ($this->search) {
            // Apply search condition only to unarchived users
            $query_normal->where(function ($query) {
                $query->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%')
                    ->orWhere('role', 'like', '%' . $this->search . '%');
            });

            // Apply search condition only to archived users
            $query_archives->where(function ($query) {
                $query->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%')
                    ->orWhere('role', 'like', '%' . $this->search . '%');
            });
        }

        if ($this->school_level) {
            $grade_levels = SchoolLevels::where('school_level', $this->school_level)->first();
            $this->grade_levels = $grade_levels->gradeLevels;
        }

        if ($this->grade_level and !$this->school_level) {
            $school_level = GradeLevels::where('grade_level', $this->grade_level)->first();
            $this->school_level = $school_level->hasSchoolLevel->schoolLevel->school_level;
        }

        $users = $query_normal->orderBy($this->sortField, $this->sortDirection)->paginate($this->per_page);
        $archived_users = $query_archives->orderBy($this->sortField, $this->sortDirection)->paginate($this->per_page);
        return view('livewire.user_accounts.user-accounts-livewire', compact('users', 'archived_users'));
    }

    public function renderSelect2()
    {
        if ($this->role == 'Parent') {
            $this->dispatch('parentForm');
        }
    }

    public function setSelectedStudents($value)
    {
        $this->selectedStudents = $value;
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
        } catch (Throwable $th) {
            $this->showToast('error', $th->getMessage());
        }

        // Add any additional logic or feedback messages here
        $this->showToast('success', 'Users Are Added Successfully');

        // Clear the file input field
        $this->batch_file = null;
    }

    public function export()
    {
        return Excel::download(new UsersAccountsExport, 'user_accounts.xlsx');
    }

    public function store($anotherRule)
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
                'password' => $validatedData['password'],
                'hashed_password' => $validatedData['hashed_password'],
                'role_id' => $role_id->id,
                'profile_picture_id' => $profile_picture_id,
                'email' => $validatedData['email']
            ]);
        } catch (Throwable $th) {
            $this->showToast('error', $th->getMessage());
        }

        if ($user->email) {
            try {
                Mail::to($user->email)->send(new AccountCreationMail($user->password));
            } catch (Throwable $th) {
                $this->showToast('error', $th->getMessage());
            }
        }

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

    public function addStudent()
    {
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
                $this->showToast('error', $th);
            }
            $this->showToast('success', 'Student Added Successfully');
            $this->resetInputFields();
        }
    }

    public function addParent()
    {
        $rules = [
            'selectedStudents' => 'required'
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
            'password' => $validatedData['password'],
            'hashed_password' => $validatedData['hashed_password'],
            'role_id' => $role_id->id,
            'profile_picture_id' => $this->profile_picture_id
        ]);

        $this->showToast('success', 'User Updated Successfully');
        $this->resetInputFields();
    }


    public function resetInputFields()
    {
        $this->first_name = null;
        $this->last_name = null;
        $this->password = null;
        $this->hashed_password = null;
        $this->role = null;
        $this->profile_picture = null;
        $this->email = null;
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
        $this->password = $user->password;
        $this->hashed_password = $user->hashed_password;
        $this->email = $user->email;
        $this->role_id = $user->role_id;
        $this->role = $user->getRole->role;
        $this->profile_picture_id = $user->profile_picture_id;
        $this->total_login = $user->total_login;
        $this->last_login = $user->last_login;

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
            $role = $user->getRole->role;
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

    public function archive($id)
    {
        $user = UserAccounts::find($id);

        if (!$user->is_archive) {
            $user->update([
                'is_archive' => true,
                'archived_at' => now(), // Set 'archived_at' to the current date and time
            ]);

            $this->showToast('success', 'User Archived Successfully');
        }
    }

    public function unArchive($id)
    {

        $user = UserAccounts::find($id);

        if ($user->is_archive) {
            $user->update([
                'is_archive' => false,
            ]);

            $this->showToast('success', 'User Unarchived Successfully');
        }
    }

    public function generatePassword()
    {
        $this->password = generatePassword();
    }
}
