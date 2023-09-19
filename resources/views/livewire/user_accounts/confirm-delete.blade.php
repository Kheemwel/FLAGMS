<!--DELETE MODAL-->
<div class="modal fade" id="deleteModal" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; text-align: center;">
                <!--MODAL TITLE-->
                <div style="display: flex; flex-direction: column;">
                    <div class="input-group-prepend justify-content-center">
                        <p class="card-title" style="font-size: 20px; color: #252525; font-weight: bold; margin-bottom: 1rem; margin-top:1rem;">
                          Delete Account?
                        </p>
                    </div>
                </div>

                <div style="display: flex; flex-direction: column;">
                    <div class="input-group-prepend">
                        <p class="card-title" style="font-size: 12px; color: #252525; font-weight: bold; margin-bottom: 2rem;">
                          You will not be able to recover it afterwards.
                        </p>
                    </div>
                </div>

                <div style="display: flex; flex-direction: column;">
                    <div class="input-group-prepend">
                        <button class="btn btn-primary" data-dismiss="modal" style="width: 300px; border-color: red; background-color: white; color: red; font-size: 14px;" type="submit">Cancel</button>

                        <button class="btn btn-primary" data-dismiss="modal" style="width: 300px; margin-left: 5px; border-color: red; background-color: red; color: white; font-size: 14px;" type="submit" wire:click='delete()'>Yes, Delete</button>
                    </div>
                </div>

            </div> <!-- /.card-body -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal-end -->
