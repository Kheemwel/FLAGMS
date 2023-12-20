<!--EDIT USER INFORMATION MODAL-->
<div class="modal fade" id="stud-info-edit" wire:ignore.self data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 20px;">
            <div wire:loading wire:target='get_data, update'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputFields()'>
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
                        <div class="form-group col-sm-12" style="margin-bottom: 3rem; text-align: center;">
                            <div onclick="$('#editPic').trigger('click')">
                                @if ($profile_picture)
                                    <img height="150px" src="{{ $profile_picture->temporaryUrl() }}" width='150px'>
                                @else
                                    <img alt="user profile" height="150px" src="{{ $this->viewProfile() }}" width='150px'>
                                @endif
                                <i class="fa fa-solid fa-camera" style="vertical-align: bottom;"></i>
                            </div>
                            <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress" x-on:livewire-upload-start="uploading = true">
                                <!-- File Input -->
                                <input accept=".png, .jpg, .jpeg" class="custom-file-input d-none" id="editPic" type="file" wire:model="profile_picture">

                                <!-- Progress Bar -->
                                <div class="progress" x-show="uploading">
                                    <div aria-valuemax="100" aria-valuemin="0" class="progress-bar progress-bar-striped progress-bar-animated" x-text="progress + '%'" role="progressbar" x-bind:style="`width: ${progress}%;`"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" style="margin-bottom: 1rem;">
                        <!--ID-->
                        <div class="form-group col-sm-5" style="font-size: 12px; color: #252525;">
                            <p class="card-title">Role</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 12px; color: #252525;">
                            <p class="card-title" style="font-weight: bold;">{{ $role }}</p>
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

                    <!--EMAIL-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                        <label for="input-Section" style="font-weight: normal;">Username</label>
                        <input class="form-control" id="input-Section" style="border: 1px solid #252525" type="text" wire:model="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--PASSWORD-->
                    <div class="row">
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="inputUsername" style="font-weight: normal;">Password</label>
                            <div class="input-group col-sm-13" style="font-size: 14px; color: #252525; border: 1px solid #252525; border-radius: 5px; padding-right: 5px;" x-data="{ show: false }">
                                <input class="form-control" id="edit-pass" placeholder="Password" style="border: none" wire:model="password" x-bind:type="show ? 'text' : 'password'">
                                <div class="input-group-append d-flex align-items-center">
                                    <i class="fa" x-bind:class="show ? 'fa-eye-slash' : 'fa-eye'" x-on:click="show = !show"></i>
                                </div>
                            </div>
                            @if ($errors->has('password') && !$password)
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <!------------------------------------------------------------------------------>
                </form>
            </div> <!-- /.card-body -->
            <div class="card-footer">
                <button class="btn btn-primary" data-target='#saveModal' data-toggle='modal' style="width: 450px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal end-->
