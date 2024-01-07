<!--FILL VIOLATION REQUEST MODAL-->
<div class="modal as-modal fade" data-backdrop="static" id="fill-violation-form" style="max-width: 100%; overflow-y: auto" wire:ignore.self>
    <div class="modal-dialog as-dialog modal-xl">
        <div class="modal-content">
            <div wire:loading wire:target='getViolationForm, updateViolationForm'>
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
                            <input @disabled($role == 'Student') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="date" wire:model='violationFormFields.date'>
                        </div>
                    </div>

                    <div class="row">
                        <!--Time-->
                        <div class="form-group col-sm-1" style="color: #252525;">
                            <p style="font-size: 18px;">Time:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input @disabled($role == 'Student') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="time" wire:model="violationFormFields.time">
                        </div>
                    </div>

                    <div class="row">
                        <!--Name of Student-->
                        <div class="form-group col-sm-2" style="color: #252525;">
                            <p style="font-size: 18px;">Name of Student:</p>
                        </div>
                        <div class="form-group col-sm-9" style="font-size: 16px; color: #252525;">
                            <input @disabled($role == 'Student') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="violationFormFields.student_name">
                        </div>
                    </div>

                    <div class="row">
                        <!--LEVEL & SEC-->
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Level & Section:</p>
                        </div>
                        <div class="form-group col-sm-8" style="font-size: 16px; color: #252525;">
                            <input @disabled($role == 'Student') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="violationFormFields.level_section">
                        </div>
                    </div>

                    <div class="row">
                        <!--Age/Gender/Date-->
                        <div class="form-group col-sm-1" style=" color: #252525;">
                            <p style="font-size: 18px;">Age:</p>
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <input @disabled($role == 'Student') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number" wire:model="violationFormFields.age">
                        </div>
                        <div class="form-group col-sm-1" style=" color: #252525;">
                            <p style="font-size: 18px;">Gender:</p>
                        </div>
                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                            <input @disabled($role == 'Student') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="violationFormFields.gender">
                        </div>
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Birthdate:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <input @disabled($role == 'Student') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="date" wire:model="violationFormFields.birthday">
                        </div>
                    </div>

                    <div class="row">
                        <!--Parent / Guardian-->
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Parent/Guardian:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input @disabled($role == 'Student') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="violationFormFields.parent">
                        </div>
                    </div>

                    <div class="row">
                        <!--Contact/Address-->
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Contact No.:</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                            <input @disabled($role == 'Student') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="violationFormFields.contact">
                        </div>
                        <div class="form-group col-sm-1" style=" color: #252525;">
                            <p style="font-size: 18px;">Address:</p>
                        </div>
                        <div class="form-group col-sm-6" style="font-size: 16px; color: #252525;">
                            <input @disabled($role == 'Student') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="violationFormFields.address">
                        </div>
                    </div>

                    <div class="row">
                        <!--Teacher in charge-->
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Teacher-in-charge:</p>
                        </div>
                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                            <input @disabled($role == 'Student') class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text" wire:model="violationFormFields.teacher_name">
                        </div>
                    </div>

                    <div class="row">
                        <!--Offense Desc-->
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Type of Offense:</p>
                        </div>
                        @foreach ($offenseTypes as $type)
                            <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                <input @disabled($role == 'Student') @checked($type == $violationFormFields['offense_type']) class="form-check-input" id="cbPass-{{ $type }}" type="radio" value='{{ $type }}' wire:model="violationFormFields.offense_type">{{ $type }}
                            </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <!--Narrative Report-->
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Narrative Report:</p>
                        </div>
                        <div class="form-group col-sm-10" style="font-size: 16px; color: #252525; text-align: justify;">
                            <textarea @disabled($role == 'Guidance') class="form-control" id="input-date" style="border: 1px solid black; width: 100%; height: 150px; resize: none;" wire:model='violationFormFields.narrative'> </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <!--Stud Sign-->
                        <div class="form-group col-sm-12" style=" color: #252525; text-align: right; margin-top: 5rem;">
                            @if ($role == 'Student')
                                <div data-target="#add-signature" data-toggle="modal" wire:click="$set('signatureType', 'studentViolation')">
                                    <a class="btn btn-primary action-btn {{ $violationFormFields['student_signature_id'] ? 'd-none' : '' }}" href="#" style="color: #0A0863; font-weight: bold; text-align: center;">
                                        <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i> Add Signature
                                    </a>

                                    @if ($violationFormFields['student_signature_id'])
                                        <img height="150px" src="{{ $violationForm->student_signature() }}" width='150px'>
                                    @endif
                                </div>
                            @else
                                @if ($violationFormFields['student_signature_id'])
                                    <img height="150px" src="{{ $violationForm->student_signature() }}" width='150px'>
                                @endif
                            @endif
                            <p style="font-size: 18px; text-decoration: overline;">{{ strtoupper($violationFormFields['student_name']) }}</p>
                            <p style="font-size: 16px;">Student Signature Over Printed Name</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--Action Taken-->
                        <div class="form-group col-sm-2" style=" color: #252525">
                            <p style="font-size: 18px;">Action Taken:</p>
                        </div>
                        <div class="form-group col-sm-10" style="font-size: 16px; color: #252525; text-align: justify;">
                            <textarea @disabled($role == 'Student') class="form-control" id="input-date" style="border: 1px solid black; width: 100%; height: 150px; resize: none;" wire:model='violationFormFields.action_taken'> </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <!--Case Status-->
                        <div class="form-group col-sm-3" style=" color: #252525;">
                            <p style="font-size: 18px;">Case Status:</p>
                        </div>
                        @foreach ($caseStatuses as $status)
                            <div class="form-group col-sm-3" style=" color: #252525;">
                                <input @disabled($role == 'Student') @checked($status == $violationFormFields['case_status']) class="form-check-input" name="radio-{{ $status }}" type="radio" value='{{ $status }}' wire:model="violationFormFields.case_status">{{ $status }}
                            </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <!--Recommendation-->
                        <div class="form-group col-sm-2" style=" color: #252525;">
                            <p style="font-size: 18px;">Recommendation:</p>
                        </div>
                        <div class="form-group col-sm-10" style="font-size: 16px; color: #252525; text-align: justify; margin-bottom: 2rem;">
                            <textarea @disabled($role == 'Student') class="form-control" id="input-date" style="border: 1px solid black; width: 100%; height: 150px; resize: none;" wire:model='violationFormFields.recommendation'> </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <button type="button" class="btn btn-block btn-default" data-target="#confirm-violation" data-toggle="modal" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white; margin-bottom: 3rem;">Submit</button>
                        </div>
                    </div>
                </div> <!-- /.card-body -->
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
