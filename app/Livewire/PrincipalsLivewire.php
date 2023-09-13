<?php

namespace App\Livewire;

use App\Models\Principals;
use Livewire\Component;

class PrincipalsLivewire extends Component
{
    public $principals;
    public function render()
    {
        $this->principals = Principals::all();
        return view('livewire.profiling.principals.principals-livewire');
    }
}
