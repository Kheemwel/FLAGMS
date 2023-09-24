<div class="modal fade" id="edit-lost-item" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent='updateItem()'>
                <div wire:loading wire:target='get_data'>
                    <div class="overlay bg-white">
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                    </div>
                </div>
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">EDIT LOST ITEM</p> <br><br><br>

                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <!--------------------USER'S INFORMATION------------------------>
                    <!--ROLE-->
                    <div class="row" style="text-align: left;">
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="input-SL" style="font-weight: normal;">Item Type</label>
                            <div class="input-group-prepend">
                                <select class="form-select form-select-sm mb-2" id="select-type" wire:model="item_type_id">
                                    @foreach ($item_types as $typ)
                                        <option @if ($item_type_id == $typ->id) selected @endif value="{{ $typ->id }}">{{ $typ->item_type }}</option>
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
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--IMAGE OF THE LOST ITEM-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; padding-left: 0;">
                        <label for="input-item-desc" style="font-weight: normal;">Image of the Lost Item</label>
                    </div>
                    <div class="form-group col-sm-12" style="margin-bottom: 3rem; text-align: center;">
                        <div onclick="$('#editPic').trigger('click')">
                            @if ($upload_item_image)
                                <img height="200px" src="{{ $upload_item_image->temporaryUrl() }}" width='200px'>
                            @else
                                <img alt="user profile" height="200px" src="{{ $this->viewImage() }}" width='200px'>
                            @endif
                            <i class="fa fa-solid fa-camera" style="vertical-align: bottom;"></i>
                        </div>
                        <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress" x-on:livewire-upload-start="uploading = true">
                            <!-- File Input -->
                            <input accept=".png, .jpg, .jpeg" class="custom-file-input d-none" id="editPic" type="file" wire:model="upload_item_image">

                            <!-- Progress Bar -->
                            <div class="progress" x-show="uploading">
                                <div aria-valuemax="100" aria-valuemin="0" class="progress-bar" role="progressbar" x-bind:style="`width: ${progress}%;`"></div>
                            </div>
                        </div>
                        @error('upload_item_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--CLAIMED DETAILS-->
                    <div class="row">
                        <div class="form-group col-sm-6" style="text-align: left;">
                            <p style="color: #0A0863; font-size: 22px;">Claimed Details</p>
                        </div>
                    </div>

                    <!--CLAIMED DETAILS-->
                    <div class="row">
                        <div class="form-group col-sm-6" style="text-align: left;">
                            <label for="ic-claimed" style="font-weight: normal;">Is Claimed</label>
                            <input id='ic-claimed' type="checkbox" wire:model.live='is_claimed'>
                        </div>
                        @error('is_claimed')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    @if ($is_claimed)
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
                    @endif
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
