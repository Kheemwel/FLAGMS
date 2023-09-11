<?php

namespace App\Livewire;

use Livewire\Component;

class TestLivewire extends Component
{
    public $showContent = false;
    
    public function render()
    {
        return view('livewire.tests.test-livewire');
    }

    public function setShowContent()
    {
        $this->showContent = !$this->showContent;
    }
}
