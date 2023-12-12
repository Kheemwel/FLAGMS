<div class="modal fade login-modal" data-backdrop="static" data-keyboard="false" id="login-modal" wire:ignore.self>
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content" style="border-radius: 20px;">
            <div wire:loading wire:target='login'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            
            <div class="overlay bg-white d-none align-items-center" style="border-radius: 20px;" id="login-indicator">
                <i class="fas fa-3x fa-sync-alt fa-spin"></i> &nbsp; &nbsp;
                <p class="text-lg pt-2">Login Successfully.</p>
            </div>
            
            <div class="modal-header p-lg-2" style="border: transparent;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputFields()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit='login()'>
                <div class="modal-body mx-4 overflow-auto" style="max-height: 500px;">
                    <!--MODAL FORM TITLE-->
                    <p class="form-group col-sm-12 text-center font-weight-bold text-xl" style="color: #252525;">LOGIN</p> <br><br>
                    <div class="form-group col-sm-13 text-sm" style="color: #252525;">
                        <input class="form-control" id="input-email" placeholder="Email" style="border-left: none; border-top: none; border-right: none; border-bottom: 1px solid #252525" type="email" wire:model='email'>
                    </div>
                    <div class="input-group col-sm-13 text-sm" style="color: #252525; border-radius: 5px; border-bottom: 1px solid #252525;" x-data="{ show: false }">
                        <input class="form-control border-0" id="input-pass" placeholder="Password" wire:model="password" x-bind:type="show ? 'text' : 'password'">
                        <div class="input-group-append d-flex align-items-center">
                            <i class="fa" x-bind:class="show ? 'fa-eye-slash' : 'fa-eye'" x-on:click="show = !show"></i>
                        </div>
                    </div>

                    <div class="form-check text-sm mb-3 mt-3" style="color: #252525;">
                        <input class="form-check-input" id="cbPass" type="checkbox" wire:model="rememberMe">
                        <label class="form-check-label col-6" for="cbPass">Remember Me</label>
                        <a class="link col-6" data-dismiss="modal" data-toggle="modal" data-target="#forgotPasswordModal" style="cursor:pointer;">Forgot Password?</a>
                    </div>
                    <p class="text-danger">{{ $errorMessage }}</p>
                    <div class="form-group col-sm-12 d-flex justify-content-center mb-3">
                        <button class="btn btn-primary text-sm" style="border-color: transparent; background-color: #0A0863; color: white; width: 100%;" type="submit">Log In</button>
                    </div>
                </div> <!-- /.card-body -->
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!--MODAL END-->
