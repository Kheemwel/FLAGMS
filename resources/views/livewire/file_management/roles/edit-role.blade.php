<!--USER INFORMATION FORM MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" data-backdrop="static" id="editRoleModal" role='dialog' style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog modal-lg">
        <div class="modal-content" x-data="privileges">
            <div wire:loading wire:target='getData'>
                <div class="overlay bg-white">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="resetInputFields()" x-on:click="resetFields()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="updateRole(getSelectedPrivileges())">
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">Add New Role</p> <br><br><br>

                    <div class="form-group" style="font-size: 18px; color: #252525; margin-right: 1rem;">
                        <label for="role-name">Role Name</label>
                        <input @disabled($selected_role != null ? $selected_role->is_default : false) class="form-control" id="role-name" style="border: 1px solid #252525" type="text" wire:model="role">

                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6" style="text-align: left; margin-top: 2rem;">
                            <p style="color: #0A0863; font-size: 18px; font-weight: bold;">Set Privileges</p>
                        </div>
                    </div>

                    <div class="row">
                        @error('selected_privileges')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        @foreach ($privilege_categories as $category)
                            <div class="row border border-dark rounded w-100 mb-3 p-4 pt-2 pl-2">
                                <div class="row mr-1 w-100">
                                    <div class='col-7'>
                                        <label class='form-group w-100' style="font-size: 14px; color: #252525;">{{ $category . ' Privileges' }}</label>
                                    </div>

                                    <div class='col-5 w-100 d-flex justify-content-end'>
                                        <input class="toggle-checkbox" id="edit-switch-{{ $category }}" type="checkbox" x-model="selectAlls['{{ $category }}']" x-on:click="checkPrivileges('{{ $category }}', !selectAlls['{{ $category }}'])"><label class="toggle-label" for="edit-switch-{{ $category }}">Toggle</label>
                                        <span class="ml-1">Check All {{ $category }} Privileges</span>
                                    </div>
                                </div>


                                <div class="row">
                                    @foreach ($privileges as $privilege)
                                        @if (!$privilege->is_exclusive || in_array($privilege->id, $selected_privileges))
                                            @if (strpos($privilege->privilege, $category) !== false || (!wordsExistInString($privilege_categories, $privilege->privilege) && $category == 'Other'))
                                                <div class="form-check col-4 mt-4" x-init="initPrivileges('{{ $category }}', {{ $privilege->id }})">
                                                    <input @disabled($privilege->is_exclusive) class="form-check-input" id="editCheck{{ $privilege->id }}" type="checkbox" value="{{ $privilege->id }}" x-model="privileges[{{ $privilege->id }}]">
                                                    <label class="form-check-label" for="editCheck{{ $privilege->id }}">
                                                        {{ $privilege->privilege }}
                                                    </label>
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer d-flex justify-content-center" x-init="setPrivileges([{{ implode(',', $selected_privileges) }}])">
                    <button class="btn btn-primary" style="width: 450px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal end-->
