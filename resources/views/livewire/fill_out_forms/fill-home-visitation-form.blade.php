<!--FILLOUT HOME VISITATION REQUEST MODAL-->
<div class="modal as-modal fade" id="fill-home-visitation-form" data-backdrop="static" style="max-width: 100%;" wire:ignore.self>
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
                        <p style="font-size: 22px; color: #252525; line-height: 0%; font-weight: bold;"> HOME VISITATION FORM</p>
                    </div>

                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <div class="row">
                        <!--Name of Stud-->
                        <div class="form-group col-sm-2" style="color: #252525;">
                            <p style="font-size: 18px;">Name of Student:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input wire:model='homeVisitationFormFields.student_last_name' class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                            <p style="font-size: 14px; text-align: center;">Surname</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input wire:model='homeVisitationFormFields.student_first_name' class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                            <p style="font-size: 14px; text-align: center;">First Name</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                            <p style="font-size: 14px; text-align: center;">Middle Name</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-2" style="color: #252525;">
                            <p style="font-size: 18px;">Student No.:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px;">LRN:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <input wire:model='homeVisitationFormFields.lrn' class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px;">Level & Section:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-2" style="color: #252525;">
                            <p style="font-size: 18px;">Home Address:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px;">Birthdate:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="date">
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px;">Age:</p>
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Name of Father:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                        </div>
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Contact No.:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Name of Mother:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                        </div>
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Contact No.:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Name of Guardian:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                        </div>
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Contact No.:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Date of Visitation:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input wire:model='homeVisitationFormFields.visitation_date' class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="date">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Place:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input wire:model='homeVisitationFormFields.place' class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Reason for Home Visitation:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;">
                            <textarea wire:model='homeVisitationFormFields.reason' class="form-control" id="input-date" style="border: 1px solid black; width: 100%; height: 150px; resize: none;"> </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Remarks / Agreement:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;">
                            <textarea wire:model='homeVisitationFormFields.remark' class="form-control" id="input-date" style="border: 1px solid black; width: 100%; height: 150px; resize: none;"> </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 5rem;">
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

                            <p style="font-size: 18px; text-decoration: overline;">Parent Signature Over Printed Name</p>
                        </div>
                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 5rem;">
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
                        <div class="form-group col-sm-5" style=" color: #252525;">
                            <p style="font-size: 18px;">Prepared By:</p>
                        </div>
                        <div class="form-group col-sm-5" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">Approved By:</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-5" style=" color: #252525; text-align: center; margin-top: 3rem;">
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
                            <p style="font-size: 18px; text-decoration: overline;">SHERYL FERRERAS-FAX, MAEd </p>
                            <p style="font-size: 18px; text-decoration: overline;">Adviser</p>
                        </div>
                        <div class="form-group col-sm-7" style=" color: #252525; text-align: center; margin-top: 3rem;">
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

                            <p style="font-size: 18px; text-decoration: overline;">SHERYL FERRERAS-FAX, MAEd </p>
                            <p style="font-size: 16px;">Junior High School Principal</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-5" style=" color: #252525;">
                            <p style="font-size: 18px;">Noted By:</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 3rem;">
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

                            <p style="font-size: 18px; text-decoration: overline;">SHERYL FERRERAS-FAX, MAEd</p>
                            <p style="font-size: 16px;">Junior High School Principal</p>
                        </div>
                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 3rem; margin-bottom: 2rem;">
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

                            <p style="font-size: 18px; text-decoration: overline;">ROSAHLE S. PAGADORA, MS
                                Senior High School Principal</p>
                            <p style="font-size: 16px;">Senior High School Principal</p>
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