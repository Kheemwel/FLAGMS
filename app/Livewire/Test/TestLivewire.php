<?php

namespace App\Livewire\Test;

use Livewire\Component;

class TestLivewire extends Component
{
    public $showContent = false;
    public $title = 'TEST';

    public function render()
    {
        return view('livewire.tests.test-livewire')->layout('livewire.tests.test-container', ['title' => $this->title]);
    }

    public function setShowContent()
    {
        $this->showContent = !$this->showContent;
    }

    public function alert()
    {
        $this->dispatch('alert');
    }
}
