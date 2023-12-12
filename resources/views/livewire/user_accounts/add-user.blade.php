<!--USER INFORMATION FORM MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" data-backdrop="static" class="modal fade" id="addUserModal" role='dialog' style="max-width: 100%;" wire:ignore.self x-data="{ role: @entangle('role') }">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 20px;">
            <div wire:loading wire:target='addStudent, addParent, addPrincipal, addGuidance, addTeacher, addUser'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <div>
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                    </div>
                </div>
            </div>
            <div class="modal-header border-0 p-2">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" x-on:click="role = ''">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form wire:submit.prevent='addUser()' x-bind="addUser" x-data="addStudentParent">
                <div class="modal-body ml-2" style="max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title text-xl font-weight-bold" style="color: #0A0863;">Add User</p> <br><br><br>

                    <div class="d-flex flex-column">
                        <p class="card-title text-sm mb-1">Role</p>
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
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <label class="font-weight-normal" for="inputFN">First Name</label>
                            <input class="form-control validate-name" id="inputFN" maxlength="30" name='first_name' required style="border: 1px solid #252525" type="text" wire:model="first_name">
                            <x-error field="first_name" />
                        </div>
                        <!--LASTNAME-->
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <label class="font-weight-normal" for="inputLN">Last Name</label>
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
                            <label class="font-weight-normal" for="inputEmail">Email</label>
                            <input class="form-control" id="inputEmail" maxlength="255" name="email" required style="border: 1px solid #252525" type="email" wire:model="email">
                            <x-error field="email" />
                        </div>
                    </div>
                    <!--PASSWORD-->
                    <div class="row" x-data="{ password: @entangle('password'), ...passwordInput}">
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <label class="font-weight-normal" for="inputUsername">Password</label>
                            <div class="input-group col-sm-13 text-sm pr-1" style="color: #252525; border: 1px solid #252525; border-radius: 5px;">
                                <input class="form-control" maxlength="255" minlength="6" name="password" placeholder="Password"  required style="border: none" x-bind:type="show ? 'text' : 'password'" x-model='password' x-ref="password">
                                <div class="input-group-append d-flex align-items-center">
                                    <i class="fa" x-bind:class="show ? 'fa-eye-slash' : 'fa-eye'" x-on:click="show = !show"></i>
                                </div>
                            </div>
                            <x-error field="password" />
                        </div>
                        <div class="form-group col-sm-6 d-flex justify-content-center align-self-center">
                            <button class="btn btn-default text-sm mt-1" style="background-color: #0A0863; color: white;" type="button" x-on:click='generatePassword()'>Generate Password</button>
                        </div>
                    </div>
                    <!-------------------->
                    <div class="form-group col-sm-13 text-sm text-left" style="color: #252525;" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-finish="uploading = false; progress = 0" x-on:livewire-upload-progress="progress = $event.detail.progress" x-on:livewire-upload-start="uploading = true">
                        <label for="input-item-desc font-weight-normal">Profile Picture</label>

                        <div class="form-group col-sm-12 d-flex flex-column justify-content-center align-items-center" style="border: 1px dashed gray;">
                            <input accept=".png, .jpg, .jpeg" class="custom-file-input position-absolute z-50 m-0 p-0 w-100 h-100 border border-black" id="uploadPic" type="file" wire:model="profile_picture">
                            <div class="pt-3 pb-5">
                                @if ($profile_picture)
                                    <img height="150px" src="{{ $profile_picture->temporaryUrl() }}" width='150px'>
                                @else
                                    <div>
                                        <label class="text-sm font-weight-light text-center" style="color: gray;">Drag an image here <br> or </label>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-primary text-sm border-0" style=" width: 8rem; background-color: #0A0863;" type="button">Upload Image</button>
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
                    <button class="btn btn-primary ml-1 text-sm" style="width: 100%; background-color: #0A0863; color: white;" type="submit">Save User</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal end-->
