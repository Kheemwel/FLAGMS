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
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputs()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto; max-width: 100%;">
                    <!--MODAL TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">ANECDOTAL RECORD</p> <br><br><br>

                    <div style="display: flex; flex-direction: column;">
                        <div class="input-group-prepend">
                            <p class="card-title" style="font-size: 18px; color: #0A0863; font-weight: bold; margin-bottom: 1rem;">
                                Student Information
                                {{-- <a class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" href="#">
                                    <i class="fa fa-solid fa-pen"></i>
                                </a> --}}
                            </p>
                        </div>
                    </div>
                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <div class="row">
                        <!--NAME-->
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title">Name</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title" style="font-weight: bold;">{{ $student_name }}</p>
                        </div>

                        <!--LRN-->
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title">LRN</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title" style="font-weight: bold;">{{ $lrn }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <!--SCHOOL LEVEL-->
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title">School Level</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title" style="font-weight: bold;">{{ $school_level }}</p>
                        </div>

                        <!--GRADE & SECTION-->
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title">Grade</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title" style="font-weight: bold;">{{ $grade_level }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <!--FATHER'S NAME-->
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title">Father's Name</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title" style="font-weight: bold;">Benjamin Beller</p>
                        </div>

                        <!--FATHER'S CONTACT NO-->
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title">Contact No.</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title" style="font-weight: bold;">0915 445 6789</p>
                        </div>
                    </div>
                    <div class="row">
                        <!--MOTHER'S NAME-->
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title">Mother's Name</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title" style="font-weight: bold;">Amelia Beller</p>
                        </div>

                        <!--FATHER'S CONTACT NO-->
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title">Contact No.</p>
                        </div>
                        <div class="form-group col-sm-2" style="font-size: 12px; color: #252525;">
                            <p class="card-title" style="font-weight: bold;">0939 258 1123</p>
                        </div>
                    </div>

                    <br><br>
                    <div class="input-group-prepend">
                        <p class="card-title" style="font-size: 18px; color: #0A0863; font-weight: bold; margin-bottom: 1rem; "> Table for Anecdotal Records </p>
                    </div>
                    <!--TABLE FOR ANECDOTAL RECORDS-->
                    <div style="display: flex; flex-direction: column;">
                        <table style="border: rgb(101, 101, 101) 1px solid; text-align: center; margin-right: 1rem;">
                            <thead style="background-color: #7684B9; color: white;">
                                <tr>
                                    <th style="border: rgb(101, 101, 101) 1px solid;">Date</th>
                                    <th style="border: rgb(101, 101, 101) 1px solid;">Time</th>
                                    <th style="border: rgb(101, 101, 101) 1px solid;">Offenses</th>
                                    <th style="border: rgb(101, 101, 101) 1px solid;">Disciplinary Action</th>
                                    <th style="border: rgb(101, 101, 101) 1px solid;">Student Signature</th>
                                    <th style="border: rgb(101, 101, 101) 1px solid;">Name of Guardian</th>
                                    <th style="border: rgb(101, 101, 101) 1px solid;">Signature</th>
                                    <th style="border: rgb(101, 101, 101) 1px solid;">Action</th>
                                </tr>
                            </thead>
                            <tbody style="font-weight: bold;">
                                @if ($anecdotal && in_array('ViewStudentsAnecdotal', $privileges))
                                    @foreach ($anecdotal as $anec)
                                        <tr>
                                            <td style="text-align: center;">{{ date('F d, Y', strtotime($anec->date)) }}</td>
                                            <td style="text-align: center;">{{ date('h:i A', strtotime($anec->time)) }}</td>
                                            <td style="text-align: center;">{{ $anec->getOffense->offense_name }}</td>
                                            <td style="text-align: center;">{{ $anec->getDisciplinaryAction->action }}</td>
                                            <td style="text-align: center;"><img height="150px" src="{{ $anec->student_signature() }}" width="150px"></td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><img height="150px" src="{{ $anec->guardian_signature() }}" width="150px"></td>
                                            @if (in_array('WriteStudentsAnecdotal', $privileges))
                                                <td style="text-align: center;">
                                                    <button class="btn btn-primary action-btn" title='Edit Row' tooltip='enable' wire:click.prevent=''>
                                                        <i class="fa fa-solid fa-pen"></i>
                                                    </button>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @endif
                                @if (in_array('WriteStudentsAnecdotal', $privileges) && !$this->hasDismissal)
                                    <tr>
                                        <form>
                                            <td style="text-align: center;">
                                                <input id='datePicker' type="date" wire:model='input_date'>
                                                <x-error field='input_date' />
                                            </td>
                                            <td style="text-align: center;">
                                                <input type="time" wire:model='input_time'>
                                                <x-error field='input_time' />
                                            </td>
                                            <td style="text-align: center;">
                                                <div wire:ignore x-data="initSelect2()">
                                                    <select class="form-select" data-placeholder="Select Offense" id="single-select-optgroup-clear-field" style="border: 1px solid #252525;">
                                                        <option></option>
                                                        @foreach ($offenses as $offense)
                                                            <option value="{{ $offense->id }}">{{ $offense->offense_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <x-error field='input_offense' />
                                            </td>
                                            <td style="text-align: center;">{{ $display_disciplinary_action }}</td>
                                            <td data-target="#student-signature" data-toggle="modal" style="text-align: center;" wire:click.prevent>
                                                <button class="btn btn-primary action-btn {{ $studentSignature ? 'd-none' : '' }}" style="color: #0A0863; font-weight: bold;">
                                                    <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i> Add Signature
                                                </button>
                                                {{-- @if (!is_string($studentSignature) && ($studentSignature && in_array($studentSignature->getClientOriginalExtension(), ['png', 'jpg', 'jpeg']) && strpos($studentSignature->getMimeType(), 'image/') === 0))
                                                    <img height="150px" src="{{ $studentSignature->temporaryUrl() }}" width='150px'>
                                                @elseif (is_string($studentSignature))
                                                    <img height="150px" src="{{ $studentSignature }}" width='150px'>
                                                @endif --}}

                                                @if ($studentSignature)
                                                    <img height="150px" src="{{ $studentSignature }}" width='150px'>
                                                @endif
                                            </td>
                                            <td style="text-align: center;"><input type="text"></td>
                                            <td style="text-align: center;"data-target="#parent-signature" data-toggle="modal" wire:click.prevent=''>
                                                <button class="btn btn-primary action-btn {{ $guardianSignature ? 'd-none' : '' }}"  style="color: #0A0863; font-weight: bold;">
                                                    <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i> Add Signature
                                                </button>

                                                @if ($guardianSignature)
                                                    <img height="150px" src="{{ $guardianSignature }}" width='150px'>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                                <button class="btn btn-primary action-btn" title='Save' tooltip='enable' type="submit" wire:click.prevent="saveAnecdotal()">
                                                    <i aria-hidden="true" class="fa fa-save"></i>
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
