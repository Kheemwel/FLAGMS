<!--USER INFORMATION FORM MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="addUserModal" role='dialog' style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="resetInputFields()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @if ($role == 'Student')
                <form wire:submit.prevent="addStudent()">
                @elseif ($role == 'Parent')
                    <form wire:submit.prevent="addParent()">
                    @elseif ($role == 'Principal')
                        <form wire:submit.prevent="addPrincipal()">
                        @elseif ($role == 'Guidance')
                            <form wire:submit.prevent="addGuidance()">
                            @elseif($role == 'Teacher')
                                <form wire:submit.prevent="addTeacher()">
                                @else
                                    <form wire:submit.prevent="addUser()">
            @endif
            <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                <!--MODAL FORM TITLE-->
                <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">User Information</p> <br><br><br>

                <div style="display: flex; flex-direction: column;">
                    <p class="card-title" style="font-size: 16px; margin-bottom: 1rem;">Role</p>
                    <!--ROLE DROPDOWN BUTTON-->
                    <div class="input-group-prepend">
                        <select class="form-select form-select-sm mb-2" id="roles" wire:model.live="role">
                            @if ($role == '')
                                <option selected>Select Role</option>
                            @endif
                            @foreach ($roles as $rls)
                                <option value="{{ $rls->role }}">{{ $rls->role }}</option>
                            @endforeach
                        </select>
                        @error('role')
                            <span class="text-danger">You must select a role for this user</span>
                        @enderror
                    </div>
                </div>
                <!--IMPORTANT USER DETAILS FORM SECTION-->
                <div class="row">
                    <!--FIRSTNAME-->
                    <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                        <label for="inputFN" style="font-weight: normal;">First Name</label>
                        <input class="form-control" id="inputFN" style="border: 1px solid #252525" type="text" wire:model="first_name">
                        @if ($errors->has('first_name') || !$first_name)
                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                        @endif
                    </div>
                    <!--LASTNAME-->
                    <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                        <label for="inputLN" style="font-weight: normal;">Last Name</label>
                        <input class="form-control" id="inputLN" style="border: 1px solid #252525" type="text" wire:model="last_name">
                        @if ($errors->has('last_name') && !$last_name)
                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                        @endif
                    </div>
                </div>
                @if ($role == 'Student')
                    @include('livewire.profiling.user_accounts.add-student')
                @elseif ($role == 'Parent')
                    @include('livewire.profiling.user_accounts.add-parent')
                @elseif ($role == 'Principal')
                    @include('livewire.profiling.user_accounts.add-principal')
                @endif
                <!--USERNAME-->
                <div class="row">
                    <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                        <label for="inputUsername" style="font-weight: normal;">Username</label>
                        <input class="form-control" id="inputUsername" style="border: 1px solid #252525" type="text" wire:model="username">
                        @if ($errors->has('username'))
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-6">
                        <button class="btn btn-default" style=" font-size: 10px; margin-top: 35px; background-color: #0A0863; color: white;" type="button" wire:click='generateUsername()'>Generate Username</button>
                    </div>
                </div>
                <!--PASSWORD-->
                <div x-data="{ showPassword: false }">
                    <div class="row">
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="inputUsername" style="font-weight: normal;">Password</label>
                            <input class="form-control" id="inputUsername" style="border: 1px solid #252525" type="password" wire:model="password" x-bind:type="showPassword ? 'text' : 'password'">
                            @if ($errors->has('password') && !$password)
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-sm-6">
                            <button class="btn btn-default" style=" font-size: 10px; margin-top: 35px; background-color: #0A0863; color: white;" type="button" wire:click='generatePassword()'>Generate Password</button>
                        </div>
                    </div>
                    <div class="form-check" style="font-size: 14px; color: #252525; margin-bottom: 2rem;">
                        <input class="form-check-input" id="cbPass" type="checkbox" x-model="showPassword">
                        <label class="form-check-label" for="cbPass">Show Password</label>
                    </div>
                </div>
                <!-------------------->

                <!--UPLOAD PROFILE PIC-->
                <label for="exampleInputFile" style="font-weight: normal;">Profile Picture</label>
                <div class="input-group">
                    <div class="custom-file" style="border: 1px solid #252525; border-radius: 5px; margin-bottom: 2rem;">
                        <input accept=".png, .jpg, .jpeg" class="custom-file-input" id="uploadProfilePic" type="file" wire:model="profile_picture">
                        <label class="custom-file-label" for="uploadProfilePic"></label>
                    </div>
                </div>
                @if ($errors->has('profile_picture'))
                    <span class="text-danger">{{ $errors->first('profile_picture') }}</span>
                @endif
                <div wire:loading wire:target="profile_picture">Uploading...</div>
                @if ($profile_picture)
                    Photo Preview:
                    <img src="{{ $profile_picture->temporaryUrl() }}" width="100px">
                @endif
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button class="btn btn-primary" style="width: 450px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Add User</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal end-->
