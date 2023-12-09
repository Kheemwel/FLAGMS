<!--ADD SIGNATURE MODAL-->
<div class="modal fade as-modal" id="parent-signature" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="border-radius: 20px;">
            <div class="modal-header p-3 border-0">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
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
                                            <a class="nav-link active" data-toggle="tab" href="#p-draw-mode-tab">
                                                <img alt="draw button" height="40" src="images/draw.png" width="40">
                                            </a>
                                        </li>
                                        <li class="nav-item" wire:ignore>
                                            <!--IMAGE BTN-->
                                            <a class="nav-link" data-toggle="tab" href="#p-upload-image-tab">
                                                <img class="text-left" alt="image button" height="40" src="images/imagebtn.png" width="40">
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body pl-0 pr-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="p-draw-mode-tab" wire:ignore.self x-data="signaturePad">
                                            {{-- <div class="form-group col-sm-12 text-center" style="border: 1px solid gray; padding-top: 5rem; padding-bottom: 5rem;">
                                                <label style="color: gray; font-size: 14px; font-weight: 300;">Draw Here</label>
                                            </div> --}}
                                            <canvas style="width: 100%; height: 300px; border: 1px solid black" x-on:mousedown="startDrawing" x-on:mousemove="draw" x-on:mouseup="stopDrawing" x-on:touchend="stopDrawing" x-on:touchmove="draw" x-on:touchstart="startDrawing" x-ref="canvas"></canvas>
                                            <div class="row">
                                                <!--CLEAR & DRAW/ SUBMIT BUTTONS-->
                                                <div class="form-group col-sm-6">
                                                    <button class="btn btn-block btn-default float-right clear-button text-sm" type="button" x-on:click="clearSignature()">Clear and draw again</button>
                                                </div>
                                                <div class="form-group col-sm-6 button-container text-sm" style="color: #252525;">
                                                    <button class="btn btn-block btn-primary text-sm border-0" style="background-color: #0A0863;" type="button"  x-on:click="@this.set('guardianSignature', getContent());">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="p-upload-image-tab" wire:ignore.self x-data="imagePreview">
                                            <div class="form-group col-sm-13 text-sm text-left" style="color: #252525;" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-finish="uploading = false; progress = 0" x-on:livewire-upload-progress="progress = $event.detail.progress" x-on:livewire-upload-start="uploading = true">
                                                <label class="font-weight-normal" for="input-item-desc">Image of the Lost Item</label>

                                                <div class="fform-group col-sm-12 d-flex flex-column align-items-center" style="border: 1px dashed gray;">
                                                    <input accept=".png, .jpg, .jpeg" class="custom-file-input position-absolute z-50 m-0 p-0 w-100 h-100 border border-black" id="uploadPic" type="file" wire:model="guardianSignature">
                                                    <div class="pt-4 pb-5">
                                                        {{-- @if (!is_string($guardianSignature) && ($guardianSignature && in_array($guardianSignature->getClientOriginalExtension(), ['png', 'jpg', 'jpeg']) && strpos($guardianSignature->getMimeType(), 'image/') === 0))
                                                            <img height="150px" src="{{ $guardianSignature->temporaryUrl() }}" width='150px'>
                                                        @else --}}
                                                        @if ($guardianSignature)
                                                            <img height="150px" src="{{ $guardianSignature }}" width='150px'>
                                                        @else
                                                            <div>
                                                                <label class="text-sm font-weight-light text-center" style="color: gray;">Drag an image here <br> or </label>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-block btn-primary text-sm border-0" style="background-color: #0A0863;" type="button">Upload Image</button>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Progress Bar -->
                                                <div class="progress" x-show="uploading">
                                                    <div aria-valuemax="100" aria-valuemin="0" class="progress-bar" role="progressbar" x-bind:style="`width: ${progress}%;`"></div>
                                                </div>
                                                @error('guardianSignature')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            {{-- <div class="row">
                                                <!--SUBMIT BUTTON-->
                                                <div class="form-group col-sm-12" style="font-size: 12px; color: #252525;">
                                                    <button class="btn btn-block btn-primary" style=" font-size: 14px; background-color: #0A0863; border: transparent;" type="button">Submit</button>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- ./card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
        </div> <!-- /.card-body -->
        </form>
    </div>
</div>
