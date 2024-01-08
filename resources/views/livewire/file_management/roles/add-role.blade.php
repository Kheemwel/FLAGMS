<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" data-backdrop="static" id="addRoleModal" role='dialog' style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 10px;" x-data="privileges">
            <div wire:loading wire:target='addRole'>
                <div class="overlay bg-white" style="border-radius: 10px;">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>

            <div class="modal-header border-0 p-2">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="resetInputFields()" x-on:click="resetFields()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form wire:submit.prevent="addRole(getSelectedPrivileges())">
                <div class="modal-body ml-3 mr-3" style="max-height: 500px; overflow-y: auto;">

                    <!-- MODAL FORM TITLE -->
                    <div class="row">
                        <div class="col-12 mb-3">
                            <p class="card-title font-weight-bold text-lg" style="color: #0A0863;">ADD NEW ROLE</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-12 text-md mr-3" style="color: #252525;">
                            <label for="role-name">Role Name</label>
                            <input class="form-control" id="role-name" style="border: 1px solid #252525;" type="text" wire:model="role">

                            @error('role')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-12 mt-4">
                            <p class="text-md font-weight-bold" style="color: #0A0863;">Set Privileges</p>
                        </div>
                    </div>

                    <div class="row">
                        @error('selected_privileges')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row ml-1 mr-1">
                        @foreach ($privilege_categories as $category)
                            <div class="col-12 border border-dark rounded mb-3 p-4 pt-2 pl-2">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-group w-100 text-sm" style="color: #252525;">{{ $category . ' Privileges' }}</label>
                                    </div>

                                    <div class='col-12 d-flex justify-content-end'>
                                        <input class="toggle-checkbox" id="switch-{{ $category }}" type="checkbox" x-model="selectAlls['{{ $category }}']" x-on:click="checkPrivileges('{{ $category }}', !selectAlls['{{ $category }}'])">
                                        <label class="toggle-label" for="switch-{{ $category }}">Toggle</label>
                                        <span class="ml-1">Enable All {{ $category }} Privileges</span>
                                    </div>
                                </div>

                                <div class="row">
                                    @foreach ($privileges as $privilege)
                                        @if (!$privilege->is_exclusive)
                                            @if (strpos($privilege->privilege, $category) !== false || (!wordsExistInString($privilege_categories, $privilege->privilege) && $category == 'Other'))
                                                <div class="form-check col-12 col-md-6 col-lg-4 mt-4" x-init="initPrivileges('{{ $category }}', {{ $privilege->id }})">
                                                    <input class="form-check-input" id="defaultCheck{{ $privilege->id }}" type="checkbox" value="{{ $privilege->id }}" x-model="privileges[{{ $privilege->id }}]">
                                                    <label class="form-check-label" for="defaultCheck{{ $privilege->id }}">
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

                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-primary ml-1 text-sm" style="width: 100%; background-color: #0A0863; color: white;" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal end-->
