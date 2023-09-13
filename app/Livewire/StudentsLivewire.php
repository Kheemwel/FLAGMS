<?php

namespace App\Livewire;

use App\Models\Students;
use Livewire\Component;

class StudentsLivewire extends Component
{
    public $students;
    public $count = 0;
    public function render()
    {
        $this->students = Students::all();
        return view('livewire.profiling.students.students-livewire');
    }
    public function counter()
    {
        $this->count += 1;
    }
}
