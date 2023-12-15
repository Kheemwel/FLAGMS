<div class="modal fade as-modal signaturePadModal" data-backdrop="static" id="add-signature" role="dialog" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="border-radius: 20px;">
            <div wire:loading wire:target='updateSignature'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <div>
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                    </div>
                </div>
            </div>
            <div class="modal-header p-3 border-0">
                <button aria-label="Close" class="close" type="button" x-on:click="$('#add-signature').modal('hide')">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body mx-md-1 mx-lg-5" style="max-height: 80vh; overflow-y: auto;">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <!-- SIGNATURE TABS -->
                            <div class="card border-0" style="box-shadow: none; outline: none;">
                                <div class="card-header d-flex p-0">
                                    <ul class="nav nav-pills flex-nowrap float-left p-2">
                                        <li class="nav-item" wire:ignore>
                                            <!--DRAW BTN-->
                                            <a class="nav-link active" data-toggle="tab" href="#draw-mode-tab">
                                                <img alt="draw button" height="40" src="images/draw.png" width="40">
                                            </a>
                                        </li>
                                        <li class="nav-item" wire:ignore>
                                            <!--IMAGE BTN-->
                                            <a class="nav-link" data-toggle="tab" href="#upload-image-tab">
                                                <img alt="image button" class="text-left" height="40" src="images/imagebtn.png" width="40">
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body pl-0 pr-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="draw-mode-tab" wire:ignore.self x-data="signaturePad">
                                            <canvas style="width: 100%; height: 300px; border: 1px solid black" wire:model='signature' x-on:mousedown="startDrawing" x-on:mousemove="draw" x-on:mouseup="stopDrawing" x-on:touchend="stopDrawing" x-on:touchmove="draw" x-on:touchstart="startDrawing" x-ref="canvas"></canvas>
                                            <div class="row">
                                                <!--CLEAR & DRAW/SUBMIT BUTTONS-->
                                                <div class="form-group col-sm-6">
                                                    <button class="btn btn-block btn-default float-right clear-button text-sm" type="button" x-on:click="clearSignature()">Clear and draw again</button>
                                                </div>
                                                <div class="form-group col-sm-6 button-container text-sm">
                                                    <button class="btn btn-block btn-primary text-sm border-0" wire:click.prevent="$set('signature', getContent())">Submit</button>
                                                </div>
                                            </div>
                                            @error('signature')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="upload-image-tab" wire:ignore.self>
                                            <div class="form-group col-sm-13 text-sm text-left" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-finish="uploading = false; progress = 0" x-on:livewire-upload-progress="progress = $event.detail.progress" x-on:livewire-upload-start="uploading = true">
                                                <label class="font-weight-normal" for="uploadPic">Image of the Lost Item</label>

                                                <div class="form-group col-sm-12 d-flex flex-column align-items-center" style="border: 1px dashed gray;">
                                                    <input accept=".png, .jpg, .jpeg" class="custom-file-input position-absolute z-50 m-0 p-0 w-100 h-100 border border-black" id="uploadPic" type="file" wire:model="signature">
                                                    <div class="pt-4 pb-5">
                                                        @if ($signature)
                                                            <img height="150px" src="{{ $signature }}" width='150px'>
                                                        @else
                                                            <div>
                                                                <label class="text-sm font-weight-light text-center" style="color: gray;">Drag an image here <br> or </label>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-block btn-primary text-sm border-0" type="button">Upload Image</button>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Progress Bar -->
                                                <div class="progress" x-show="uploading">
                                                    <div aria-valuemax="100" aria-valuemin="0" class="progress-bar" role="progressbar" x-bind:style="`width: ${progress}%;`"></div>
                                                </div>
                                                @error('signature')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-sm-12 button-container text-sm">
                                                <button class="btn btn-block btn-primary text-sm border-0" type="button">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                                <!-- /.card-body -->
                            </div><!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
            </form>
        </div>
    </div>
</div>
