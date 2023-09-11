<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    
    @include('livewire.my_users.add')
    @include('livewire.my_users.edit')
    @include('livewire.my_users.view')

    <br><br><br>

    <form wire:submit.prevent="performSearch">
        <input type="search" maxlength="255" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2" name="search" wire:model.defer="search">
        <button type="submit" class="btn btn-primary btn-sm">Search</button>
    </form>    

    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Hashed Password</th>
                <th>Register Date</th>
                <th>Last Modified</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($myusers as $myuser)
            <tr>
                <td>{{ $myuser->id }}</td>
                <td>{{ $myuser->username }}</td>
                <td>{{ $myuser->password }}</td>
                <td>{{ $myuser->hashed_password }}</td>
                <td>{{ $myuser->created_at->format('F d,Y   h:i A') }}</td>
                <td>{{ $myuser->updated_at }}</td>
                <td>
                    <button wire:click="view({{ $myuser->id }})" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal">View</button>
                    <button wire:click="edit({{ $myuser->id }})" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                    <button wire:click="delete({{ $myuser->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $myusers->links('livewire.my_users.pagination') }}
</div>

