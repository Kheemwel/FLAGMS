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
            <div class="modal-header border-0 p-3">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputs()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body ml-3 mr-3" style="max-height: 500px; overflow-y: auto; overflow-x:hidden; max-width: 100%;">
                    <!--MODAL TITLE-->
                    <p class="card-title text-lg font-weight-bold" style="color: #0A0863;">ANECDOTAL RECORD</p> <br><br><br>

                    <div class="d-flex flex-column">
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
                    <div class="row">
                        <!--NAME-->
                        <div class="form-group col-sm-2 text-sm" style="color: #252525;">
                            <p class="card-title">Name</p>
                        </div>
                        <div class="form-group col-sm-2 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold">{{ $student_name }}</p>
                        </div>

                        <!--LRN-->
                        <div class="form-group col-sm-2 text-sm" style="color: #252525;">
                            <p class="card-title">LRN</p>
                        </div>
                        <div class="form-group col-sm-2 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold">{{ $lrn }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <!--SCHOOL LEVEL-->
                        <div class="form-group col-sm-2 text-sm" style="color: #252525;">
                            <p class="card-title">School Level</p>
                        </div>
                        <div class="form-group col-sm-2 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold">{{ $school_level }}</p>
                        </div>

                        <!--GRADE & SECTION-->
                        <div class="form-group col-sm-2 text-sm" style="color: #252525;">
                            <p class="card-title">Grade</p>
                        </div>
                        <div class="form-group col-sm-2 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold">{{ $grade_level }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <!--FATHER'S NAME-->
                        <div class="form-group col-sm-2 text-sm" style="color: #252525;">
                            <p class="card-title">Father's Name</p>
                        </div>
                        <div class="form-group col-sm-2 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold">Benjamin Beller</p>
                        </div>

                        <!--FATHER'S CONTACT NO-->
                        <div class="form-group col-sm-2 text-sm" style=" color: #252525;">
                            <p class="card-title">Contact No.</p>
                        </div>
                        <div class="form-group col-sm-2 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold">0915 445 6789</p>
                        </div>
                    </div>
                    <div class="row">
                        <!--MOTHER'S NAME-->
                        <div class="form-group col-sm-2 text-sm" style="color: #252525;">
                            <p class="card-title">Mother's Name</p>
                        </div>
                        <div class="form-group col-sm-2 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold">Amelia Beller</p>
                        </div>

                        <!--FATHER'S CONTACT NO-->
                        <div class="form-group col-sm-2 text-sm" style="color: #252525;">
                            <p class="card-title">Contact No.</p>
                        </div>
                        <div class="form-group col-sm-2" style="color: #252525;">
                            <p class="card-title font-weight-bold" >0939 258 1123</p>
                        </div>
                    </div>

                    <br><br>
                    <div class="input-group-prepend">
                        <p class="card-title text-md mb-3 font-weight-bold" style="color: #0A0863;"> Table for Anecdotal Records </p>
                    </div>
                    <!--TABLE FOR ANECDOTAL RECORDS-->
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-center">
                                    <thead class="text-center" style="color: white; background-color: #7684B9;">
                                    <tr>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Offenses</th>
                                        <th>Disciplinary Action</th>
                                        <th>Student Signature</th>
                                        <th>Name of Guardian</th>
                                        <th>Signature</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody style="font-weight: bold;">
                                    @if ($anecdotal && in_array('ViewStudentsAnecdotal', $privileges))
                                        @foreach ($anecdotal as $anec)
                                            <tr>
                                                <td class="text-center">{{ date('F d, Y', strtotime($anec->date)) }}</td>
                                                <td class="text-center">{{ date('h:i A', strtotime($anec->time)) }}</td>
                                                <td class="text-center">{{ $anec->getOffense->offense_name }}</td>
                                                <td class="text-center">{{ $anec->getDisciplinaryAction->action }}</td>
                                                <td class="text-center"><img height="150px" src="{{ $anec->student_signature() }}" width="150px"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"><img height="150px" src="{{ $anec->guardian_signature() }}" width="150px"></td>
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
                                                <td class="text-center">
                                                    <input id='datePicker' type="date" wire:model='input_date'>
                                                    <x-error field='input_date' />
                                                </td>
                                                <td class="text-center">
                                                    <input type="time" wire:model='input_time'>
                                                    <x-error field='input_time' />
                                                </td>
                                                <td class="text-center">
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
                                                <td class="text-center">{{ $display_disciplinary_action }}</td>
                                                <td data-target="#student-signature" data-toggle="modal" class="text-center" wire:click.prevent>
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
                                                <td class="text-center"><input type="text"></td>
                                                <td class="text-center" data-target="#parent-signature" data-toggle="modal" wire:click.prevent=''>
                                                    <button class="btn btn-primary action-btn {{ $guardianSignature ? 'd-none' : '' }}"  style="color: #0A0863; font-weight: bold;">
                                                        <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i> Add Signature
                                                    </button>

                                                    @if ($guardianSignature)
                                                        <img height="150px" src="{{ $guardianSignature }}" width='150px'>
                                                    @endif
                                                </td>
                                                <td class="text-center">
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
                </div>
            </form>
        </div>
    </div>
</div>
