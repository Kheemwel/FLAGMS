<?php

namespace App\Livewire;

use App\Mail\ForgotPasswordMail;
use App\Models\UserAccounts;
use App\Traits\Toasts;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;
use Throwable;

class LoginLivewire extends Component
{
    use Toasts;
    public $id, $password, $email;
    public $errorMessage;
    public $rememberMe;
    public $code, $input_code;
    public $new_password, $confirm_password;

    public function render()
    {
        return view('livewire.authentication.login-livewire');
    }

    public function login()
    {
        $user = UserAccounts::where('email', $this->email)->first();

        if ($user && password_verify($this->password, $user->password)) {
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
                cookie()->queue('remember_token', $rememberToken, 5); // 5 minute
            }
            session(['user_id' => $user->id]);
            $this->resetInputFields();
            $this->dispatch('loginSuccess');
            return redirect()->route('user-dashboard-page');
        } else {
            $this->errorMessage = 'Invalid email or password';
        }
    }

    public function sendCode()
    {
        if ($this->email) {
            if (UserAccounts::where('email', $this->email)->first()) {
                $this->code = mt_rand(10000000, 99999999);
    
                try {
                    Mail::to($this->email)->send(new ForgotPasswordMail($this->code));
                } catch (Throwable $th) {
                    //
                }
                $this->showToast('success', 'The code is sent to your email.');
                $this->dispatch('cooldown');
            } else {
                $this->errorMessage = 'The email does not exist in our record.';
            }
        } else {
            $this->errorMessage = 'Input Email First';
        }
    }

    public function verifyCode()
    {
        if ($this->code && $this->input_code && ($this->code == $this->input_code)) {
            $this->dispatch('closeModal', '#forgotPasswordModal');
            $this->dispatch('showModal', '#resetPasswordModal');
        } else {
            $this->errorMessage = 'The code is incorrect';
        }
    }

    public function resetPassword()
    {
        $validatedData = $this->validate([
            'new_password' => 'required|min:4', // Change the min length as needed
            'confirm_password' => 'required|same:new_password',
        ], [
            'confirm_password.same' => 'The new password and confirmation do not match.',
        ]);

        // Update the password
        UserAccounts::where('email', $this->email)->first()->update([
            'password' => bcrypt($validatedData['confirm_password'])
        ]);

        $this->showToast('success', 'Your password has been reset successfully.');
        $this->dispatch('closeModal', '#resetPasswordModal');
        $this->dispatch('loginModal');
        $this->resetInputFields();
    }

    public function resetInputFields()
    {
        $this->email = null;
        $this->password = null;
        $this->code = null;
        $this->input_code = null;
        $this->errorMessage = null;
        $this->resetErrorBag();
    }
}
