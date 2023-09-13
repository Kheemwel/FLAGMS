<?php

namespace App\Livewire;

use App\Models\Parents;
use Livewire\Component;

class ParentsLivewire extends Component
{
    public $parents;
    public function render()
    {
        $this->parents = Parents::all();
        return view('livewire.profiling.parents.parents-livewire');
    }
}
