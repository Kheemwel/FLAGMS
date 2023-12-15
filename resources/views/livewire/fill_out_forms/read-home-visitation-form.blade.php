<!--READ HOME VISITATION REQUEST MODAL-->
<div class="modal as-modal fade" id="read-home-visitation-form" style="max-width: 100%; overflow-y: auto" wire:ignore.self>
    <div class="modal-dialog as-dialog modal-xl">
        <div class="modal-content" x-on:click.outside="$wire.resetFields()">
            <div wire:loading wire:target='getHomeVisitationForm'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <div>
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                    </div>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="resetFields()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body" id="home-visitation-form-content" style="margin-left: 1rem; margin-right: 1rem;  text-align: left;">
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
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['student_surname'] }}</p>
                            <p style="font-size: 14px;">Surname</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['student_firstname'] }}</p>
                            <p style="font-size: 14px;">First Name</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['student_middlename'] }}</p>
                            <p style="font-size: 14px;">Middle Name</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-2" style="color: #252525;">
                            <p style="font-size: 18px;">Student No.:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['student_no'] }}</p>
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">LRN:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['lrn'] }}</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">Level & Section:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['level_section'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-2" style="color: #252525;">
                            <p style="font-size: 18px;">Home Address:</p>
                        </div>
                        <div class="form-group col-sm-6" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['address'] }}</p>
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">Birthdate:</p>
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['birthday'] }}</p>
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">Age:</p>
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['age'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Name of Father:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['father_name'] }}</p>
                        </div>
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Contact No.:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['father_contact'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Name of Mother:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['mother_name'] }}</p>
                        </div>
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Contact No.:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['mother_contact'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Name of Guardian:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['guardian_name'] }}</p>
                        </div>
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Contact No.:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['guardian_contact'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Date of Visitation:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['visitation_date'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Place:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['place'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Reason for Home Visitation:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;  border: 1px solid black; width: 100%; height: 150px;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['reason'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Remarks / Agreement:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;  border: 1px solid black; width: 100%; height: 150px;">
                            <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['remark'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 5rem;">

                            @if ($homeVisitationFormFields['parent_signature_id'])
                                <img height="150px" src="{{ $homeVisitationForm->parent_signature() }}" width='150px'>
                            @endif
                            <p style="font-size: 18px; text-decoration: overline;">{{ strtoupper($homeVisitationFormFields['parent_name']) }}</p>
                            <p style="font-size: 16px;">Parent Signature Over Printed Name</p>
                        </div>
                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 5rem;">
                            @if ($homeVisitationFormFields['student_signature_id'])
                                <img height="150px" src="{{ $homeVisitationForm->student_signature() }}" width='150px'>
                            @endif
                            <p style="font-size: 18px; text-decoration: overline;">{{ strtoupper($homeVisitationFormFields['student_name']) }}</p>
                            <p style="font-size: 16px;">Student Signature Over Printed Name</p>
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
                            @if ($homeVisitationFormFields['teacher_signature_id'])
                                <img height="150px" src="{{ $homeVisitationForm->teacher_signature() }}" width='150px'>
                            @endif
                            <p style="font-size: 18px; text-decoration: overline;">{{ $homeVisitationFormFields['teacher_name'] }}</p>
                            <p style="font-size: 16px;">Adviser</p>
                        </div>
                        <div class="form-group col-sm-7" style=" color: #252525; text-align: center; margin-top: 3rem;">
                            @if ($homeVisitationFormFields['junior_principal_signature_id'])
                                <img height="150px" src="{{ $homeVisitationForm->junior_principal_signature() }}" width='150px'>
                            @endif
                            <p style="font-size: 18px; text-decoration: overline;">{{ $homeVisitationFormFields['junior_principal_name'] }}</p>
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
                            @if ($homeVisitationFormFields['guidance_signature_id'])
                                <img height="150px" src="{{ $homeVisitationForm->guidance_signature() }}" width='150px'>
                            @endif
                            <p style="font-size: 18px; text-decoration: overline;">{{ $homeVisitationFormFields['guidance_name'] }}</p>
                            <p style="font-size: 16px;">GUIDANCE ADVOCATE</p>
                        </div>
                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 3rem;">
                            @if ($homeVisitationFormFields['senior_principal_signature_id'])
                                <img height="150px" src="{{ $homeVisitationForm->senior_principal_signature() }}" width='150px'>
                            @endif
                            <p style="font-size: 18px; text-decoration: overline;">{{ $homeVisitationFormFields['senior_principal_name'] }}</p>
                            <p style="font-size: 16px;">Senior High School Principal</p>
                        </div>
                    </div>
                </div> <!-- /.card-body -->
                <div class="modal-footer">
                    @if ($role == 'Guidance')
                        <button class="btn btn-block btn-default" onclick="printHomeVisitationForm()" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white; margin-left: 2rem;" type="button">Print</button>
                    @endif
                </div>
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
