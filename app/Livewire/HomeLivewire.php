<?php

namespace App\Livewire;

use App\Models\WebsiteLogo;
use App\Models\WebsiteSchoolName;
use App\Models\WebsiteSubtitle;
use App\Models\WebsiteTitle;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.landing-page')]
class HomeLivewire extends Component
{
    public $title, $logo, $subtitle, $school_name;
    public function render()
    {
        $this->title = WebsiteTitle::find(1)->title;
        $this->logo = imageBinaryToSRC(WebsiteLogo::find(1)->logo);
        $this->subtitle = WebsiteSubtitle::find(1)->subtitle;
        $this->school_name = WebsiteSchoolName::find(1)->school_name;
        return view('livewire.content_management.home-livewire');
    }
}
