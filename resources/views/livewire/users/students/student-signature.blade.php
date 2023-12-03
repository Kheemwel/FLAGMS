<!--ADD SIGNATURE MODAL-->
<div class="modal fade as-modal" id="student-signature" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog as-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body" style="margin-left: 2rem; margin-right: 2rem; max-height: 500px; overflow-y: auto;">

                    <div class="row">
                        <div class="col-12">
                            <!-- SIGNATURE TABS -->
                            <div class="card" style="border: none; box-shadow: none; outline: none;">
                                <div class="card-header d-flex p-0">
                                    <ul class="nav nav-pills float-left p-2">
                                        <li class="nav-item" wire:ignore>
                                            <!--DRAW BTN-->
                                            <a class="nav-link active" data-toggle="tab" href="#draw-mode-tab">
                                                <img alt="draw button" height="40" src="images/draw.png" width="40">
                                            </a>
                                        </li>
                                        <li class="nav-item" wire:ignore>
                                            <!--IMAGE BTN-->
                                            <a class="nav-link" data-toggle="tab" href="#upload-image-tab">
                                                <img alt="image button" height="40" src="images/imagebtn.png" style="text-align: left;" width="40">
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="draw-mode-tab" wire:ignore.self x-data="signaturePad">
                                            {{-- <div class="form-group col-sm-12 text-center" style="border: 1px solid gray; padding-top: 5rem; padding-bottom: 5rem;">
                                                <label style="color: gray; font-size: 14px; font-weight: 300;">Draw Here</label>
                                            </div> --}}
                                            <canvas style="width: 100%; height: 100%; border: 1px solid black" x-on:mousedown="startDrawing" x-on:mousemove="draw" x-on:mouseup="stopDrawing" x-on:touchend="stopDrawing" x-on:touchmove="draw" x-on:touchstart="startDrawing" x-ref="canvas"></canvas>
                                            <div class="row">
                                                <!--CLEAR & DRAW/ SUBMIT BUTTONS-->
                                                <div class="form-group col-sm-6">
                                                    <button class="btn btn-block btn-default float-right clear-button" style=" width: 10rem; font-size: 14px;" type="button" x-on:click="clearSignature()">Clear and draw again</button>
                                                </div>
                                                <div class="form-group col-sm-6 button-container" style="font-size: 12px; color: #252525;">
                                                    <button class="btn btn-block btn-primary" style=" width: 10rem; font-size: 14px; background-color: #0A0863; border: transparent;" type="button" x-on:click="@this.set('studentSignature', getContent());">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="upload-image-tab" wire:ignore.self x-data="imagePreview">
                                            <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-finish="uploading = false; progress = 0" x-on:livewire-upload-progress="progress = $event.detail.progress" x-on:livewire-upload-start="uploading = true">
                                                <label for="input-item-desc" style="font-weight: normal;">Image of the Lost Item</label>

                                                <div class="form-group col-sm-12" style="border: 1px dashed gray; display: flex; flex-direction: column; align-items: center;">
                                                    <input accept=".png, .jpg, .jpeg" class="custom-file-input position-absolute z-50 m-0 p-0 w-100 h-100 border border-black" id="uploadPic" type="file" wire:model="studentSignature">
                                                    <div style="padding-top: 3rem; padding-bottom: 5rem;">
                                                        {{-- @if (!is_string($studentSignature) && ($studentSignature && in_array($studentSignature->getClientOriginalExtension(), ['png', 'jpg', 'jpeg']) && strpos($studentSignature->getMimeType(), 'image/') === 0))
                                                            <img height="150px" src="{{ $studentSignature->temporaryUrl() }}" width='150px'>
                                                        @else --}}
                                                        @if ($studentSignature)
                                                            <img height="150px" src="{{ $studentSignature }}" width='150px'>
                                                        @else
                                                            <div>
                                                                <label style="color: gray; font-size: 14px; font-weight: 300; text-align: center;">Drag an image here <br> or </label>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-block btn-primary" style=" width: 8rem; font-size: 12px; background-color: #0A0863; border: transparent;" type="button">Upload Image</button>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Progress Bar -->
                                                <div class="progress" x-show="uploading">
                                                    <div aria-valuemax="100" aria-valuemin="0" class="progress-bar" role="progressbar" x-bind:style="`width: ${progress}%;`"></div>
                                                </div>
                                                @error('studentSignature')
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
