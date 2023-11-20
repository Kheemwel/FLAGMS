<!--USER INFORMATION FORM MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="batchAddUserModal" role='dialog' style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="resetInputFields()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="import()">
                <div wire:loading wire:target='import'>
                    <div class="overlay"><i class="fas fa-3x fa-sync-alt fa-spin"></i>
                        <div class="text-bold pt-2">Adding Users...</div>
                    </div>
                </div>
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">Batch Add User</p> <br><br><br>

                    <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress" x-on:livewire-upload-start="uploading = true" style="margin-right: 1rem;">
                        <!-- File Input -->
                        <div class="custom-file" style="border: 1px solid #252525; border-radius: 5px; margin-bottom: 2rem;">
                            <input accept='.csv' class="custom-file-input" id="uploadFile" type="file" wire:model="batch_file">
                            <label class="custom-file-label" for="uploadFile"></label>
                        </div>

                        <!-- Progress Bar -->
                        <div class="progress" x-show="uploading">
                            <div aria-valuemax="100" aria-valuemin="0" class="progress-bar" role="progressbar" x-bind:style="`width: ${progress}%;`"></div>
                            {{-- <progress max="100" x-bind:value="progress"></progress> --}}
                        </div>
                    </div>
                    <x-error field='batch_file' />
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
