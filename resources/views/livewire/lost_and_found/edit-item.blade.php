<div class="modal fade" data-backdrop="static" id="edit-lost-item" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div wire:loading wire:target='get_data'>
                <div class="overlay bg-white">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header border-0 p-2">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent='updateItem()'>
                <div class="modal-body ml-2" style="max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title text-md text-lg font-weight-bold" style="color: #0A0863;">EDIT LOST ITEM</p> <br><br><br>

                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <!--------------------USER'S INFORMATION------------------------>
                    <!--ROLE-->
                    <div class="row text-left">
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <label class="font-weight-normal" for="input-SL">Item Type</label>
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
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <label class="font-weight-normal" for="select-type">Item Tag</label>
                            <div class="input-group-prepend">
                                <select class="form-select form-select-sm mb-2" id="select-type" wire:model.live.debounce.500ms="item_tag_id">
                                    @foreach ($item_tags as $tag)
                                        <option @if ($item_tag_id == $tag->id) selected @endif value="{{ $tag->id }}">{{ $tag->priority_tag }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('selected_item_tag')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row text-left">
                        <!--DATE AND TIME FOUND-->
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <label class="font-weight-normal" for="input-date-found">Date and Time Found</label>
                            <input class="form-control" id="input-date-found" style="border: 1px solid black" type="datetime-local" wire:model='datetime_found'>
                        </div>
                        @error('datetime_found')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!--ITEM NAME-->
                    <div class="form-group col-sm-13 text-sm text-left" style="color: #252525;">
                        <label class="font-weight-normal" for="input-item-name">Item Name</label>
                        <input class="form-control" id="input-item-name" style="border: 1px solid #252525" type="text" wire:model='item_name'>
                        @error('item_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--LOCATION FOUND-->
                    <div class="form-group col-sm-13 text-sm text-left" style="color: #252525;">
                        <label class="font-weight-normal" for="input-loc-found">Location Found</label>
                        <input class="form-control" id="input-loc-found" style="border: 1px solid #252525" type="text" wire:model='location_found'>
                        @error('location_found')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--FINDER'S NAME-->
                    <div class="form-group col-sm-13 text-sm text-left pl-0" style="color: #252525;">
                        <label class="font-weight-normal" for="input-finder-name">Finder's Name</label>
                        <input class="form-control" id="input-finder-name" style="border: 1px solid #252525" type="text" wire:model='finder_name'>
                        @error('finder_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--ITEM DESCRIPTION-->
                    <div class="form-group col-sm-13 text-sm text-left pl-0" style="color: #252525;">
                        <label class="font-weight-normal" for="input-item-desc">Item Description</label>
                        <textarea class="form-control" id="input-item-desc" style="border: 1px solid #252525; height: 100px;" wire:model='description'></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--IMAGE OF THE LOST ITEM-->
                    <div class="form-group col-sm-13 text-sm text-left pl-0" style="color: #252525;">
                        <label class="font-weight-normal" for="input-item-desc">Image of the Lost Item</label>
                    </div>
                    <div class="form-group col-sm-12 mb-4 text-center">
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
                                <div aria-valuemax="100" aria-valuemin="0" class="progress-bar progress-bar-striped progress-bar-animated" x-text="progress + '%'" role="progressbar" x-bind:style="`width: ${progress}%;`"></div>
                            </div>
                        </div>
                        @error('upload_item_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    @if ($is_claimed)
                        <!--CLAIMED DETAILS-->
                        <div class="row">
                            <div class="form-group col-sm-6 text-left">
                                <p class="text-sm" style="color: #0A0863;">Claimed Details</p>
                            </div>
                        </div>
                        <!--DATE AND TIME CLAIMED-->
                        <div class="row">
                            <div class="form-group col-sm-6 float-left text-sm text-left" style="color: #252525;">
                                <label class="font-weight-normal" for="input-datel">Date and Time Claimed</label>
                                <input class="form-control" id="input-date" style="border: 1px solid black" type="datetime-local" wire:model='claimed_datetime'>
                            </div>
                            @error('claimed_datetime')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!--Claimer'S NAME-->
                        <div class="row">
                            <div class="form-group col-sm-12 text-sm text-left pl-1" style="color: #252525;">
                                <label class="font-weight-normal" for="input-claimer-name">Claimer's Name</label>
                                <input class="form-control" id="input-claimer-name" style="border: 1px solid #252525" type="text" wire:model='claimer_name'>
                            </div>
                            @error('claimer_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    @endif
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
