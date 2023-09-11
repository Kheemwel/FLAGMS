<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Username:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Username" @if(!$editMode)wire:model="username"@endif>
        @error('username') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Password:</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Enter Password" @if(!$editMode)wire:model="password"@endif>
        @error('password') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>