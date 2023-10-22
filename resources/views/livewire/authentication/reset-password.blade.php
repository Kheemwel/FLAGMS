<div class="modal fade login-modal" id="resetPasswordModal" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="text-align: left; border-radius: 20px;">
            <div wire:loading wire:target='changePassword'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputFields()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit='resetPassword()'>
                <div class="modal-body" style="margin-left: 2rem; margin-right: 2rem; max-height: 500px; overflow-y: auto">
                    <!--MODAL FORM TITLE-->
                    <p class="form-group col-sm-12" style="color: #252525; font-weight: bold; font-size: 35px; text-align: center;">Reset Password</p>
                    <br><br>
                    
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525;">
                        <label for="input-email">Email</label>
                        <input disabled class="form-control" id="input-new-password" style="border-left: none; border-top: none; border-right: none; border-bottom: 1px solid #252525" type="email" wire:model='email'>
                    </div>
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525;">
                        <label for="input-email">New Password</label>
                        <input class="form-control" id="input-new-password" style="border-left: none; border-top: none; border-right: none; border-bottom: 1px solid #252525" type="password" wire:model='new_password'>
                    </div>
                    <x-error field='new_password'/>
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525;">
                        <label for="input-email">Confirm Password</label>
                        <input class="form-control" id="input-confirm-password" style="border-left: none; border-top: none; border-right: none; border-bottom: 1px solid #252525" type="password" wire:model='confirm_password'>
                    </div>
                    <x-error field='confirm_password'/>

                    <div class="form-group col-sm-12 d-flex justify-content-center" style="margin-bottom: 3rem; margin-top: 3rem;">
                        <button class="btn btn-primary" style="border-color: transparent; background-color: #0A0863; color: white; font-size: 14px; width: 400px;" type="submit">Submit</button>
                    </div>
                </div> <!-- /.card-body -->
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!--MODAL END-->
