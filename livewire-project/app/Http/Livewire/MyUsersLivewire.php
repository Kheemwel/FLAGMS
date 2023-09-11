<?php

namespace App\Http\Livewire;

use App\Models\MyUsers;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class MyUsersLivewire extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $myusers;

    public $myuser_id, $username, $password, $hashed_password, $register_date, $last_modified;
    public $editMode = false;
    public $search, $performSearch = false;
    

    public function render()
    {
        $this->validate([
            'search' => 'nullable|string|max:255', // Adjust the max length as needed
        ]);

        $query = MyUsers::query();

        if ($this->search) {
            $searchTerm = '%' . trim($this->search) . '%'; // Sanitize the search
            $query->where('username', 'like', $searchTerm)
                    ->orWhere('password', 'like', $searchTerm);
        }

        $this->myusers = $query->latest()->paginate(3); // Get the data from latest to oldest

        return view('livewire.my-users-livewire', ['myusers' => $this->myusers]);
    }

    public function performSearch()
    {
        $this->render();
    }

    private function resetInputFields(){
        $this->username = '';
        $this->password = '';
    }

    public function store()
    {
        //validation
        $validatedData = $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        //hash the password and save it to the validatedData
        $validatedData['hashed_password'] = Hash::make($validatedData['password']); 
  
        //create/insert the data
        MyUsers::create($validatedData);
  
        //create a session for message
        session()->flash('message', 'User Created Successfully.');
  
        $this->resetInputFields();
    }

    public function edit($id)
    {
        //find the data by id and fill this object
        $myusers = MyUsers::findOrFail($id);
        $this->myuser_id = $id;
        $this->username = $myusers->username;
        $this->password = $myusers->password;
        $this->hashed_password = $myusers->hashed_password;
        
        $this->editMode = true;
    }

    public function view($id)
    {
        $this->editMode = true;
        $myusers = MyUsers::find($id);
        $this->myuser_id = $id;
        $this->username = $myusers->username;
        $this->password = $myusers->password;
        $this->hashed_password = $myusers->hashed_password;
        $this->register_date = $myusers->created_at;
        $this->last_modified = $myusers->updated_at;
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

        //update the data
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
        //delete the data
        MyUsers::find($id)->delete();
        session()->flash('message', 'User Deleted Successfully.');
    }
}
