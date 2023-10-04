<div class="modal fade login-modal" id="login-modal" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="text-align: left; border-radius: 20px;">
            <div wire:loading wire:target='login,loop'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='resetInputFields()'>
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit='login()'>
                <div class="modal-body" style="margin-left: 2rem; margin-right: 2rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="form-group col-sm-12" style="color: #252525; font-weight: bold; font-size: 35px; text-align: center;">LOGIN</p> <br><br>
                    <!--USERNAME-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525;">
                        <input type="text" class="form-control" id="input-username" style="border-left: none; border-top: none; border-right: none; border-bottom: 1px solid #252525" placeholder="Username" wire:model='username'>
                    </div>
                    <!--PASSWORD-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525;">
                        <input type="password" class="form-control" id="input-pass" style="border-left: none; border-top: none; border-right: none; border-bottom: 1px solid #252525;" placeholder="Password" wire:model='password'>
                    </div>
                    <div class="form-check" style="font-size: 14px; color: #252525; margin-bottom: 3rem;">
                        <input class="form-check-input" id="cbPass" type="checkbox" wire:model="rememberMe">
                        <label class="form-check-label" for="cbPass">Remember Me</label>
                    </div>
                    @if ($errorMessage)
                        <p class="text-danger">{{ $errorMessage }}</p>
                    @endif
                    <div class="form-group col-sm-12 d-flex justify-content-center" style="margin-bottom: 3rem;">
                        <button type="submit" class="btn btn-primary" style="border-color: transparent; background-color: #0A0863; color: white; font-size: 14px; width: 400px;">Log In</button>
                    </div>
                </div> <!-- /.card-body -->                         
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!--MODAL END-->
