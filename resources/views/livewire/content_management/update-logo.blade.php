<!--USER INFORMATION FORM MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" data-backdrop="static" id="updateLogoModal" role='dialog' style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="resetInputFields()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="updateLogo()">
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">Update Website Logo</p> <br><br><br>

                    <div class="input-group">
                        <div class="custom-file" style="border: 1px solid #252525; border-radius: 5px; margin-bottom: 2rem; margin-right: 1rem;">
                            <input accept=".png, .jpg, .jpeg" class="custom-file-input" id="uploadLogo" type="file" wire:model="uploadedLogo">
                            <label class="custom-file-label" for="uploadLogo"></label>
                        </div>
                    </div>
                    @if ($errors->has('uploadedLogo'))
                        <span class="text-danger">{{ $errors->first('uploadedLogo') }}</span>
                    @endif
                    <div wire:loading wire:target="uploadedLogo">Uploading...</div>
                    @if ($uploadedLogo)
                        Photo Preview:
                        <img src="{{ $uploadedLogo->temporaryUrl() }}" width="100px">
                    @endif
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button class="btn btn-primary" style="width: 450px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal end-->
