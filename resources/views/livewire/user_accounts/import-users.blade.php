<!--USER INFORMATION FORM MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" data-backdrop="static" class="modal fade" id="importUsersModal" role='dialog' style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 20px;">
            <div wire:loading wire:target='import'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i> &nbsp; &nbsp;
                    <h5 class='font-weight-bold mt-3'>Adding Users...</h5>
                </div>
            </div>
            <div class="modal-header border-0 p-2">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="import()">
                <div class="modal-body  ml-2" style="max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title text-xl font-weight-bold" style="color: #0A0863;">Import User Accounts</p> <br><br><br>
                    <div class="form-group col-sm-13 text-sm text-left" style="color: #252525;" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-finish="uploading = false; progress = 0" x-on:livewire-upload-progress="progress = $event.detail.progress" x-on:livewire-upload-start="uploading = true">
                        <label class="font-weight-normal" for="input-item-desc"></label>

                        <div class="form-group col-sm-12 d-flex flex-column align-items-center justify-content-center" style="border: 1px dashed gray;">
                            <input accept='.csv' class="custom-file-input position-absolute z-50 m-0 p-0 w-100 h-100 border border-black" id="uploadPic" type="file" wire:model="batch_file">
                            <div class="pt-3 pb-5 d-flex flex-column align-items-center justify-content-center">
                                @if ($batch_file)
                                    <div>
                                        <p class="font-weight-bold text-center">{{ $file_name }}</p>
                                    </div>
                                @else
                                    <div>
                                        <label class="text-sm font-weight-light text-center" style="color: gray;">Drag a file here <br> or </label>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-primary text-sm border-0" style=" width: 8rem; background-color: #0A0863;" type="button">Upload File</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- Progress Bar -->
                        <div class="progress" x-show="uploading">
                            <div aria-valuemax="100" aria-valuemin="0" class="progress-bar progress-bar-striped progress-bar-animated" x-text="progress + '%'" role="progressbar" x-bind:style="`width: ${progress}%;`"></div>
                        </div>
                        @error('batch_file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button class="btn btn-primary ml-1 text-sm" style="width: 100%; background-color: #0A0863; color: white;" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal end-->
