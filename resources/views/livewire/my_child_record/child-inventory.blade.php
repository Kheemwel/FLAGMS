<div class="modal fade anecdotal-modal" data-backdrop="static" id="student-inventory" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="border-radius: 20px;">
            <div wire:loading wire:target='viewInventory'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <div>
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                    </div>
                </div>
            </div>
            <div class="modal-header border-0 p-3">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
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
                            </p>
                        </div>
                    </div>

                    @if ($inventory)
                        <!--IMPORTANT USER DETAILS FORM SECTION-->
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Name</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->name }}</p>
                            </div>

                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">LRN</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3  text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->lrn }}</p>
                            </div>
                        </div>
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Gender</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->gender }}</p>
                            </div>

                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Status</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->status }}</p>
                            </div>
                        </div>
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Date of Birth</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->birthday }}</p>
                            </div>

                            <div class="form-group col-sm-2 col-md-3 text-sm" style=" color: #252525;">
                                <p class="card-title text-md">Birthplace</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->birth_place }}</p>
                            </div>
                        </div>
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Citizenship</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->citizenship }}</p>
                            </div>

                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Religion</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3" style="color: #252525;">
                                <p class="card-title font-weight-bold">{{ $inventory->religion }}</p>
                            </div>
                        </div>

                        {{-- ADDRESS --}}
                        <div class="d-flex flex-column ml-3">
                            <div class="input-group-prepend">
                                <p class="card-title text-md font-weight-bold mb-3" style="color: #0A0863;">
                                    Address
                                </p>
                            </div>
                        </div>

                        <!--IMPORTANT USER DETAILS FORM SECTION-->
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Street No. / Unit No. </p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->street_no }}</p>
                            </div>

                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Street</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3  text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->street }}</p>
                            </div>
                        </div>
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Subdivision / Village / Bldg.</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->subdivision }}</p>
                            </div>

                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Barangay</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->barangay }}</p>
                            </div>
                        </div>
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">City / Municipality</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->city }}</p>
                            </div>

                            <div class="form-group col-sm-2 col-md-3 text-sm" style=" color: #252525;">
                                <p class="card-title text-md">Province</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->province }}</p>
                            </div>
                        </div>
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Zip Code</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->zipcode }}</p>
                            </div>
                        </div>

                        {{-- CONTACT DETAILS --}}
                        <div class="d-flex flex-column ml-3">
                            <div class="input-group-prepend">
                                <p class="card-title text-md font-weight-bold mb-3" style="color: #0A0863;">
                                    Contact Details
                                </p>
                            </div>
                        </div>

                        <!--IMPORTANT USER DETAILS FORM SECTION-->
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Telephone No. </p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->tel_no }}</p>
                            </div>

                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Mobile No. </p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3  text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->mobile_no }}</p>
                            </div>
                        </div>
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Email Address</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->email }}</p>
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
                                </p>
                            </div>
                        </div>

                        <!--IMPORTANT USER DETAILS FORM SECTION-->
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Name of School</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-5 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->primary_school }}</p>
                            </div>
                        </div>
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">School Year</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3  text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ "$inventory->primary_start-$inventory->primary_end" }}</p>
                            </div>
                        </div>

                        <div class="d-flex flex-column ml-3">
                            <div class="input-group-prepend">
                                <p class="card-title text-md font-weight-bold mb-3" style="color: #252525;">
                                    Junior High School
                                </p>
                            </div>
                        </div>

                        <!--IMPORTANT USER DETAILS FORM SECTION-->
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Name of School</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-5 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->junior_school }}</p>
                            </div>
                        </div>
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">School Year</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3  text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ "$inventory->junior_start-$inventory->junior_end" }}</p>
                            </div>
                        </div>

                        <div class="d-flex flex-column ml-3">
                            <div class="input-group-prepend">
                                <p class="card-title text-md font-weight-bold mb-3" style="color: #252525;">
                                    Senior High School
                                </p>
                            </div>
                        </div>

                        <!--IMPORTANT USER DETAILS FORM SECTION-->
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Name of School</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-5 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->senior_school }}</p>
                            </div>
                        </div>
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">School Year</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3  text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ "$inventory->senior_start-$inventory->senior_end" }}</p>
                            </div>
                        </div>

                        {{-- BASIC MEDICAL INFORMATION --}}
                        <div class="d-flex flex-column ml-3">
                            <div class="input-group-prepend">
                                <p class="card-title text-md font-weight-bold mb-3" style="color: #0A0863;">
                                    Basic Medical Information
                                </p>
                            </div>
                        </div>

                        <!--IMPORTANT USER DETAILS FORM SECTION-->
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Medical Conditions</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->medical_conditions }}</p>
                            </div>
                        </div>
                        <!--IMPORTANT USER DETAILS FORM SECTION-->
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Allergies</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->allergies }}</p>
                            </div>
                        </div>

                        <div class="d-flex flex-column ml-3">
                            <div class="input-group-prepend">
                                <p class="card-title text-sm font-weight-bold mb-3" style="color: #252525;">
                                    Emergency Contact Details
                                </p>
                            </div>
                        </div>

                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Name </p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ "$inventory->emergency_first_name $inventory->emergency_last_name" }}</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Contact No </p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->emergency_contact }}</p>
                            </div>
                        </div>
                        <div class="row ml-4">
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title text-md">Relationship</p>
                            </div>
                            <div class="form-group col-sm-2 col-md-3 text-sm" style="color: #252525;">
                                <p class="card-title font-weight-bold text-md">{{ $inventory->emergency_relationship }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
