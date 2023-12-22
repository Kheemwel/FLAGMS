<div class="modal fade" data-backdrop="static" id="add-lost-item" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0 p-2">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputs()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit='addItem()'>
                <div class="modal-body ml-2" style="max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title font-weight-bold text-md text-lg" style="color: #0A0863;">ADD FOUND ITEM</p> <br><br><br>

                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <!--------------------USER'S INFORMATION------------------------>
                    <!--ROLE-->
                    <div class="row text-left">
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <label class="font-weight-normal" for="select-type">Item Type</label>
                            <div class="input-group-prepend">
                                <select class="form-select form-select-sm mb-2" id="select-type" wire:model.live.debounce.500ms="selected_item_type">
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
                    <div class="row text-left">
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <label class="font-weight-normal" for="select-type">Item Tag</label>
                            <div class="input-group-prepend">
                                <select class="form-select form-select-sm mb-2" id="select-type" wire:model.live.debounce.500ms="selected_item_tag">
                                    @if ($selected_item_tag == '')
                                        <option selected>Select item Tag</option>
                                    @endif
                                    @foreach ($item_tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->priority_tag }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('selected_item_tag')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="text-align: left;">
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

                    <div class="form-group col-sm-13 text-sm text-left" style="color: #252525;" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-finish="uploading = false; progress = 0" x-on:livewire-upload-progress="progress = $event.detail.progress" x-on:livewire-upload-start="uploading = true">
                        <label for="input-item-desc font-weight-normal">Profile Picture</label>

                        <div class="form-group col-sm-12 d-flex flex-column justify-content-center align-items-center" style="border: 1px dashed gray;">
                            <input accept=".png, .jpg, .jpeg" class="custom-file-input position-absolute z-50 m-0 p-0 w-100 h-100 border border-black" id="uploadPic" type="file" wire:model="upload_item_image">
                            <div class="pt-3 pb-5">
                                @if ($upload_item_image && in_array($upload_item_image->getClientOriginalExtension(), ['png', 'jpg', 'jpeg']) && strpos($upload_item_image->getMimeType(), 'image/') === 0)
                                    <img height="150px" src="{{ $upload_item_image->temporaryUrl() }}" width='150px'>
                                @else
                                    <div>
                                        <label class="text-sm font-weight-light text-center" style="color: gray;">Drag an image here <br> or </label>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-primary text-sm border-0" style=" width: 8rem; background-color: #0A0863;" type="button">Upload Image</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- Progress Bar -->
                        <div class="progress" x-show="uploading">
                            <div aria-valuemax="100" aria-valuemin="0" class="progress-bar progress-bar-striped progress-bar-animated" x-text="progress + '%'" role="progressbar" x-bind:style="`width: ${progress}%;`"></div>
                        </div>
                        @error('upload_item_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!------------------------------------------------------------------------------>
                </div> <!-- /.card-body -->
                <div class="card-footer d-flex justify-content-center align-self-center">
                    <button class="btn btn-primary ml-1 text-sm" style="width: 100%; background-color: #0A0863; color: white;" type="submit">Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
