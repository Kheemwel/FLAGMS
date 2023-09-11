<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MyUsers; // Assuming your user model is named MyUsers

class LoginLivewire extends Component
{
    public $username;
    public $password;
    public $errorMessage;

    public function render()
    {
        return view('livewire.livewire_login.login-livewire');
    }

    public function login()
    {
        $user = MyUsers::where('username', $this->username)->first();

        if ($user && password_verify($this->password, $user->hashed_password)) {
            // Successful login
            session(['user_id' => $user->id]);
            return redirect()->route('dashboard_livewire');
        } else {
            $this->errorMessage = 'Invalid username or password';
        }
    }
}
