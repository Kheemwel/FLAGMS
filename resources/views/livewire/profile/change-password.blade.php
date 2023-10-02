<div class="modal fade" id="change-password" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputs()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit='changePassword()'>
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">CHANGE PASSWORD</p> <br><br><br>

                    <!--PASSWORD-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; padding-left: 0;">
                        <label for="input-Section" style="font-weight: normal;">Current Password</label>
                        <input class="form-control" id="input-Section" style="border: 1px solid #252525" wire:model='current_password' type="password">
                        <x-error field='current_password' />
                    </div>
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; padding-left: 0;">
                        <label for="input-Section" style="font-weight: normal;">New Password</label>
                        <input class="form-control" id="input-Section" style="border: 1px solid #252525" wire:model='new_password' type="password">
                        <x-error field='new_password' />
                    </div>
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; padding-left: 0;">
                        <label for="input-Section" style="font-weight: normal;">Confirm New Password</label>
                        <input class="form-control" id="input-Section" style="border: 1px solid #252525" wire:model='confirm_password' type="password">
                        <x-error field='confirm_password' />
                    </div>
                    <!------------------------------------------------------------------------------>
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
