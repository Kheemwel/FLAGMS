<!--USER INFORMATION FORM MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="editTagModal"  data-backdrop="static" role='dialog' style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div wire:loading wire:target='updateTag, edit'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <div>
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                    </div>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="updateTag()">
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">Add New Tag</p> <br><br><br>

                    <div class="form-group" style="font-size: 16px; color: #252525; margin-right: 1rem;">
                        <label for="inputPriority">Priority Tag</label>
                        <input class="form-control" id="inputPriority" style="border: 1px solid #252525" type="text" wire:model="priority_tag">

                        @error('priority_tag')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" style="font-size: 16px; color: #252525; margin-right: 1rem;">
                        <label for="inputDaysExpiration">Days Expired</label>
                        <input min="1" class="form-control" id="inputDaysExpiration" style="border: 1px solid #252525" type="number" wire:model="days_expired">

                        @error('days_expired')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
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
