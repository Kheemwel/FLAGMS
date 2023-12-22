<!--FILLOUT HOME VISITATION REQUEST MODAL-->
<div class="modal as-modal fade" data-backdrop="static" id="fill-home-visitation-form" style="max-width: 100%; overflow-y: auto" wire:ignore.self>
    <div class="modal-dialog as-dialog modal-xl">
        <div class="modal-content">
            <div wire:loading wire:target='getHomeVisitationForm, updateHomeVisitationForm'>
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
                <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; text-align: left;">
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
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="homeVisitationFormFields.student_surname">
                            <p style="font-size: 14px; text-align: center;">Surname</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="homeVisitationFormFields.student_firstname">
                            <p style="font-size: 14px; text-align: center;">First Name</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="homeVisitationFormFields.student_middlename">
                            <p style="font-size: 14px; text-align: center;">Middle Name</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-2" style="color: #252525;">
                            <p style="font-size: 18px;">Student No.:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number" wire:model="homeVisitationFormFields.student_no">
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px;">LRN:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number" wire:model="homeVisitationFormFields.lrn">
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px;">Level & Section:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="homeVisitationFormFields.level_section">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-2" style="color: #252525;">
                            <p style="font-size: 18px;">Home Address:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="homeVisitationFormFields.address">
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px;">Birthdate:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="date" wire:model="homeVisitationFormFields.birthday">
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <p style="font-size: 18px;">Age:</p>
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number" wire:model="homeVisitationFormFields.age">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Name of Father:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="homeVisitationFormFields.father_name">
                        </div>
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Contact No.:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number" wire:model="homeVisitationFormFields.father_contact">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Name of Mother:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="homeVisitationFormFields.mother_name">
                        </div>
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Contact No.:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number" wire:model="homeVisitationFormFields.mother_contact">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Name of Guardian:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="homeVisitationFormFields.guardian_name">
                        </div>
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Contact No.:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number" wire:model="homeVisitationFormFields.guardian_contact">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Date of Visitation:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="date" wire:model="homeVisitationFormFields.visitation_date">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Place:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="homeVisitationFormFields.place">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Reason for Home Visitation:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;">
                            <textarea @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; width: 100%; height: 150px; resize: none;" wire:model="homeVisitationFormFields.reason"> </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Remarks / Agreement:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;">
                            <textarea @disabled($role != 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; width: 100%; height: 150px; resize: none;" wire:model="homeVisitationFormFields.remark"> </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 5rem;">
                            @if ($role == 'Parent')
                                <div data-target="#add-signature" data-toggle="modal" wire:click="$set('signatureType', 'parent')">
                                    <a class="btn btn-primary action-btn {{ $homeVisitationFormFields['parent_signature_id'] ? 'd-none' : '' }}" href="#" style="color: #0A0863; font-weight: bold; text-align: center;">
                                        <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i> Add Signature
                                    </a>

                                    @if ($homeVisitationFormFields['parent_signature_id'])
                                        <img height="150px" src="{{ $homeVisitationForm->parent_signature() }}" width='150px'>
                                    @endif
                                </div>
                            @else
                                @if ($homeVisitationFormFields['parent_signature_id'])
                                    <img height="150px" src="{{ $homeVisitationForm->parent_signature() }}" width='150px'>
                                @endif
                            @endif
                            <p style="font-size: 18px; text-decoration: overline;">{{ strtoupper($homeVisitationFormFields['parent_name']) }}</p>
                            <p style="font-size: 16px;">Parent Signature Over Printed Name</p>
                        </div>
                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 5rem;">
                            @if ($role == 'Student')
                                <div data-target="#add-signature" data-toggle="modal" wire:click="$set('signatureType', 'studentHomeVisitation')">
                                    <a class="btn btn-primary action-btn {{ $homeVisitationFormFields['student_signature_id'] ? 'd-none' : '' }}" href="#" style="color: #0A0863; font-weight: bold; text-align: center;">
                                        <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i> Add Signature
                                    </a>

                                    @if ($homeVisitationFormFields['student_signature_id'])
                                        <img height="150px" src="{{ $homeVisitationForm->student_signature() }}" width='150px'>
                                    @endif
                                </div>
                            @else
                                @if ($homeVisitationFormFields['student_signature_id'])
                                    <img height="150px" src="{{ $homeVisitationForm->student_signature() }}" width='150px'>
                                @endif
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
                            @if ($role == 'Teacher')

                                <div data-target="#add-signature" data-toggle="modal" wire:click="$set('signatureType', 'teacher')">
                                    <a class="btn btn-primary action-btn {{ $homeVisitationFormFields['teacher_signature_id'] ? 'd-none' : '' }}" href="#" style="color: #0A0863; font-weight: bold; text-align: center;">
                                        <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i> Add Signature
                                    </a>

                                    @if ($homeVisitationFormFields['teacher_signature_id'])
                                        <img height="150px" src="{{ $homeVisitationForm->teacher_signature() }}" width='150px'>
                                    @endif
                                </div>
                            @else
                                @if ($homeVisitationFormFields['teacher_signature_id'])
                                    <img height="150px" src="{{ $homeVisitationForm->teacher_signature() }}" width='150px'>
                                @endif
                            @endif

                            <p style="font-size: 18px; text-decoration: overline;">{{ $homeVisitationFormFields['teacher_name'] }}</p>
                            <p style="font-size: 16px;">Adviser</p>
                        </div>
                        <div class="form-group col-sm-7" style=" color: #252525; text-align: center; margin-top: 3rem;">
                            @if ($principalPosition == 'Junior High School Principal')
                                <div data-target="#add-signature" data-toggle="modal" wire:click="$set('signatureType', 'juniorPrincipal')">
                                    <a class="btn btn-primary action-btn {{ $homeVisitationFormFields['junior_principal_signature_id'] ? 'd-none' : '' }}" href="#" style="color: #0A0863; font-weight: bold; text-align: center;">
                                        <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i> Add Signature
                                    </a>

                                    @if ($homeVisitationFormFields['junior_principal_signature_id'])
                                        <img height="150px" src="{{ $homeVisitationForm->junior_principal_signature() }}" width='150px'>
                                    @endif
                                </div>
                            @else
                                @if ($homeVisitationFormFields['junior_principal_signature_id'])
                                    <img height="150px" src="{{ $homeVisitationForm->junior_principal_signature() }}" width='150px'>
                                @endif
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
                            @if ($role == 'Guidance')
                                <div data-target="#add-signature" data-toggle="modal" wire:click="$set('signatureType', 'guidance')">
                                    <a class="btn btn-primary action-btn {{ $homeVisitationFormFields['guidance_signature_id'] ? 'd-none' : '' }}" href="#" style="color: #0A0863; font-weight: bold; text-align: center;">
                                        <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i> Add Signature
                                    </a>

                                    @if ($homeVisitationFormFields['guidance_signature_id'])
                                        <img height="150px" src="{{ $homeVisitationForm->guidance_signature() }}" width='150px'>
                                    @endif
                                </div>
                            @else
                                @if ($homeVisitationFormFields['guidance_signature_id'])
                                    <img height="150px" src="{{ $homeVisitationForm->guidance_signature() }}" width='150px'>
                                @endif
                            @endif
                            <p style="font-size: 18px; text-decoration: overline;">{{ $homeVisitationFormFields['guidance_name'] }}</p>
                            <p style="font-size: 16px;">GUIDANCE ADVOCATE</p>
                        </div>
                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 3rem; margin-bottom: 2rem;">
                            @if ($principalPosition == 'Senior High School Principal')
                                <div data-target="#add-signature" data-toggle="modal" wire:click="$set('signatureType', 'seniorPrincipal')">
                                    <a class="btn btn-primary action-btn {{ $homeVisitationFormFields['senior_principal_signature_id'] ? 'd-none' : '' }}" href="#" style="color: #0A0863; font-weight: bold; text-align: center;">
                                        <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i> Add Signature
                                    </a>

                                    @if ($homeVisitationFormFields['senior_principal_signature_id'])
                                        <img height="150px" src="{{ $homeVisitationForm->senior_principal_signature() }}" width='150px'>
                                    @endif
                                </div>
                            @else
                                @if ($homeVisitationFormFields['senior_principal_signature_id'])
                                    <img height="150px" src="{{ $homeVisitationForm->senior_principal_signature() }}" width='150px'>
                                @endif
                            @endif
                            <p style="font-size: 18px; text-decoration: overline;">{{ $homeVisitationFormFields['senior_principal_name'] }}</p>
                            <p style="font-size: 16px;">Senior High School Principal</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <button type="button" data-target="#confirm-home" data-toggle="modal" class="btn btn-block btn-default" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white; margin-bottom: 3rem;">Submit</button>
                        </div>
                    </div>
                </div> <!-- /.card-body -->
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
