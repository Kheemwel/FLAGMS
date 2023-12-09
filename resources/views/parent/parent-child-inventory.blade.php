<div class="modal fade anecdotal-modal" data-backdrop="static" style="max-width: 100%;" id="student-inventory" wire:ignore.self>
    <div class="modal-dialog modal-lg modal-dialog-centered">
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
                <div class="modal-body ml-3 mr-3" style="max-height: 80vh; overflow-y: auto;">
                    <!--MODAL TITLE-->
                    <p class="card-title text-lg font-weight-bold" style="color: #0A0863;">Individual Inventory Report</p> <br><br><br>

                    {{-- STUDENT INFORMATION --}}
                    <div class="d-flex flex-column ml-3">
                        <div class="input-group-prepend">
                            <p class="card-title text-md font-weight-bold mb-3" style="color: #0A0863;">
                                Student Information
                                {{-- <a class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" href="#">
                                    <i class="fa fa-solid fa-pen"></i>
                                </a> --}}
                            </p>
                        </div>
                    </div>

                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Name</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">Val Dela Cruz</p>
                        </div>

                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">LRN</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3  text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">200094873</p>
                        </div>
                    </div>
                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Gender</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">Female</p>
                        </div>
                        
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Status</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">Single</p>
                        </div>
                    </div>
                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Date of Birth</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">1/1/99</p>
                        </div>

                        <div class="form-group col-sm-2 col-md-3 text-sm" style=" color: #252525;">
                            <p class="card-title text-md">Birthplace</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">Dasmarinas, Cavite</p>
                        </div>
                    </div>
                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Citizenship</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">Filipino</p>
                        </div>

                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Religion</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3" style="color: #252525;">
                            <p class="card-title font-weight-bold" >Catholic</p>
                        </div>
                    </div>

                    {{-- ADDRESS --}}
                    <div class="d-flex flex-column ml-3">
                        <div class="input-group-prepend">
                            <p class="card-title text-md font-weight-bold mb-3" style="color: #0A0863;">
                                Address
                                {{-- <a class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" href="#">
                                    <i class="fa fa-solid fa-pen"></i>
                                </a> --}}
                            </p>
                        </div>
                    </div>
                    
                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Street No. / Unit No. </p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">B100 L20 P5</p>
                        </div>

                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Street</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3  text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">Lavender</p>
                        </div>
                    </div>
                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Subdivision / Village / Bldg.</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">Mabuhat City</p>
                        </div>
                        
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Barangay</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">Paliparan 3</p>
                        </div>
                    </div>
                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">City / Municipality</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">Dasmarinas City</p>
                        </div>

                        <div class="form-group col-sm-2 col-md-3 text-sm" style=" color: #252525;">
                            <p class="card-title text-md">Province</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">Cavite</p>
                        </div>
                    </div>
                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Zip Code</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">4114</p>
                        </div>
                    </div>

                    {{-- CONTACT DETAILS --}}
                    <div class="d-flex flex-column ml-3">
                        <div class="input-group-prepend">
                            <p class="card-title text-md font-weight-bold mb-3" style="color: #0A0863;">
                                Contact Details
                                {{-- <a class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" href="#">
                                    <i class="fa fa-solid fa-pen"></i>
                                </a> --}}
                            </p>
                        </div>
                    </div>
                    
                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Telephone No. </p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md"></p>
                        </div>

                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Mobile No. </p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3  text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">0975789878</p>
                        </div>
                    </div>
                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Email Address</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">valdc@gmail.com</p>
                        </div>
                    </div>

                    {{-- EDUCATIONAL HISTORY --}}
                    <div class="d-flex flex-column ml-3">
                        <div class="input-group-prepend">
                            <p class="card-title text-md font-weight-bold mb-3" style="color: #0A0863;">
                                Educational History
                                {{-- <a class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" href="#">
                                    <i class="fa fa-solid fa-pen"></i>
                                </a> --}}
                            </p>
                        </div>
                    </div>

                    <div class="d-flex flex-column ml-3">
                        <div class="input-group-prepend">
                            <p class="card-title text-md font-weight-bold mb-3" style="color: #252525;">
                                Primary School
                                {{-- <a class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" href="#">
                                    <i class="fa fa-solid fa-pen"></i>
                                </a> --}}
                            </p>
                        </div>
                    </div>
                    
                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Name of School</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-5 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">Paliparan 3 Elementary School</p>
                        </div>
                    </div>
                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">School Year</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3  text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">2007 - 2013</p>
                        </div>
                    </div>

                    <div class="d-flex flex-column ml-3">
                        <div class="input-group-prepend">
                            <p class="card-title text-md font-weight-bold mb-3" style="color: #252525;">
                                Junior High School
                                {{-- <a class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" href="#">
                                    <i class="fa fa-solid fa-pen"></i>
                                </a> --}}
                            </p>
                        </div>
                    </div>
                    
                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Name of School</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-5 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">Fiat Lux Academe Dasmarinas </p>
                        </div>
                    </div>
                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">School Year</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3  text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">2014 - 2017</p>
                        </div>
                    </div>

                    {{-- BASIC MEDICAL INFORMATION --}}
                    <div class="d-flex flex-column ml-3">
                        <div class="input-group-prepend">
                            <p class="card-title text-md font-weight-bold mb-3" style="color: #0A0863;">
                                Basic Medical Information
                                {{-- <a class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" href="#">
                                    <i class="fa fa-solid fa-pen"></i>
                                </a> --}}
                            </p>
                        </div>
                    </div>
                    
                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Medical Conditions</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">None</p>
                        </div>
                    </div>

                    <div class="d-flex flex-column ml-3">
                        <div class="input-group-prepend">
                            <p class="card-title text-sm font-weight-bold mb-3" style="color: #252525;">
                                Emergency Contact Details
                                {{-- <a class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" href="#">
                                    <i class="fa fa-solid fa-pen"></i>
                                </a> --}}
                            </p>
                        </div>
                    </div>

                    <div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Name </p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">Amelia Dela Cruz</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Contact No </p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">09756562356</p>
                        </div>
                    </div><div class="row ml-4">
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title text-md">Relationship</p>
                        </div>
                        <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold text-md">Parent</p>
                        </div>
                    </div>

                    
                    
                </div>
            </form>
        </div>
    </div>
</div>
