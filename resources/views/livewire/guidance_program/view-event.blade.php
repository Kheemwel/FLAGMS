<div class="modal fade" id="view-event" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div wire:loading>
                <div class="overlay bg-white">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <!--EVENT INFORMATION-->
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetFields()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form>
                <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; max-height: 560px; overflow-y: auto;">
                    <!--MODAL TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">
                        EVENT
                        @if (in_array('EditGuidanceProgram', $privileges))
                            <i class="fa fa-solid fa-pen" data-dismiss="modal" data-target="#edit-event" data-toggle="modal" style="color: #252525; font-size: 14px; margin-left: 1rem;cursor: pointer;"></i>
                        @endif
                        @if (in_array('DeleteGuidanceProgram', $privileges))
                            <i class="fa fa-solid fa-trash" data-dismiss="modal" style="color: #252525; font-size: 14px; margin-left: 1rem;cursor: pointer;" wire:click='deleteEvent({{ $id }})'></i>
                        @endif
                    </p>
                    <br><br><br>

                    <!--Date-->
                    <div class="row">
                        <div class="col-3">
                            <label style="text-align: left; color: #252525;font-weight: normal;">Program Start</label>
                        </div>
                        <div class="col-6">
                            <label style="text-align: left; color: #252525;">{{ date('F d,Y   h:i A', strtotime($program_start)) }}</label>
                        </div>
                    </div>

                    <!--Date-->
                    <div class="row">
                        <div class="col-3">
                            <label style="text-align: left; color: #252525;font-weight: normal;">Program End</label>
                        </div>
                        <div class="col-6">
                            <label style="text-align: left; color: #252525;">{{ date('F d,Y   h:i A', strtotime($program_end)) }}</label>
                        </div>
                    </div>

                    <!--Title-->
                    <div class="row">
                        <div class="col-3">
                            <label style="text-align: left; color: #252525;font-weight: normal;">Title</label>
                        </div>
                        <div class="col-6">
                            <label style="text-align: left; color: #252525;">{{ $title }}</label>
                        </div>
                    </div>

                    <!--Description-->
                    <div class="row">
                        <div class="col-3">
                            <label style="text-align: left; color: #252525;font-weight: normal;">Description</label>
                        </div>
                        <div class="col-6">
                            <label style="text-align: left; color: #252525;text-align: justify; margin-bottom: 2rem;">{{ $description }}</label>
                        </div>
                    </div>
                </div> <!-- /.card-body -->
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal-end -->
