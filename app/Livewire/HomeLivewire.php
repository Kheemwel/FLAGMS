<?php

namespace App\Livewire;

use App\Models\WebsiteLogo;
use App\Models\WebsiteTitle;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.landing-page')]
class HomeLivewire extends Component
{
    public $title, $logo;
    public function render()
    {
        $this->title = WebsiteTitle::find(1)->title;
        $this->logo = imageBinaryToSRC(WebsiteLogo::find(1)->logo);
        return view('livewire.content_management.home-livewire');
    }
}
