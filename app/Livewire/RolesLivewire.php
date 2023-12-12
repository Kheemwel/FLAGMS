<?php

namespace App\Livewire;

use App\Models\Privileges;
use App\Models\Roles;
use App\Traits\Toasts;
use Livewire\Component;

class RolesLivewire extends Component
{
    use Toasts;
    public $roles, $role, $selected_role, $selected_role_id, $role_is_default;
    public $privileges, $selected_privileges = [];
    public $privilege_categories = ['Add', 'Edit',  'Delete', 'View', 'Archive', 'Manage', 'Export', 'Other'];

    public function mount()
    {
        $this->privileges = Privileges::all();
    }

    public function render()
    {
        $this->roles = Roles::all();
        return view('livewire.file_management.roles.roles-livewire');
    }

    public function addRole($privileges)
    {
        $this->selected_privileges = $privileges;
        $this->validate([
            'role' => 'required|max:255|unique:roles,role',
            'selected_privileges' => 'required|array|min:1'
        ]);

        $role = Roles::create([
            'role' => $this->role
        ]);
        $role->privileges()->attach($this->selected_privileges);

        $this->showToast('success', 'New Role Added Successfully');
        $this->resetInputFields();
    }

    public function getData($id)
    {
        $role = $this->roles->find($id);
        $this->selected_role = $role;
        $this->role = $role->role;
        $this->selected_role_id = $role->id;
        $this->role_is_default = $role->is_default;
        $this->selected_privileges = $role->privileges()->pluck('privilege_id')->toArray();
    }

    public function updateRole($privileges)
    {
        $this->selected_privileges = $privileges;
        $this->validate([
            'role' => 'required|max:255|unique:roles,role,' . $this->selected_role_id,
            'selected_privileges' => 'required|array|min:1'
        ]);

        $role = Roles::find($this->selected_role_id);
        if (!$role->is_default) {
            $role->update([
                'role' => $this->role
            ]);
        }
        $role->privileges()->sync($this->selected_privileges);

        $this->showToast('success', 'Role Updated Successfully');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        $role = Roles::find($id);
        $role->getUserAccounts()->delete();
        $role->delete();
        $this->showToast('success', 'Role Deleted Successfully');
    }

    public function resetInputFields()
    {
        $this->role = null;
        $this->selected_role = null;
        $this->selected_privileges = [];
        $this->resetErrorBag();
    }
}
