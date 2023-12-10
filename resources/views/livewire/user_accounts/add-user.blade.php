<!--USER INFORMATION FORM MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="addUserModal" role='dialog' style="max-width: 100%;" wire:ignore.self x-data="{ role: @entangle('role') }">
    <div class="modal-dialog">
        <div class="modal-content" x-on:click.outside="role = ''">
            <div wire:loading wire:target='addStudent, addParent, addPrincipal, addGuidance, addTeacher, addUser'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <div>
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                    </div>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" x-on:click="role = ''">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form wire:submit.prevent='addUser()' x-bind="addUser" x-data="addStudentParent">
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">Add User</p> <br><br><br>

                    <div style="display: flex; flex-direction: column;">
                        <p class="card-title" style="font-size: 16px; margin-bottom: 1rem;">Role</p>
                        <!--ROLE DROPDOWN BUTTON-->
                        <div class="input-group-prepend">
                            <select class="form-select form-select-sm mb-2" id="roles" required x-model="role">
                                @if ($role == '')
                                    <option selected>Select Role</option>
                                @endif
                                @foreach ($roles as $rls)
                                    @if (in_array("Add{$rls->role}Accounts", $privileges) || in_array('AddAccounts', $privileges))
                                        <option value="{{ $rls->role }}">{{ $rls->role }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        @error('role')
                            <span class="text-danger">You must select a role for this user</span>
                        @enderror
                    </div>
                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <div class="row">
                        <!--FIRSTNAME-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="inputFN" style="font-weight: normal;">First Name</label>
                            <input class="form-control validate-name" id="inputFN" maxlength="30" name='first_name' required style="border: 1px solid #252525" type="text" wire:model="first_name">
                            <x-error field="first_name" />
                        </div>
                        <!--LASTNAME-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="inputLN" style="font-weight: normal;">Last Name</label>
                            <input class="form-control validate-name" id="inputLN" maxlength="30" name='last_name' required style="border: 1px solid #252525" type="text" wire:model="last_name" x-model="lastName">
                            <x-error field="last_name" />
                        </div>
                    </div>
                    <template x-if="role == 'Student'">
                        <div>
                            @include('livewire.user_accounts.add-student')
                        </div>
                    </template>
                    <template x-if="role == 'Parent'">
                        <div x-init="initMultiSelect()">
                            @include('livewire.user_accounts.add-parent')
                        </div>
                    </template>
                    <template x-if="role == 'Principal'">
                        @include('livewire.user_accounts.add-principal')
                    </template>
                    {{-- EMAIL --}}
                    <div class="row">
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="inputEmail" style="font-weight: normal;">Email</label>
                            <input class="form-control" id="inputEmail" maxlength="255" name="email" required style="border: 1px solid #252525" type="email" wire:model="email">
                            <x-error field="email" />
                        </div>
                    </div>
                    <!--PASSWORD-->
                    <div class="row" x-data="passwordInput">
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="inputUsername" style="font-weight: normal;">Password</label>
                            <div class="input-group col-sm-13" style="font-size: 14px; color: #252525; border: 1px solid #252525; border-radius: 5px; padding-right: 5px;">
                                <input class="form-control" id="input-pass" maxlength="255" minlength="6" name="password" placeholder="Password" required style="border: none" wire:model="password" x-bind:type="show ? 'text' : 'password'" x-model="password">
                                <div class="input-group-append d-flex align-items-center">
                                    <i class="fa" x-bind:class="show ? 'fa-eye-slash' : 'fa-eye'" x-on:click="show = !show"></i>
                                </div>
                            </div>
                            <x-error field="password" />
                        </div>
                        <div class="form-group col-sm-6">
                            <button class="btn btn-default" style=" font-size: 10px; margin-top: 35px; background-color: #0A0863; color: white;" type="button" x-on:click='generatePassword()'>Generate Password</button>
                        </div>
                    </div>
                    <!-------------------->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-finish="uploading = false; progress = 0" x-on:livewire-upload-progress="progress = $event.detail.progress" x-on:livewire-upload-start="uploading = true">
                        <label for="input-item-desc" style="font-weight: normal;">Profile Picture</label>

                        <div class="form-group col-sm-12" style="border: 1px dashed gray; display: flex; flex-direction: column; align-items: center;">
                            <input accept=".png, .jpg, .jpeg" class="custom-file-input position-absolute z-50 m-0 p-0 w-100 h-100 border border-black" id="uploadPic" type="file" wire:model="profile_picture">
                            <div style="padding-top: 3rem; padding-bottom: 5rem;">
                                @if ($profile_picture)
                                    <img height="150px" src="{{ $profile_picture->temporaryUrl() }}" width='150px'>
                                @else
                                    <div>
                                        <label style="color: gray; font-size: 14px; font-weight: 300; text-align: center;">Drag an image here <br> or </label>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-primary" style=" width: 8rem; font-size: 12px; background-color: #0A0863; border: transparent;" type="button">Upload Image</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- Progress Bar -->
                        <div class="progress" x-show="uploading">
                            <div aria-valuemax="100" aria-valuemin="0" class="progress-bar" role="progressbar" x-bind:style="`width: ${progress}%;`"></div>
                        </div>
                        @error('profile_picture')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button class="btn btn-primary" style="width: 450px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Save User</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal end-->
