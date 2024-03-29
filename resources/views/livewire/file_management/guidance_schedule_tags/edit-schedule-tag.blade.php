<!--USER INFORMATION FORM MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" data-backdrop="static" id="editScheduleTagModal" role='dialog' style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div wire:loading wire:target='updateScheduleTag'>
                <div class="overlay bg-white">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                
                <button class="btn btn-primary action-btn" data-dismiss="modal" wire:click="delete()">
                    <i aria-hidden="true" class="fa fa-trash"></i>
                </button>
                
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="resetInputFields()" x-on:click="resetFields()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="updateScheduleTag()">
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">Edit Schedule Tag</p> <br><br><br>

                    <div class="form-group" style="font-size: 18px; color: #252525; margin-right: 1rem;">
                        <label for="color-name">Schedule Tag Name</label>
                        <input class="form-control" id="color-name" style="border: 1px solid #252525;" type="text" wire:model="tag_name">

                        @error('tag_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Color</label>

                        <div class="input-group my-colorpicker2 colorpicker-element" data-colorpicker-id="2">
                            <input class="form-control" data-original-title="" title="" type="text" wire:model='color'>

                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-square"></i></span>
                            </div>
                        </div>
                        @error('color')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-primary" style="width: 200px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal end-->
