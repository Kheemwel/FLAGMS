<?php

namespace App\Livewire;

use App\Models\Guidance;
use Livewire\Component;

class GuidanceLivewire extends Component
{
    public $guidances;
    public function render()
    {
        $this->guidances = Guidance::all();
        return view('livewire.users.guidance.guidance-livewire');
    }
}
