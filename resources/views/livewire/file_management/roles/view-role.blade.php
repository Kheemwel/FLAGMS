<div class="modal fade" id="view-role" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 10px;" wire:click.outside='resetInputFields()' x-data="privileges" x-on:click.outside="resetFields()">
            <div wire:loading wire:target='getData'>
                <div class="overlay bg-white" style="border-radius: 10px;">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>

            <div class="modal-header p-2 border-0">
                <!-- EDIT PROFILE -->
                <button class="btn btn-primary action-btn" data-dismiss="modal" data-target="#editRoleModal" data-toggle="modal">
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
                <div class="modal-body ml-3 text-left" style="max-height: 500px; overflow-y: auto;">

                    <!-- MODAL TITLE -->
                    <div class="row">
                        <div class="col-12 mb-3">
                            <p class="card-title font-weight-bold text-lg" style="color: #0A0863;">ROLE DETAILS</p>
                        </div>
                    </div>

                    <!-- IMPORTANT USER DETAILS FORM SECTION -->
                    @if ($selected_role != null)
                        <div class="row">
                            <!-- ITEM TYPE -->
                            <div class="form-group col-sm-4" style="color: #252525;">
                                <p class="text-md">Role Name</p>
                            </div>
                            <div class="form-group col-sm-6 text-md" style="color: #252525;">
                                <p style="font-weight: bold;">{{ $selected_role->role }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-12 mt-2">
                                <p class="text-lg font-weight-bold" style="color: #0A0863;">Privileges</p>
                            </div>
                        </div>

                        @foreach ($selected_role->privileges()->orderBy('id')->get() as $privilege)
                            <div class="row">
                                <!-- DATE AND TIME FOUND -->
                                <div class="form-group col-sm-4" style="color: #252525;">
                                    <p class="text-md">{{ "Privilege ID#$privilege->id" }}</p>
                                </div>
                                <div class="form-group col-sm-6 text-md" style="color: #252525;">
                                    <p class="font-weight-bold text-justify">{{ $privilege->privilege }}</p>
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
