<?php

namespace App\Livewire;

use App\Models\AuditLogs;
use App\Models\UserAccounts;
use App\Models\WebsiteLogo;
use App\Models\WebsiteSchoolName;
use Livewire\Component;

class LeftNavigationLivewire extends Component
{
    public $myID, $role, $logo, $school_name;
    public $privileges = [];

    public function mount()
    {
        $userId = session('user_id');
        if ($userId) {
            $user = UserAccounts::find($userId);
            $this->myID = $user->id;
            $this->role = $user->role;
            $this->privileges = $user->Roles->privileges()->pluck('privilege')->toArray();
        }
        $this->school_name = WebsiteSchoolName::find(1)->school_name;
        $this->logo = imageBinaryToSRC(WebsiteLogo::find(1)->logo);
    }
    
    public function logout()
    {
        session()->forget('user_id');
        
        AuditLogs::create([
            'user_account_id' => $this->myID,
            'action' => 'Logout',
        ]);

        return redirect()->route('home-page');
    }
    public function render()
    {
        return view('livewire.dashboard.left-navigation-livewire');
    }
}
