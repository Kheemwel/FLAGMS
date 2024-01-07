<!--READ VIOLATION REQUEST MODAL-->
<div class="modal as-modal fade" id="read-violation-form" style="max-width: 100%; overflow-y: auto" wire:ignore.self>
    <div class="modal-dialog as-dialog modal-xl">
        <div class="modal-content" style="border-radius: 20px;">
            <div wire:loading wire:target='getViolationForm'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <div>
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                    </div>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body" id="violation-form-content" style="margin-left: 1rem; margin-right: 1rem; text-align: left;">
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

                    <div class="col-12 justify-content-center" style="text-align: center; margin-top: 1rem; margin-bottom: 3rem;">
                        <p style="font-size: 22px; color: #252525; line-height: 0%; font-weight: bold;"> GUIDANCE COUNSELING OFFICE</p>
                        <p style="font-size: 22px; color: #252525; line-height: 0%; font-weight: bold;"> VIOLATION FORM</p>
                    </div>

                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <div class="row">
                        <!--Date-->
                        <div class="form-group col-sm-1 mb-0" style="color: #252525;">
                            <p style="font-size: 18px;">Date:</p>
                        </div>
                        <div class="form-group col-sm-3 mb-0" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $violationFormFields['date'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--Time-->
                        <div class="form-group col-sm-1 mb-0" style="color: #252525;">
                            <p style="font-size: 18px;">Time:</p>
                        </div>
                        <div class="form-group col-sm-3 mb-0" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $violationFormFields['time'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--Name of Student-->
                        <div class="form-group col-sm-2 mb-0" style="color: #252525;">
                            <p style="font-size: 18px;">Name of Student:</p>
                        </div>
                        <div class="form-group col-sm-3 mb-0" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $violationFormFields['student_name'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--LEVEL & SEC-->
                        <div class="form-group col-sm-2 mb-0" style=" color: #252525;">
                            <p style="font-size: 18px;">Level & Section:</p>
                        </div>
                        <div class="form-group col-sm-3 mb-0" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $violationFormFields['level_section'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--Age/Gender/Date-->
                        <div class="form-group col-sm-1 mb-0" style=" color: #252525;">
                            <p style="font-size: 18px;">Age:</p>
                        </div>
                        <div class="form-group col-sm-1 mb-0" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $violationFormFields['age'] }}</p>
                        </div>
                        <div class="form-group col-sm-1 mb-0" style=" color: #252525;">
                            <p style="font-size: 18px;">Gender:</p>
                        </div>
                        <div class="form-group col-sm-1 mb-0" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $violationFormFields['gender'] }}</p>
                        </div>
                        <div class="form-group col-sm-2 mb-0" style=" color: #252525;">
                            <p style="font-size: 18px;">Birthdate:</p>
                        </div>
                        <div class="form-group col-sm-2 mb-0" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $violationFormFields['birthday'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--Parent / Guardian-->
                        <div class="form-group col-sm-2 mb-0" style=" color: #252525;">
                            <p style="font-size: 18px;">Parent/Guardian:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $violationFormFields['parent'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--Contact/Address-->
                        <div class="form-group col-sm-2 mb-0" style=" color: #252525;">
                            <p style="font-size: 18px;">Contact No.:</p>
                        </div>
                        <div class="form-group col-sm-2 mb-0" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $violationFormFields['contact'] }}</p>
                        </div>
                        <div class="form-group col-sm-1 mb-0" style=" color: #252525;">
                            <p style="font-size: 18px;">Address:</p>
                        </div>
                        <div class="form-group col-sm-6 mb-0" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $violationFormFields['address'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--Teacher in charge-->
                        <div class="form-group col-sm-2 mb-0" style=" color: #252525;">
                            <p style="font-size: 18px;">Teacher-in-charge:</p>
                        </div>
                        <div class="form-group col-sm-3 mb-0" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $violationFormFields['teacher_name'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--Offense Desc-->
                        <div class="form-group col-sm-3 mb-0" style=" color: #252525;">
                            <p style="font-size: 18px;">Type of Offense:</p>
                        </div>
                        @foreach ($offenseTypes as $type)
                        <div class="form-group col-sm-2 mb-0" style="font-size: 16px; color: #252525;">
                            <input @checked($type == $violationFormFields['offense_type']) class="form-check-input" id="cbPass" type="radio" value='{{ $type }}' wire:model='violationFormFields.offense_type' disabled>{{ $type }}
                        </div>
                        
                        @endforeach
                    </div>

                    <div class="row">
                        <!--Narrative Report-->
                        <div class="form-group col-sm-2 mb-0" style=" color: #252525;">
                            <p style="font-size: 18px;">Narrative Report:</p>
                        </div>
                        <div class="form-group col-sm-10 mb-0 text-justify" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $violationFormFields['narrative'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--Stud Sign-->
                        <div class="form-group col-sm-12 mb-0" style=" color: #252525; text-align: right; margin-top: 1rem;">
                            @if ($violationFormFields['student_signature_id'])
                                <img height="150px" src="{{ $violationForm->student_signature() }}" width='150px'>
                            @endif
                            <p style="font-size: 18px; text-decoration: overline;">{{ strtoupper($violationFormFields['student_name']) }}</p>
                            <p style="font-size: 16px;">Student Signature Over Printed Name</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--Action Taken-->
                        <div class="form-group col-sm-2 mb-0" style=" color: #252525">
                            <p style="font-size: 18px;">Action Taken:</p>
                        </div>
                        <div class="form-group col-sm-10 mb-0 text-justify" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $violationFormFields['action_taken'] }}</p>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <!--Case Status-->
                        <div class="form-group col-sm-3 mb-0" style=" color: #252525;">
                            <p style="font-size: 18px;">Case Status:</p>
                        </div>
                        @foreach ($caseStatuses as $status)
                        <div class="form-group col-sm-2 mb-0" style="color: #252525;">
                            <input @checked($status == $violationFormFields['case_status']) class="form-check-input" name="radio1" type="radio" value="{{ $status }}" wire:model="violationFormFields.case_status" disabled>{{ $status }}
                        </div>
                        
                        @endforeach
                    </div>

                    <div class="row">
                        <!--Recommendation-->
                        <div class="form-group col-sm-2 mb-0" style=" color: #252525;">
                            <p style="font-size: 18px;">Recommendation:</p>
                        </div>
                        <div class="form-group col-sm-10 mb-0 text-justify" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $violationFormFields['recommendation'] }}</p>
                        </div>
                    </div>
                </div> <!-- /.card-body -->

                <div class="modal-footer">
                    <button class="btn btn-block btn-default" onclick="printViolationForm()" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white; margin-left: 2rem;" type="button">Print</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
