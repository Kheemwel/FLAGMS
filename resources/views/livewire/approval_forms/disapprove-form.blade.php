<div class="modal fade" id="disapprove-form" data-backdrop="static" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent='disApproveRequest()'>
                <div class="modal-body" style="max-height: 500px; overflow-y: auto; margin-left: 1rem; margin-right: 1rem;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #080743; font-size: 20px; font-weight: bold;">Disapprove Request</p> <br><br>

                    <div class="row form-group" style="font-size: 14px; color: #252525;">
                        <label for="reason" style="font-weight: normal;">Reason for Disapproval</label>
                        <textarea class="form-control" cols="30" id="reason" name="reason" rows="10" wire:model='disApprovalReason'></textarea>
                        <x-error field="disApprovalReason" />
                    </div>
                </div> <!-- /.modal-body -->
                <div class="modal-footer justify-content-center">
                    <div class="col-md-10 offset-md-1 text-center">
                        <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white;" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal end-->
