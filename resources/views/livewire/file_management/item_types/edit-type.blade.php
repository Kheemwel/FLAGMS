<!--USER INFORMATION FORM MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="editTypeModal" role='dialog' data-backdrop="static" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div wire:loading wire:target='updateType, edit'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <div>
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                    </div>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="resetInputFields()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="updateType()">
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">Edit Item Type</p> <br><br><br>

                    <div class="input-group">
                        <div class="custom-file" style="border: 1px solid #252525; border-radius: 5px; margin-bottom: 2rem; margin-right: 1rem;">
                            <input class="form-control" id="input-Section" style="border: 1px solid #252525;" type="text" wire:model="type">
                            <label for="updateTitle"></label>
                        </div>
                    </div>
                    @if ($errors->has('type'))
                        <span class="text-danger">{{ $errors->first('type') }}</span>
                    @endif
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button class="btn btn-primary" style="width: 100%; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal end-->
