<?php

namespace App\Livewire;

use App\Models\UserAccounts;
use App\Models\WebsiteLogo;
use App\Models\WebsiteSchoolName;
use App\Models\WebsiteSubtitle;
use App\Models\WebsiteTitle;
use App\Traits\Toasts;
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

    public function authenticateWithRememberToken()
    {
        // Check if there is a remember token in the cookie
        if ($rememberToken = request()->cookie('remember_token')) {
            // Find a user by the hashed remember token
            $user = UserAccounts::where('remember_token', hash('sha256', $rememberToken))->first();

            if ($user) {
                // User found based on the remember token, authenticate the user
                session(['user_id' => $user->id]);
                return redirect()->route('user-dashboard-page');
            }
        }

        $this->dispatch('loginModal');
    }
}
