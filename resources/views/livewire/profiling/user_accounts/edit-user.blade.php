<!--EDIT USER INFORMATION MODAL-->
<div class="modal fade" id="stud-info-edit" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="resetInputFields()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                <form>
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">USER INFORMATION</p> <br><br><br>
                    <div class="input-group-prepend">
                        <p class="card-title" style="font-size: 16px; color: #252525; font-weight: bold; margin-bottom: 1rem;"> Profile Picture</p>
                    </div>
                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <!--------------------USER'S INFORMATION------------------------>
                    <div class="row">
                        <!--PROFILE PICTURE-->
                        <div class="form-group col-sm-12" style="margin-bottom: 3rem;">
                            <div onclick="$('#editPic').trigger('click')">
                                <div wire:loading wire:target="profile_picture">Uploading...</div>
                                <div wire:loading.remove wire:target="profile_picture">
                                    @if ($profile_picture)
                                        <img src="{{ $profile_picture->temporaryUrl() }}" width="100px">
                                    @else
                                        <img alt="user profile" src="{{ $this->viewProfile() }}" width="100px">
                                    @endif
                                </div>
                            </div>
                            <input accept=".png, .jpg, .jpeg" class="custom-file-input d-none" id="editPic" type="file" wire:model="profile_picture">
                        </div>
                    </div>
                    <div class="row" style="text-align: left;">
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <!--ROLE-->
                            <label for="input-SL" style="font-weight: normal; margin-top: 1rem;">Role</label>
                            <div class="input-group-prepend">
                                <select class="form-select form-select-sm mb-2" disabled id="roles" wire:model="role_id">
                                    @foreach ($roles as $role)
                                        <option @if ($role_id == $role->id) selected @endif value="{{ $role->id }}">{{ $role->role }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('role_id')
                                <span class="text-danger">You must select a role for this user</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 1rem;">
                        <!--ID-->
                        <div class="form-group col-sm-5" style="font-size: 12px; color: #252525;">
                            <p class="card-title">ID</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 12px; color: #252525;">
                            <p class="card-title" style="font-weight: bold;">{{ $user_id }}</p>
                        </div>
                    </div>
                    <div class="row" style="text-align: left;">
                        <!--FIRSTNAME-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="input-FN" style="font-weight: normal;">First Name</label>
                            <input class="form-control" id="input-FN" style="border: 1px solid black" type="text" wire:model="first_name">
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!--LASTNAME-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="input-LN" style="font-weight: normal;">Last Name</label>
                            <input class="form-control" id="input-LN" style="border: 1px solid black" type="text" wire:model="last_name">
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--CHILD/STUDENT NAME-->
                    {{-- <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                         <label for="input-std-name" style="font-weight: normal;">Child / Student Name</label>
                         <input type="text" class="form-control" id="input-std-name" style="border: 1px solid #252525">
                     </div> --}}

                    <!--USERNAME-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                        <label for="input-Section" style="font-weight: normal;">Username</label>
                        <input class="form-control" id="input-Section" style="border: 1px solid #252525" type="text" wire:model="username">
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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
                        </div>
                        <div class="form-check" style="font-size: 14px; color: #252525; margin-bottom: 2rem;">
                            <input class="form-check-input" id="cbPass" type="checkbox" x-model="showPassword">
                            <label class="form-check-label" for="cbPass">Show Password</label>
                        </div>
                    </div>

                    <!------------------------------------------------------------------------------>
                </form>
            </div> <!-- /.card-body -->
            <div class="card-footer">
                <button class="btn btn-primary" style="width: 450px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit" wire:click="update()">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal end-->
