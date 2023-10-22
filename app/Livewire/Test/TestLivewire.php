<?php

namespace App\Livewire\Test;

use App\Traits\Toasts;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('tests.livewire.test-container')]
class TestLivewire extends Component
{
    public $showContent = false;
    public $title = 'TEST';
    public $timer = 0;
    public $code;

    protected $listeners = ['code'];

    public function render()
    {
        return view('tests.livewire.test-livewire');
    }

    public function setShowContent()
    {
        $this->showContent = !$this->showContent;
    }

    public function alert()
    {
        $this->dispatch('alert');
    }

    public function sendCode()
    {
        $this->code = mt_rand(10000000, 99999999);
        $this->dispatch('cooldown');
    }

    public function code()
    {
        $this->code = mt_rand(10000000, 99999999);
    }
}
