<div class="modal fade" id="view-role" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content" wire:click.outside='resetInputFields()' x-data="privileges" x-on:click.outside="resetFields()">
            <div wire:loading wire:target='getData'>
                <div class="overlay bg-white">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>

            <div class="modal-header" style="border: transparent; padding: 10px;">
                <!--EDIT PROFILE-->
                <button class="btn btn-primary action-btn" data-dismiss="modal" data-target="#editRoleModal" data-toggle="modal" wire:click='getData({{ $selected_role_id }})'>
                    <i class="fa fa-solid fa-pen"></i>
                </button>

                {{-- DELETE PROFILE --}}
                @if (!$role_is_default)
                    <button class="btn btn-primary action-btn" data-dismiss="modal" wire:click="delete({{ $selected_role_id }})">
                        <i aria-hidden="true" class="fa fa-trash"></i>
                    </button>
                @endif

                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputFields()' x-on:click="resetFields()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto; text-align: left;">
                    <!--MODAL TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">ROLE DETAILS</p> <br><br><br>

                    <!--IMPORTANT USER DETAILS FORM SECTION-->

                    @if ($selected_role != null)
                        <div class="row">
                            <!--ITEM TYPE-->
                            <div class="form-group col-sm-5" style="color: #252525;">
                                <p style="font-size: 16px;">Role Name</p>
                            </div>
                            <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                                <p style="font-weight: bold;">{{ $selected_role->role }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6" style="text-align: left; margin-top: 1rem;">
                                <p style="color: #0A0863; font-size: 20px; font-weight:bold;">Privileges</p>
                            </div>
                        </div>

                        @foreach ($selected_role->privileges()->orderBy('id')->get() as $privilege)
                            <div class="row">
                                <!--DATE AND TIME FOUND-->
                                <div class="form-group col-5" style="color: #252525;">
                                    <p style="font-size: 16px;">{{ "Privilege ID#$privilege->id" }}</p>
                                </div>
                                <div class="form-group col-5" style="font-size: 16px; color: #252525;">
                                    <p style="font-weight: bold;">{{ $privilege->privilege }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div> <!-- /.card-body -->
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
