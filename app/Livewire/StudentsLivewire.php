<?php

namespace App\Livewire;

use App\Models\Students;
use Livewire\Component;

class StudentsLivewire extends Component
{
    public $students;
    public function render()
    {
        $this->students = Students::all();
        return view('livewire.profiling.students.students-livewire');
    }
}
