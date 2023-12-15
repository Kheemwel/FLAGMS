<div class="modal fade" id="edit-profile" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputs()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit='updateProfile()'>
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">EDIT PROFILE</p> <br><br><br>
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
                                    <img height="150px" style="border-radius: 50%;" src="{{ $profile_picture->temporaryUrl() }}" width='150px'>
                                @else
                                    <img alt="user profile" style="border-radius: 50%;" height="150px" src="{{ $this->viewProfile() }}" width='150px'>
                                @endif
                                <i class="fa fa-solid fa-camera" style="vertical-align: bottom;"></i>
                            </div>
                            <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress" x-on:livewire-upload-start="uploading = true">
                                <!-- File Input -->
                                <input accept=".png, .jpg, .jpeg" class="custom-file-input d-none" id="editPic" type="file" wire:model="profile_picture">

                                <!-- Progress Bar -->
                                <div class="progress" x-show="uploading">
                                    <div aria-valuemax="100" aria-valuemin="0" class="progress-bar" role="progressbar" x-bind:style="`width: ${progress}%;`"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--EMAIL-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                        <label for="input-Section" style="font-weight: normal;">Email</label>
                        <input class="form-control" id="input-Section" style="border: 1px solid #252525" type="text" wire:model='email'>
                        <x-error field='email' />
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button class="btn btn-primary" style="width: 450px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
