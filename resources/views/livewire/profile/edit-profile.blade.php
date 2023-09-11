<div class="modal fade" id="edit-profile" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputs()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
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
                                <div>
                                    @if ($profile_picture)
                                        <img src="{{ $profile_picture->temporaryUrl() }}">
                                    @else
                                        <img alt="user profile" src="{{ $this->viewProfile() }}">
                                    @endif
                                </div>
                                <div wire:loading wire:target="profile_picture">Uploading...</div>
                            </div>
                            <input accept=".png, .jpg, .jpeg" class="custom-file-input d-none" id="editPic" type="file" wire:model="profile_picture">
                        </div>
                    </div>
                    <!--CHANGE AND REMOVE BUTTON-->
                    <div class="row" style="margin-bottom: 2rem;">
                        <div class="form-group col-sm-6" style="text-align: right;">
                            <button class="btn btn-default" data-target="#" data-toggle="modal" style="max-width: 5rem; height: 35px; font-size: 12px; background-color: #0A0863; color: white;" type="button"><i class="fa fa-solid fa-pen"></i> Change</button>
                        </div>
                        <div class="form-group col-sm-6 float-left" style="text-align: left;">
                            <button class="btn btn-default" data-target="#" data-toggle="modal" style="max-width: 5rem; height: 35px; font-size: 12px; background-color: #0A0863; color: white;" type="button"><i class="fa fa-solid fa-trash"></i> Remove</button>
                        </div>
                    </div>

                    <!--USERNAME-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                        <label for="input-Section" style="font-weight: normal;">Username</label>
                        <input class="form-control" id="input-Section" style="border: 1px solid #252525" type="text" wire:model='username'>
                        <x-error field='username' />
                    </div>

                    <!--PASSWORD-->
                    <div x-data="{ showPassword: false }">
                        <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; padding-left: 0;">
                            <label for="input-Section" style="font-weight: normal;">Password</label>
                            <input class="form-control" id="input-Section" style="border: 1px solid #252525" type="password" wire:model='password' x-bind:type="showPassword ? 'text' : 'password'">
                            <x-error field='password' />
                        </div>
                        <!--SHOW PASSWORD CHECKBOX-->
                        <div class="form-check col-sm-3" style="font-size: 12px; color: gray; text-align: left; margin-bottom: 3rem;">
                            <input class="form-check-input" id="cbPass" type="checkbox" x-model="showPassword">
                            <label class="form-check-label" for="cbPass">Show Password</label>
                        </div>
                    </div>
                    <!------------------------------------------------------------------------------>
                </div>
                <!-- /.card-body -->
            </form>
            <div class="card-footer">
                <button class="btn btn-primary" style="width: 450px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit" wire:click='update()'>Save</button>
            </div>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
