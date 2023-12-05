<!--FILL VIOLATION REQUEST MODAL-->
<div class="modal as-modal fade" id="fill-violation-form" data-backdrop="static" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog as-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; max-height: 500px; overflow-y: auto; text-align: left;">
                    <!--MODAL TITLE-->
                    <div class="row">
                        <div class="col-1 float-right">
                            <img height="50px" src="images/fiat.png" width="50px">
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <p style="font-size: 20px; color: #252525; line-height: 0%;"> Fiat Lux Academe Cavite</p>
                            </div>
                            <div class="row">
                                <p style="font-size: 18px; color: #252525;">"Let there be light."</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 justify-content-center" style="text-align: center; margin-top: 2rem; margin-bottom: 3rem;">
                        <p style="font-size: 22px; color: #252525; line-height: 10%; font-weight: bold;"> GUIDANCE COUNSELING OFFICE</p>
                        <p style="font-size: 22px; color: #252525; line-height: 10%; font-weight: bold;"> VIOLATION FORM</p>
                    </div>

                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <div class="row">
                        <!--Date-->
                        <div class="form-group col-sm-1" style="color: #252525;">
                            <p style="font-size: 18px;">Date:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="date">
                        </div>
                    </div>

                    <div class="row">
                        <!--Time-->
                        <div class="form-group col-sm-1" style="color: #252525;">
                            <p style="font-size: 18px;">Time:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="time">
                        </div>
                    </div>

                    <div class="row">
                        <!--Name of Student-->
                        <div class="form-group col-sm-2" style="color: #252525;">
                            <p style="font-size: 18px;">Name of Student:</p>
                        </div>
                        <div class="form-group col-sm-9" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <!--LEVEL & SEC-->
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Level & Section:</p>
                        </div>
                        <div class="form-group col-sm-8" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <!--Age/Gender/Date-->
                        <div class="form-group col-sm-1" style=" color: #252525;">
                            <p style="font-size: 18px;">Age:</p>
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                        </div>
                        <div class="form-group col-sm-1" style=" color: #252525;">
                            <p style="font-size: 18px;">Gender:</p>
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                        </div>
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Birthdate:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="date">
                        </div>
                    </div>

                    <div class="row">
                        <!--Parent / Guardian-->
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Parent/Guardian:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <!--Contact/Address-->
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Contact No.:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                        </div>
                        <div class="form-group col-sm-1" style=" color: #252525;">
                            <p style="font-size: 18px;">Address:</p>
                        </div>
                        <div class="form-group col-sm-6" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <!--Teacher in charge-->
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Teacher-in-charge:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <!--Offense Desc-->
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Type of Offense:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <input class="form-check-input" id="cbPass" type="checkbox"> Physical
                        </div>
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <input class="form-check-input" id="cbPass" type="checkbox"> Verbal
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <input class="form-check-input" id="cbPass" type="checkbox"> Social
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <input class="form-check-input" id="cbPass" type="checkbox"> Others
                        </div>
                    </div>

                    <div class="row">
                        <!--Narrative Report-->
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Narrative Report:</p>
                        </div>
                        <div class="form-group col-sm-10" style="font-size: 16px; color: #252525; text-align: justify;">
                            <textarea class="form-control" id="input-date" style="border: 1px solid black; width: 100%; height: 150px; resize: none;"> </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <!--Stud Sign-->
                        <div class="form-group col-sm-12" style=" color: #252525; text-align: right; margin-top: 5rem;">
                            <a class="btn btn-primary action-btn" data-target="#add-signature" data-toggle="modal" href="#" style="color: #0A0863; font-weight: bold; text-align: center;">
                                <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i> Add Signature
                            </a>
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

                            <p style="font-size: 18px; text-decoration: overline;">Student Signature Over Printed Name</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--Action Taken-->
                        <div class="form-group col-sm-2" style=" color: #252525">
                            <p style="font-size: 18px;">Action Taken:</p>
                        </div>
                        <div class="form-group col-sm-10" style="font-size: 16px; color: #252525; text-align: justify;">
                            <textarea class="form-control" id="input-date" style="border: 1px solid black; width: 100%; height: 150px; resize: none;"> </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <!--Case Status-->
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Case Status:</p>
                        </div>
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <input class="form-check-input" name="radio1" type="radio">Resolved
                        </div>
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <input class="form-check-input" name="radio1" type="radio">Unresolved
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input class="form-check-input" name="radio1" type="radio">Pending
                        </div>
                    </div>

                    <div class="row">
                        <!--Recommendation-->
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Recommendation:</p>
                        </div>
                        <div class="form-group col-sm-10" style="font-size: 16px; color: #252525; text-align: justify; margin-bottom: 2rem;">
                            <textarea class="form-control" id="input-date" style="border: 1px solid black; width: 100%; height: 150px; resize: none;"> </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white; margin-bottom: 3rem;">Complete</button>
                        </div>
                    </div>
                </div> <!-- /.card-body -->
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
