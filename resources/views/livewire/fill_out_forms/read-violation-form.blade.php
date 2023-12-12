<!--READ VIOLATION REQUEST MODAL-->
<div class="modal as-modal fade" id="read-violation-form" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog as-dialog modal-xl">
        <div class="modal-content" x-on:click.outside="$wire.resetFields()">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="resetFields()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                @if ($violationForm)
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
                            <p style="font-size: 22px; color: #252525; line-height: 0%; font-weight: bold;"> GUIDANCE COUNSELING OFFICE</p>
                            <p style="font-size: 22px; color: #252525; line-height: 0%; font-weight: bold;"> VIOLATION FORM</p>
                        </div>

                        <!--IMPORTANT USER DETAILS FORM SECTION-->
                        <div class="row">
                            <!--Date-->
                            <div class="form-group col-sm-1" style="color: #252525;">
                                <p style="font-size: 18px;">Date:</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">09/08/2023</p>
                            </div>
                        </div>

                        <div class="row">
                            <!--Time-->
                            <div class="form-group col-sm-1" style="color: #252525;">
                                <p style="font-size: 18px;">Time:</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">11:37 AM</p>
                            </div>
                        </div>

                        <div class="row">
                            <!--Name of Student-->
                            <div class="form-group col-sm-2" style="color: #252525;">
                                <p style="font-size: 18px;">Name of Student:</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">{{ $violationForm->student->name }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <!--LEVEL & SEC-->
                            <div class="form-group col-sm-2" style=" color: #252525;">
                                <p style="font-size: 18px;">Level & Section:</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">{{ 'Grade ' . $violationForm->student->getGradeLevel() . ' Mars' }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <!--Age/Gender/Date-->
                            <div class="form-group col-sm-1" style=" color: #252525;">
                                <p style="font-size: 18px;">Age:</p>
                            </div>
                            <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">22 </p>
                            </div>
                            <div class="form-group col-sm-1" style=" color: #252525;">
                                <p style="font-size: 18px;">Gender:</p>
                            </div>
                            <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">F</p>
                            </div>
                            <div class="form-group col-sm-2" style=" color: #252525;">
                                <p style="font-size: 18px;">Birthdate:</p>
                            </div>
                            <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">12/06/01</p>
                            </div>
                        </div>

                        <div class="row">
                            <!--Parent / Guardian-->
                            <div class="form-group col-sm-2" style=" color: #252525;">
                                <p style="font-size: 18px;">Parent/Guardian:</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">{{ $violationForm->student->parentName() }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <!--Contact/Address-->
                            <div class="form-group col-sm-2" style=" color: #252525;">
                                <p style="font-size: 18px;">Contact No.:</p>
                            </div>
                            <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">0975 448 6759 </p>
                            </div>
                            <div class="form-group col-sm-1" style=" color: #252525;">
                                <p style="font-size: 18px;">Address:</p>
                            </div>
                            <div class="form-group col-sm-6" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">B100 L2 P4 Mabuhat City, Paliparan 3 Dasmarinas, Cavite</p>
                            </div>
                        </div>

                        <div class="row">
                            <!--Teacher in charge-->
                            <div class="form-group col-sm-2" style=" color: #252525;">
                                <p style="font-size: 18px;">Teacher-in-charge:</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">{{ $violationForm->violationForm->teacherName() }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <!--Offense Desc-->
                            <div class="form-group col-sm-3" style=" color: #252525;">
                                <p style="font-size: 18px;">Type of Offense:</p>
                            </div>
                            @foreach ($offenseTypes as $type)
                                <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                    <input class="form-check-input" id="cbPass" type="radio" value='{{ $type }}' wire:model='violationFormFields.offense_type'>{{ $type }}
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <!--Narrative Report-->
                            <div class="form-group col-sm-2" style=" color: #252525;">
                                <p style="font-size: 18px;">Narrative Report:</p>
                            </div>
                            <div class="form-group col-sm-10" style="font-size: 16px; color: #252525; text-align: justify; border: 1px solid black; width: 100%; height: 150px;">
                                <p style="font-size: 18px; text-decoration: underline;">{{ $violationForm->narrative }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <!--Stud Sign-->
                            <div class="form-group col-sm-12" style=" color: #252525; text-align: right; margin-top: 5rem;">
                                <p style="font-size: 18px; text-decoration: overline;">Student Signature Over Printed Name</p>
                            </div>
                        </div>

                        <div class="row">
                            <!--Action Taken-->
                            <div class="form-group col-sm-2" style=" color: #252525">
                                <p style="font-size: 18px;">Action Taken:</p>
                            </div>
                            <div class="form-group col-sm-10" style="font-size: 16px; color: #252525; text-align: justify; border: 1px solid black; width: 100%; height: 150px;">
                                <p style="font-size: 18px; text-decoration: underline;">{{ $violationForm->action_taken }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <!--Case Status-->
                            <div class="form-group col-sm-3" style=" color: #252525;">
                                <p style="font-size: 18px;">Case Status:</p>
                            </div>
                            @foreach ($caseStatuses as $status)
                                <div class="form-group col-sm-3" style=" color: #252525;">
                                    <input class="form-check-input" value="{{ $status }}" name="radio1" type="radio" wire:model="violationFormFields.case_status">{{ $status }}
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <!--Recommendation-->
                            <div class="form-group col-sm-2" style=" color: #252525;">
                                <p style="font-size: 18px;">Recommendation:</p>
                            </div>
                            <div class="form-group col-sm-10" style="font-size: 16px; color: #252525; text-align: justify; margin-bottom: 2rem; border: 1px solid black; width: 100%; height: 150px;">
                                <p style="font-size: 18px; text-decoration: underline;">{{ $violationForm->recommendation }}</p>
                            </div>
                        </div>
                    </div> <!-- /.card-body -->
                @endif
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
