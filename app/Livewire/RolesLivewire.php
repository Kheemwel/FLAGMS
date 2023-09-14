<?php

namespace App\Livewire;

use App\Models\Roles;
use Livewire\Component;

class RolesLivewire extends Component
{
    public $roles, $role;
    public function render()
    {
        $this->roles = Roles::all();
        return view('livewire.file_management.roles.roles-livewire');
    }

    public function addRole()
    {
        $this->validate([
            'role' => 'required|max:255|unique:roles,role'
        ]);

        Roles::create([
            'role' => $this->role
        ]);

        $this->showToast('New Role Added Successfully');
    }

    public function delete($id)
    {
        $role = Roles::find($id);
        $role->getUserAccounts()->delete();
        $role->delete();
        $this->showToast('Role Deleted Successfully');
    }

    public function resetInputFields()
    {
        $this->role = null;
    }

    public function showToast($message)
    {
        session()->flash('message', $message);
        $this->dispatch('showToast');
    }
}
