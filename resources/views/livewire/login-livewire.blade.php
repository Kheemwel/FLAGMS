<!--LOGIN FORM MODAL-->
<div class="modal fade" id="login-modal" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content" style="text-align: left;">
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
                    <!--PASSWORD-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525;">
                        <input class="form-control" id="input-pass" placeholder="Password" style="border-left: none; border-top: none; border-right: none; border-bottom: 1px solid #252525; margin-bottom: 3rem;" type="password" wire:model='password'>
                    </div>
                    @if ($errorMessage)
                        <p class="text-danger">{{ $errorMessage }}</p>
                    @endif
                    <div class="form-group col-sm-13" style="margin-bottom: 3rem;">
                        <button class="btn btn-primary" style="width: 400px; border-color: transparent; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Log In</a>
                    </div>
                </div> <!-- /.card-body -->
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div><!--MODAL END-->
