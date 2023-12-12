<div class="modal fade" id="claim-item" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 20px;">
            <div wire:loading wire:target='get_data'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header border-0 p-1">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent='claimItem()'>
                <div class="modal-body ml-2" style="max-height: 500px; overflow-y: auto;">

                    <!--MODAL FORM TITLE-->
                    <p class="card-title font-weight-bold text-md text-xl" style="color: #0A0863;">CLAIM LOST ITEM</p> <br><br><br>
                    <!--DATE AND TIME CLAIMED-->
                    <div class="row">
                        <div class="form-group col-sm-6 text-sm text-left pl-1" style="color: #252525;">
                            <label class="font-weight-normal" for="input-date">Date and Time</label>
                            <input class="form-control" id="input-date" style="border: 1px solid black" type="datetime-local" wire:model='claimed_datetime'>
                        </div>
                        @error('claimed_datetime')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12 text-lg text-left pl-1" style="color: #252525;">
                            <label class="font-weight-bold" for="input-date">Claimer Information</label>
                        </div>
                    </div>


                    <!--Claimer'S NAME-->
                    <div class="row">
                        <div class="form-group col-sm-12 text-sm text-left pl-1" style="color: #252525;">
                            <label class="font-weight-normal" for="input-claimer-name">Name</label>
                            <input class="form-control" id="input-claimer-name" style="border: 1px solid #252525" type="text" wire:model='claimer_name'>
                        </div>
                        @error('claimer_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12 text-sm text-left pl-1" style="color: #252525;">
                            <label class="font-weight-normal" for="input-claimer-contact">Contact Number</label>
                            <input class="form-control" id="input-claimer-contact" style="border: 1px solid #252525" type="tel" pattern="[0-9]{11}" wire:model='claimer_contact'>
                        </div>
                        @error('claimer_contact')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12 text-sm text-left pl-1" style="color: #252525;">
                            <label class="font-weight-normal" for="input-claimer-email">Email</label>
                            <input class="form-control" id="input-claimer-email" style="border: 1px solid #252525" type="email" wire:model='claimer_email'>
                        </div>
                        @error('claimer_email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12 text-sm text-left pl-1" style="color: #252525;">
                            <label class="font-weight-normal" for="input-claimer-address">Address</label>
                            <input class="form-control" id="input-claimer-address" style="border: 1px solid #252525" type="text" wire:model='claimer_address'>
                        </div>
                        @error('claimer_address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!------------------------------------------------------------------------------>
                </div> <!-- /.card-body -->
                <div class="card-footer">
                    <button class="btn btn-primary ml-1 text-sm" style="width: 100%; background-color: #0A0863; color: white;" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
