<div class="modal fade anecdotal-modal" data-backdrop="static" id="anecdotal-btn" wire:ignore.self>
    <div class="modal-dialog anecdotal-dialog modal-xl">
        <div class="modal-content" style="border-radius: 20px;">
            <div wire:loading wire:target='viewAnecdotal'>
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
                <div class="modal-body ml-3 mr-3" style="max-height: 500px; overflow-y: auto; overflow-x:hidden; max-width: 100%;">
                    <!--MODAL TITLE-->
                    <p class="card-title text-lg font-weight-bold" style="color: #0A0863;">ANECDOTAL RECORD</p> <br><br><br>

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
                                        </tr>
                                    </thead>
                                    <tbody style="font-weight: bold;">
                                        @foreach ($anecdotal as $anec)
                                            <tr>
                                                <td class="text-center">{{ date('F d, Y', strtotime($anec->date)) }}</td>
                                                <td class="text-center">{{ date('h:i A', strtotime($anec->time)) }}</td>
                                                <td class="text-center">{{ $anec->getOffense->offense_name }}</td>
                                                <td class="text-center">{{ $anec->getDisciplinaryAction->action }}</td>
                                                <td class="text-center"><img height="150px" src="{{ $anec->student_signature() }}" width="150px"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"  data-target="#guardian-signature" data-toggle="modal" wire:click="$set('selectedAnecdotalRow', {{ $anec->id }})"><img height="150px" src="{{ $anec->guardian_signature() }}" width="150px"></td>
                                            </tr>
                                        @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
