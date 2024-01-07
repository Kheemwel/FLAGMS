<!--USER INFORMATION FORM MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="addOffenseModal" role='dialog' style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 20px">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="resetInputFields()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="addOffense()">
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">Add New Offense</p> <br><br><br>

                    <div class="form-group mr-3 mb-4" style="font-size: 18px; color: #252525;">
                        <label for="offense-name">Offense Name</label>
                        <input class="form-control" id="offense-name" style="border: 1px solid #252525" type="text" wire:model="offense">

                        @error('offense')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-4" style="font-size: 18px; color: #252525;">
                        <label for="select-category">Offense Category</label>
                        &nbsp; <select class="form-select form-select-sm mb-2" id="select-category" wire:model.live.debounce.500ms="category_id">
                            @if ($category_id == '')
                                <option selected>Select Offense Category</option>
                            @endif
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->offenses_category }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <label style="font-size:18px; margin-bottom:1rem;" for="offense-name">Offense Level</label>
                    @foreach ($offense_levels as $levels)
                        <div class="form-group ml-4" style="font-size: 16px; color: #252525;">
                            <label for="select-action">{{ $levels->level }}</label>
                            &nbsp; <select style="width: 60%;" @if ($levels->id > 1) @disabled($selected_disciplinary_action_ids[$levels->id - 1] == null || (in_array($dismissal_id, $selected_disciplinary_action_ids) && $selected_disciplinary_action_ids[$levels->id] != $dismissal_id)) @else @disabled(in_array($dismissal_id, $selected_disciplinary_action_ids) && $selected_disciplinary_action_ids[$levels->id] != $dismissal_id) @endif class="form-select form-select-sm mb-2" id="select-action" wire:model.live="selected_disciplinary_action_ids.{{ $levels->id }}">
                                <option value="">Select Discipliary Action</option>
                                @foreach ($disciplinary_actions as $dsa)
                                    <option @disabled(in_array($dsa->id, $selected_disciplinary_action_ids)) value="{{ $dsa->id }}">{{ $dsa->action }}</option>
                                @endforeach
                            </select>
                            <x-error field="selected_disciplinary_action_ids.{{ $levels->id }}" />
                        </div>
                    @endforeach

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button class="btn btn-primary" style="width: 450px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal end-->
