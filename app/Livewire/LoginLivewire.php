<?php

namespace App\Livewire;

use App\Models\UserAccounts;
use Illuminate\Support\Str;
use Livewire\Component;

class LoginLivewire extends Component
{
    public $username;
    public $password;
    public $errorMessage;
    public $rememberMe;


    public function render()
    {
        return view('livewire.authentication.login-livewire');
    }

    public function login()
    {
        $user = UserAccounts::where('username', $this->username)->first();

        if ($user && password_verify($this->password, $user->hashed_password)) {
            // Successful login
            $user->total_login += 1;
            $user->last_login = now();
            $user->save();
            // Check if "Remember Me" is checked
            if ($this->rememberMe) {
                // Generate a remember token, store it in a cookie, and save it in the database
                $rememberToken = Str::random(60); // Generate a random token
                $user->remember_token = hash('sha256', $rememberToken);
                $user->save();

                // Store the token in a long-lived cookie (e.g., valid for one month)
                cookie()->queue('remember_token', $rememberToken, 1); // 1 minute
            }
            session(['user_id' => $user->id]);
            $this->resetInputFields();
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
