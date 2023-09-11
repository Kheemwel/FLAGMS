<?php

namespace App\Http\Livewire;

use App\Models\MyUsers;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LivewireModal extends Component
{
    public $myusers, $username, $password, $hashed_password, $myuser_id;
    public $editMode = false;

    public function render()
    {
        $this->myusers = MyUsers::all();
        return view('livewire.livewire-modal');
    }

    private function resetInputFields(){
        $this->username = '';
        $this->password = '';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $validatedData['hashed_password'] = Hash::make($validatedData['password']);
  
        MyUsers::create($validatedData);
  
        session()->flash('message', 'User Created Successfully.');
  
        $this->resetInputFields(); 
        $this->emit('userStore');
    }

    public function edit($id)
    {
        $this->editMode = true;

        $myusers = MyUsers::where('id', $id)->first();
        $this->myuser_id = $id;
        $this->username = $myusers->username;
        $this->password = $myusers->password;
        $this->hashed_password = $myusers->hashed_password;
    }

    public function cancel()
    {
        $this->editMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedData = $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $validatedData['hashed_password'] = Hash::make($validatedData['password']);
  
        $myusers = MyUsers::find($this->myuser_id);
        $myusers->update([
            'username' => $this->username,
            'password' => $this->password,
            'hashed_password' => $this->hashed_password
        ]);

        $this->editMode = true;
  
        session()->flash('message', 'User Updated Successfully.');
        $this->resetInputFields();
    }
    
    public function delete($id)
    {
        if($id) {
            MyUsers::where('id', $id)->delete();
            session()->flash('message', 'User Deleted Successfully.');
        }
    }
}
