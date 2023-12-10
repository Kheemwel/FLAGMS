<!--USER INFORMATION FORM MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" data-backdrop="static" class="modal fade" id="importUsersModal" role='dialog' style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div wire:loading wire:target='import'>
                <div class="overlay bg-white">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                    <h5 class='font-weight-bold mt-3'>Adding Users...</h5>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="import()">
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">Import User Accounts</p> <br><br><br>
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-finish="uploading = false; progress = 0" x-on:livewire-upload-progress="progress = $event.detail.progress" x-on:livewire-upload-start="uploading = true">
                        <label for="input-item-desc" style="font-weight: normal;"></label>

                        <div class="form-group col-sm-12" style="border: 1px dashed gray; display: flex; flex-direction: column; align-items: center;">
                            <input accept='.csv' class="custom-file-input position-absolute z-50 m-0 p-0 w-100 h-100 border border-black" id="uploadPic" type="file" wire:model="batch_file">
                            <div style="padding-top: 3rem; padding-bottom: 5rem;">
                                @if ($batch_file)
                                    <div>
                                        <p class="font-weight-bold text-center">{{ $file_name }}</p>
                                    </div>
                                @else
                                    <div>
                                        <label style="color: gray; font-size: 14px; font-weight: 300; text-align: center;">Drag a file here <br> or </label>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-primary" style=" width: 8rem; font-size: 12px; background-color: #0A0863; border: transparent;" type="button">Upload File</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- Progress Bar -->
                        <div class="progress" x-show="uploading">
                            <div aria-valuemax="100" aria-valuemin="0" class="progress-bar" role="progressbar" x-bind:style="`width: ${progress}%;`"></div>
                        </div>
                        @error('batch_file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
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
