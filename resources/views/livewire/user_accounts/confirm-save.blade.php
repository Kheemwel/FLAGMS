<!--DELETE MODAL-->
<div class="modal fade" id="saveModal" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content" style="border-radius: 20px;">
            <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; text-align: center;">
                <!--MODAL TITLE-->
                <div style="display: flex; flex-direction: column;">
                    <div class="input-group-prepend justify-content-center">
                        <p class="card-title" style="font-size: 20px; color: #252525; font-weight: bold; margin-bottom: 1rem; margin-top:1rem;">
                          Save Changes?
                        </p>
                    </div>
                </div>

                <div style="display: flex; flex-direction: column;">
                    <div class="input-group-prepend">
                        <button class="btn btn-primary" data-dismiss="modal" style="width: 300px; border-color: #0A0863; background-color: white; color: #0A0863; font-size: 14px;" type="submit">No</button>

                        <button class="btn btn-primary" data-dismiss="modal" style="width: 300px; margin-left: 5px; border-color: #0A0863; background-color: #0A0863; color: white; font-size: 14px;" type="submit" wire:click='update()'>Yes</button>
                    </div>
                </div>

            </div> <!-- /.card-body -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal-end -->
