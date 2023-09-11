<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MySample extends Component
{
    public $num = 0;
    public function render()
    {
        return view('livewire.my-sample');
    }

    public function increment()
    {
        $this->num += 1;
    }
}
