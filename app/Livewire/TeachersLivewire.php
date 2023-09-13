<?php

namespace App\Livewire;

use App\Models\Teachers;
use Livewire\Component;

class TeachersLivewire extends Component
{
    public $teachers;
    public function render()
    {
        $this->teachers = Teachers::all();
        return view('livewire.profiling.teachers.teachers-livewire');
    }
}
