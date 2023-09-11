<?php

namespace App\Livewire;

use App\Models\UserAccounts;
use Livewire\Component;

class LoginLivewire extends Component
{
    public $username;
    public $password;
    public $errorMessage;

    
    public function render()
    {
        return view('livewire.login-livewire');
    }

    public function login()
    {
        $user = UserAccounts::where('username', $this->username)->first();

        if ($user && password_verify($this->password, $user->hashed_password)) {
            // Successful login
            $user->total_login += 1;
            $user->last_login = now();
            $user->save();
            session(['user_id' => $user->id]);
            return redirect()->route('user-dashboard-page');
        } else {
            $this->errorMessage = 'Invalid username or password';
        }
    }

    public function resetInputFields()
    {
        $this->username = null;
        $this->password = null;
        $this->errorMessage = null;
    }
}
