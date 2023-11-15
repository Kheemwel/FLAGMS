<div class="modal fade login-modal" id="forgotPasswordModal" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="text-align: left; border-radius: 20px;">
            <div wire:loading wire:target='sendCode, verifyCode'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputFields()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit='verifyCode()'>
                <div class="modal-body" style="margin-left: 2rem; margin-right: 2rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="form-group col-sm-12" style="color: #252525; font-weight: bold; font-size: 35px; text-align: center;">Forgot Password</p>
                    <br><br>
                    <!--USERNAME-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525;">
                        <input class="form-control" id="input-email" placeholder="Email" style="border-left: none; border-top: none; border-right: none; border-bottom: 1px solid #252525" type="text" wire:model.live.debounce.500ms='email'>
                    </div>
                    <div class="input-group col-sm-13" style="font-size: 14px; color: #252525; border-radius: 5px; border: 1px solid black">
                        <input class="form-control" id="input-code" placeholder="" style="border: none" type="text" wire:model="input_code">
                        <div class="input-group-append" wire:ignore>
                            <button class="btn btn-primary" id='btn-send-code' wire:click.prevent='sendCode()' style="background-color: transparent; border-color: transparent; color: #6256AC;">Send Code</button>
                        </div>
                    </div>
                    <p class="text-danger">{{ $errorMessage }}</p>
                    <div class="form-group col-sm-12 d-flex justify-content-center" style="margin-bottom: 3rem; margin-top: 3rem;">
                        <button class="btn btn-primary" style="border-color: transparent; background-color: #0A0863; color: white; font-size: 14px; width: 400px;" type="submit">Submit</button>
                    </div>
                </div> <!-- /.card-body -->
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!--MODAL END-->
