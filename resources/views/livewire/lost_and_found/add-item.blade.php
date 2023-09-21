<div class="modal fade" id="add-lost-item" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputs()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit='addItem()'>
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">ADD LOST ITEM</p> <br><br><br>

                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <!--------------------USER'S INFORMATION------------------------>
                    <!--ROLE-->
                    <div class="row" style="text-align: left;">
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="select-type" style="font-weight: normal;">Item Type</label>
                            <div class="input-group-prepend">
                                <select class="form-select form-select-sm mb-2" id="select-type" wire:model.live="selected_item_type">
                                    @if ($selected_item_type == '')
                                        <option selected>Select Item Type</option>
                                    @endif
                                    @foreach ($item_types as $typ)
                                        <option value="{{ $typ->id }}">{{ $typ->item_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('selected_item_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="text-align: left;">
                        <!--DATE AND TIME FOUND-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="input-date-found" style="font-weight: normal;">Date and Time Found</label>
                            <input class="form-control" id="input-date-found" style="border: 1px solid black" type="datetime-local" wire:model='datetime_found'>
                        </div>
                        @error('datetime_found')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!--ITEM NAME-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                        <label for="input-item-name" style="font-weight: normal;">Item Name</label>
                        <input class="form-control" id="input-item-name" style="border: 1px solid #252525" type="text" wire:model='item_name'>
                        @error('item_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--LOCATION FOUND-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                        <label for="input-loc-found" style="font-weight: normal;">Location Found</label>
                        <input class="form-control" id="input-loc-found" style="border: 1px solid #252525" type="text" wire:model='location_found'>
                        @error('location_found')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--FINDER'S NAME-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; padding-left: 0;">
                        <label for="input-finder-name" style="font-weight: normal;">Finder's Name</label>
                        <input class="form-control" id="input-finder-name" style="border: 1px solid #252525" type="text" wire:model='finder_name'>
                        @error('finder_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--ITEM DESCRIPTION-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; padding-left: 0;">
                        <label for="input-item-desc" style="font-weight: normal;">Item Description</label>
                        <textarea class="form-control" id="input-item-desc" style="border: 1px solid #252525; height: 100px;" wire:model='description'></textarea>
                    </div>

                    <!--IMAGE OF THE LOST ITEM-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; padding-left: 0;">
                        <label for="input-item-desc" style="font-weight: normal;">Image of the Lost Item</label>

                        <div class="form-group col-sm-12" onclick="$('#uploadPic').trigger('click')" style="border: 1px dashed gray; padding-top: 3rem; padding-bottom: 5rem; display: flex; flex-direction: column; align-items: center;">
                            @if ($upload_item_image)
                                <img height="150px" src="{{ $upload_item_image->temporaryUrl() }}" width='150px'>
                            @else
                                <div>
                                    <label style="color: gray; font-size: 14px; font-weight: 300; text-align: center;">Drag an image here <br> or </label>
                                </div>
                                <div>
                                    <button class="btn btn-block btn-primary" style=" width: 8rem; font-size: 12px; background-color: #0A0863; border: transparent;" type="button">Upload Image</button>
                                </div>
                            @endif
                        </div>
                        <input accept=".png, .jpg, .jpeg" class="custom-file-input d-none" id="uploadPic" type="file" wire:model="upload_item_image">
                        @error('upload_item_image')
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
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
