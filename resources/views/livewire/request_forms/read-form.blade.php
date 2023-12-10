<div class="modal fade" id="read-request-form" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content" x-on:click.outside="$wire.resetFields()">
            <div wire:loading wire:target='read'>
                <div class="overlay bg-white">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="resetFields()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; max-height: 500px; overflow-y: auto; text-align: left;">
                @if ($homeVisitationForm)
                    <!--MODAL TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">REQUEST FOR HOME VISITATION FORM</p> <br><br><br>

                    <div class="row">
                        <!--NAME OF STUDENT-->
                        <div class="form-group col-sm-6" style="color: #252525;">
                            <p style="font-size: 14px;">Name of Student</p>
                        </div>
                        <div class="form-group col-sm-5" style="font-size: 16px; color: #252525;">
                            <p style="font-weight: bold;">{{ $homeVisitationForm->student->getUserAccount->getNameAttribute() }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--SCHOOL LEVEL-->
                        <div class="form-group col-sm-6" style="color: #252525;">
                            <p style="font-size: 14px;">School Level</p>
                        </div>
                        <div class="form-group col-sm-5" style="font-size: 16px; color: #252525;">
                            <p style="font-weight: bold;">{{ $homeVisitationForm->student->schoolLevel->school_level }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--GRADE LEVEL-->
                        <div class="form-group col-sm-6" style=" color: #252525;">
                            <p style="font-size: 14px;">Grade Level</p>
                        </div>
                        <div class="form-group col-sm-5" style="font-size: 16px; color: #252525;">
                            <p style="font-weight: bold;">{{ $homeVisitationForm->student->gradeLevel->grade_level }}</p>
                        </div>
                    </div>

                    <!--TYPE OF DEFENSE-->
                    <div class="row">
                        <div class="form-group col-sm-6" style="color: #252525;">
                            <p style="font-size: 14px; ">Reason for Home Visitation</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;">
                            <p style="font-weight: bold;">
                                {{ $homeVisitationForm->reason }}
                            </p>
                        </div>
                    </div>

                    @if ($homeVisitationForm->requestForm->isDisapproved())
                        <div class="row">
                            <div class="form-group col-sm-6" style="color: #252525;">
                                <p style="font-size: 14px; ">Reason of Disapproval</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;">
                                <p style="font-weight: bold;">
                                    {{ $homeVisitationForm->requestForm->disapproval_reason }}
                                </p>
                            </div>
                        </div>
                    @endif
                @elseif ($violationForm)
                    <!--MODAL TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">REQUEST FOR VIOLATION FORM</p> <br><br><br>

                    <div class="row">
                        <!--NAME OF STUDENT-->
                        <div class="form-group col-sm-5" style="color: #252525;">
                            <p style="font-size: 14px;">Name of Students Involve</p>
                        </div>

                        <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                            @if ($violationForm)
                                @foreach ($violationForm->students as $student)
                                    <p style="font-weight: bold;">{{ $student->getUserAccount->getNameAttribute() }}</p>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6" style="color: #252525;">
                            <p style="font-size: 14px; ">Reason of Violation</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;">
                            <p style="font-weight: bold;">
                                {{ $violationForm->reason }}
                            </p>
                        </div>
                    </div>

                    @if ($violationForm->requestForm->isDisapproved())
                        <div class="row">
                            <div class="form-group col-sm-6" style="color: #252525;">
                                <p style="font-size: 14px; ">Reason of Disapproval</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;">
                                <p style="font-weight: bold;">
                                    {{ $violationForm->requestForm->disapproval_reason }}
                                </p>
                            </div>
                        </div>
                    @endif
                @endif
            </div> <!-- /.card-body -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal end-->
