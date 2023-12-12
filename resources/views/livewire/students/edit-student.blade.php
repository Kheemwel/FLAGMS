<!--USER INFORMATION EDIT MODAL-->
<div class="modal fade" id="stud-info-edit">
    <div class="modal-dialog">
        <div class="modal-content" style="text-align: left;">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">ANECTODAL</p> <br><br><br>
                    <div class="input-group-prepend">
                        <p class="card-title" style="font-size: 18px; color: #252525; font-weight: bold; margin-bottom: 1rem;"> Student Information</p>
                    </div>
                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <!--------------------STUDENT'S INFORMATION------------------------>
                    <div class="row">
                        <!--FIRSTNAME-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="input-FN" style="font-weight: normal;">First Name</label>
                            <input class="form-control" id="input-FN" style="border: 1px solid black" type="text">
                        </div>
                        <!--LASTNAME-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="input-LN" style="font-weight: normal;">Last Name</label>
                            <input class="form-control" id="input-LN" style="border: 1px solid black" type="text">
                        </div>
                    </div>
                    <!--LRN-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525;">
                        <label for="input-LRN" style="font-weight: normal;">LRN</label>
                        <input class="form-control" id="input-LRN" style="border: 1px solid #252525" type="number">
                    </div>
                    <!--SCHOOL & GRADE LEVEL-->
                    <div class="row">
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <!--SCHOOL LEVEL-->
                            <label for="input-SL" style="font-weight: normal; margin-top: 1rem;">School Level </label>
                            <div class="input-group-prepend">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="input-SL" style="background-color: transparent; color:#252525; font-size: 14px;" type="button">
                                    School Level
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Junior High School</a>
                                    <a class="dropdown-item" href="#">Senior High School</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <!--GRADE LEVEL-->
                            <label for="input-GL" style="font-weight: normal; margin-top: 1rem;">Grade Level </label>
                            <div class="input-group-prepend">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="input-GL" style="background-color: transparent; color:#252525; font-size: 14px;" type="button">
                                    Grade Level
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Grade 7</a>
                                    <a class="dropdown-item" href="#">Grade 8</a>
                                    <a class="dropdown-item" href="#">Grade 9</a>
                                    <a class="dropdown-item" href="#">Grade 10</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--SECTION-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525;">
                        <label for="input-Section" style="font-weight: normal;">Section</label>
                        <input class="form-control" id="input-Section" style="border: 1px solid #252525" type="text">
                    </div>
                    <!--------------------PARENTS' / GUARDIAN'S INFORMATION------------------------>
                    <div class="input-group-prepend">
                        <p class="card-title" style="font-size: 18px; color: #252525; font-weight: bold; margin-bottom: 1rem;"> Parent / Guardian Information</p>
                    </div>
                    <div class="form-group col-sm-13" style="font-size: 16px; color: #252525; font-weight:400;">
                        <label>Name of Father</label>
                    </div>
                    <!--FIRST & LAST NAME-->
                    <div class="row">
                        <!--FIRSTNAME-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="input-PG-FN" style="font-weight: normal;">First Name</label>
                            <input class="form-control" id="input-PG-FN" style="border: 1px solid #252525" type="text">
                        </div>
                        <!--LASTNAME-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="input-PG-LN" style="font-weight: normal;">Last Name</label>
                            <input class="form-control" id="input-PG-LN" style="border: 1px solid #252525" type="text">
                        </div>
                    </div>
                    <!--CONTACT NO.-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525;">
                        <label for="input-PG-Contact" style="font-weight: normal;">Contact No.</label>
                        <input class="form-control" id="input-PG-Contact" style="border: 1px solid #252525" type="number">
                    </div>
                    <!------------------------------------------------------------------------------>

                </div> <!-- /.card-body -->
                <div class="card-footer">
                    <button class="btn btn-primary" style="width: 450px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
