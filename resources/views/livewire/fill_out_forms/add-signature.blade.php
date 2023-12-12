<!--ADD SIGNATURE MODAL-->
<div class="modal fade as-modal" id="add-signature" style="max-width: 100%;">
    <div class="modal-dialog as-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body" style="margin-left: 2rem; margin-right: 2rem; max-height: 500px; overflow-y: auto; text-align: center;">

                    <div class="row">
                        <div class="col-12">
                            <!-- SIGNATURE TABS -->
                            <div class="card" style="border: none; box-shadow: none; outline: none;">
                                <div class="card-header d-flex p-0">
                                    <ul class="nav nav-pills float-left p-2">
                                        <li class="nav-item">
                                            <!--DRAW BTN-->
                                            <a class="nav-link active" data-toggle="tab" href="#draw-mode-tab">
                                                <img alt="draw button" height="40" src="images/draw.png" width="40">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <!--IMAGE BTN-->
                                            <a class="nav-link" data-toggle="tab" href="#upload-image-tab">
                                                <img alt="image button" height="40" src="images/imagebtn.png" style="text-align: left;" width="40">
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="draw-mode-tab">
                                            <div class="form-group col-sm-12" style="border: 1px solid gray; padding-top: 5rem;
                                padding-bottom: 5rem;">
                                                <label style="color: gray; font-size: 14px; font-weight: 300;">Draw Here</label>
                                            </div>
                                            <div class="row">
                                                <!--CLEAR & DRAW/ SUBMIT BUTTONS-->
                                                <div class="form-group col-sm-6">
                                                    <button class="btn btn-block btn-default float-right clear-button" style=" width: 10rem; font-size: 14px;" type="button">Clear and draw again</button>
                                                </div>
                                                <div class="form-group col-sm-6 button-container" style="font-size: 12px; color: #252525;">
                                                    <button class="btn btn-block btn-primary" style=" width: 10rem; font-size: 14px; background-color: #0A0863; border: transparent;" type="button">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="upload-image-tab">
                                            <!--UPLOAD IMAGE TAB-->
                                            <div class="form-group col-sm-12" style="border: 1px solid gray; padding-top: 5rem;
                                padding-bottom: 5rem; display: flex; flex-direction: column; align-items: center;">
                                                <div>
                                                    <label style="color: gray; font-size: 14px; font-weight: 300;">Drag an image here <br> or </label>
                                                </div>
                                                <div>
                                                    <button class="btn btn-block btn-primary" style=" width: 8rem; font-size: 12px; background-color: #0A0863; border: transparent;" type="button">Choose Image</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!--SUBMIT BUTTON-->
                                                <div class="form-group col-sm-12" style="font-size: 12px; color: #252525;">
                                                    <button class="btn btn-block btn-primary" style=" font-size: 14px; background-color: #0A0863; border: transparent;" type="button">Submit</button>
                                                </div>
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
    <!-- /.modal-content -->
</div>