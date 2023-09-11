<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MyLivewire extends Component
{
    public $name = "Kimwel";
    public $count = 0;

    public $text = "";

    public function increment() {
        $this->count++;
    }

    public function printText() {
        return $this->text;
    }
    
    public function render()
    {
        return view('livewire.my-livewire');
    }
}
