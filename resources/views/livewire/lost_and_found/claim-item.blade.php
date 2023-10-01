<div class="modal fade" id="claim-item" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div wire:loading wire:target='get_data'>
                <div class="overlay bg-white">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent='claimItem()'>
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">

                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">EDIT LOST ITEM</p> <br><br><br>
                    <!--DATE AND TIME CLAIMED-->
                    <div class="row">
                        <div class="form-group col-sm-6 float-left" style="font-size: 14px; color: #252525; text-align: left;">
                            <label for="input-date" style="font-weight: normal;">Date and Time Claimed</label>
                            <input class="form-control" id="input-date" style="border: 1px solid black" type="datetime-local" wire:model='claimed_datetime'>
                        </div>
                        @error('claimed_datetime')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--OWNER'S NAME-->
                    <div class="row">
                        <div class="form-group col-sm-12" style="font-size: 14px; color: #252525; text-align: left; padding-left: 8px;">
                            <label for="input-owner-name" style="font-weight: normal;">Owner's Name</label>
                            <input class="form-control" id="input-owner-name" style="border: 1px solid #252525" type="text" wire:model='owner_name'>
                        </div>
                        @error('owner_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!------------------------------------------------------------------------------>
                </div> <!-- /.card-body -->
                <div class="card-footer">
                    <button class="btn btn-primary" style="width: 450px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
