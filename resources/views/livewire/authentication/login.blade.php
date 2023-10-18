<div class="modal fade login-modal" id="login-modal" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="text-align: left; border-radius: 20px;">
            <div wire:loading wire:target='login'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputFields()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit='login()'>
                <div class="modal-body" style="margin-left: 2rem; margin-right: 2rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="form-group col-sm-12" style="color: #252525; font-weight: bold; font-size: 35px; text-align: center;">LOGIN</p> <br><br>
                    <!--USERNAME-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525;">
                        <input class="form-control" id="input-username" placeholder="Username" style="border-left: none; border-top: none; border-right: none; border-bottom: 1px solid #252525" type="text" wire:model='username'>
                    </div>
                    <div class="input-group col-sm-13" style="font-size: 14px; color: #252525; border-radius: 5px; border-bottom: 1px solid #252525;" x-data="{ show: false }">
                        <input class="form-control" id="input-pass" placeholder="Password" style="border: none" wire:model="password" x-bind:type="show ? 'text' : 'password'">
                        <div class="input-group-append d-flex align-items-center">
                            <i class="fa" x-bind:class="show ? 'fa-eye-slash' : 'fa-eye'" x-on:click="show = !show"></i>
                        </div>
                    </div>

                    <div class="form-check" style="font-size: 14px; color: #252525; margin-bottom: 3rem; margin-top: 1rem">
                        <input class="form-check-input" id="cbPass" type="checkbox" wire:model="rememberMe">
                        <label class="form-check-label col-6" for="cbPass">Remember Me</label>
                        <a class="link col-6" data-dismiss="modal" data-toggle="modal" data-target="#forgotPasswordModal">Forgot Password?</a>
                    </div>
                    <p class="text-danger">{{ $errorMessage }}</p>
                    <div class="form-group col-sm-12 d-flex justify-content-center" style="margin-bottom: 3rem;">
                        <button class="btn btn-primary" style="border-color: transparent; background-color: #0A0863; color: white; font-size: 14px; width: 400px;" type="submit">Log In</button>
                    </div>
                </div> <!-- /.card-body -->
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!--MODAL END-->
