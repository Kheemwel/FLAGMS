<div class="modal fade anecdotal-modal" data-backdrop="static" id="anecdotal-btn" wire:ignore.self>
    <div class="modal-dialog anecdotal-dialog modal-xl">
        <div class="modal-content" style="border-radius: 20px;">
            <div wire:loading wire:target='getData'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <div>
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                    </div>
                </div>
            </div>
            <div class="modal-header border-0 p-3">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputs()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body ml-3 mr-3" style="max-height: 500px; overflow-y: auto; overflow-x:hidden; max-width: 100%;">
                    <!--MODAL TITLE-->
                    <p class="card-title text-lg font-weight-bold" style="color: #0A0863;">ANECDOTAL RECORD</p> <br><br><br>

                    <!--TABLE FOR ANECDOTAL RECORDS-->
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-center">
                                    <thead class="text-center" style="color: white; background-color: #7684B9;">
                                    <tr>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Offenses</th>
                                        <th>Disciplinary Action</th>
                                        <th>Student Signature</th>
                                        <th>Name of Guardian</th>
                                        <th>Signature</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody style="font-weight: bold;">
                                    <tr>
                                        <td>Val Dela Cruz</td>
                                        <td>Senior High School</td>
                                        <td>Grade 11</td>
                                        <td>Anne Lopez</td>
                                        <td>
                                            <!--ANECDOTAL STUDENT INFO EDIT BUTTON-->
                                            <a class="btn btn-primary action-btn" data-target="#add-signature" data-toggle="modal" href="#">
                                                <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i>
                                            </a>
    
                                            <!--ADD SIGNATURE MODAL-->
                                            <div class="modal fade as-modal" id="add-signature" style="max-width: 100%;">
                                                <div class="modal-dialog as-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header p-2 border-0">
                                                            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form>
                                                            <div class="modal-body ml-2 mr-2" style="max-height: 500px;">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <!-- SIGNATURE TABS -->
                                                                        <div class="card border-0" style="box-shadow: none; outline: none;">
                                                                            <div class="card-header d-flex p-0">
                                                                                <ul class="nav nav-pills flex-wrap p-2">
                                                                                    <li class="nav-item">
                                                                                        <!--DRAW BTN-->
                                                                                        <a class="nav-link active" data-toggle="tab" href="#draw-mode-tab">
                                                                                            <img alt="draw button" height="40" src="images/draw.png" width="40">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <!--IMAGE BTN-->
                                                                                        <a class="nav-link" data-toggle="tab" href="#upload-image-tab">
                                                                                            <img class="text-left" alt="image button" height="40" src="images/imagebtn.png" width="40">
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div><!-- /.card-header -->
                                                                            <div class="card-body">
                                                                                <div class="tab-content">
                                                                                    <div class="tab-pane active" id="draw-mode-tab">
                                                                                        <div class="form-group col-sm-12 pt-5 pb-5" style="border: 1px solid gray;">
                                                                                            <label class="text-sm font-weight-light" style="color: gray;">Draw Here</label>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <!--CLEAR & DRAW/ SUBMIT BUTTONS-->
                                                                                            <div class="form-group col-12 col-sm-6">
                                                                                                <button class="btn btn-block btn-default float-right clear-button text-sm" style="width: 100%;" type="button">Clear and draw again</button>
                                                                                            </div>
                                                                                            <div class="form-group col-12 col-sm-6 button-container text-sm" style="color: #252525;">
                                                                                                <button class="btn btn-block btn-primary text-sm border-0" style="width: 100%; background-color: #0A0863;" type="button">Submit</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><!-- /.tab-pane -->
                                            
                                                                                    <div class="tab-pane" id="upload-image-tab">
                                                                                        <!--UPLOAD IMAGE TAB-->
                                                                                        <div class="form-group col-sm-12 p-5 d-flex flex-column justify-content-center align-items-center text-center" style="border: 1px solid gray;">
                                                                                            <div>
                                                                                                <label class="text-sm font-weight-light" style="color: gray;">Drag an image here <br> or </label>
                                                                                            </div>
                                                                                            <div>
                                                                                                <button class="btn btn-block btn-primary text-sm border-0" style="width: 100%; background-color: #0A0863;" type="button">Choose Image</button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <!--SUBMIT BUTTON-->
                                                                                            <div class="form-group col-12 text-sm" style="color: #252525;">
                                                                                                <button class="btn btn-block btn-primary" style="font-size: 14px; background-color: #0A0863; border: transparent;" type="button">Submit</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><!-- /.tab-pane -->
                                                                                </div><!-- /.tab-content -->
                                                                            </div><!-- /.card-body -->
                                                                        </div><!-- ./card -->
                                                                    </div><!-- /.col -->
                                                                </div><!-- /.row -->
                                                            </div> <!-- /.card-body -->
                                                        </form>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal end-->
                                        </td>
    
                                        <td class="text-center">Name of Guardian</td>
                                        <td class="text-center">
                                            <a class="btn btn-primary action-btn" data-target="#add-signature" data-toggle="modal" href="#">
                                                <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
