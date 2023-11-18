<!--USER INFORMATION FORM MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" data-backdrop="static" class="modal fade" id="editRoleModal" role='dialog' style="max-width: 100%;" wire:ignore.self>
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

                    <div class="form-group" style="font-size: 14px; color: #252525;">
                        <label for="role-name">Role Name</label>
                        <input @disabled($selected_role != null ? $selected_role->is_default : false) class="form-control" id="role-name" style="border: 1px solid #252525" type="text" wire:model="role">

                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6" style="text-align: left; margin-top: 2rem;">
                            <p style="color: #0A0863; font-size: 22px;">Privileges</p>
                        </div>
                    </div>

                    <div class="row">
                        @error('selected_privileges')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        @foreach ($privilege_categories as $category)
                            <div class="row border border-dark rounded w-100 mb-3">
                                <div class='col-8'><label class='form-group w-100' style="font-size: 14px; color: #252525; margin-left: 1rem; margin-top: 1rem;">{{ $category . ' Privileges' }}</label></div>
                                <div class='col-4'><input type="checkbox" x-model="selectAlls['{{ $category }}']" x-on:click="checkPrivileges('{{ $category }}', !selectAlls['{{ $category }}'])">Check All {{ $category }} Privileges</div>
                                @foreach ($privileges as $privilege)
                                    @if (!$privilege->is_exclusive || in_array($privilege->id, $selected_privileges))
                                        @if (strpos($privilege->privilege, $category) !== false || (!wordsExistInString($privilege_categories, $privilege->privilege) && $category == 'Other'))
                                            <div class="form-group col-4" style="text-align: left; margin-top: 2rem;" x-data="initPrivileges('{{ $category }}', {{ $privilege->id }})">
                                                <input @disabled($privilege->is_exclusive) type="checkbox" value="{{ $privilege->id }}" x-model="privileges[{{ $privilege->id }}]">
                                                {{ $privilege->privilege }}
                                            </div>
                                        @endif
                                    @endif
                                @endforeach
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
