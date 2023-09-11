<?php

namespace App\Livewire;

use App\Models\Roles;
use Livewire\Component;

class RolesLivewire extends Component
{
    public $roles;
    public function render()
    {
        $this->roles = Roles::all();
        return view('livewire.file_management.roles.roles-livewire');
    }
}
