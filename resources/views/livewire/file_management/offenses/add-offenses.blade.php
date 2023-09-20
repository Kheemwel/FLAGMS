<!--USER INFORMATION FORM MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="addOffenseModal" role='dialog' style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="resetInputFields()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="addOffense()">
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">Add New Offense</p> <br><br><br>

                    <div class="form-group" style="font-size: 14px; color: #252525;">
                        <label for="offense-name">Offense Name</label>
                        <input class="form-control" id="offense-name" style="border: 1px solid #252525" type="text" wire:model="offense">

                        @error('offense')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" style="font-size: 14px; color: #252525;">
                        <label for="select-category">Offense Name</label>
                        <select class="form-select form-select-sm mb-2" id="select-category" wire:model.live="category_id">
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
                    <div class="form-group" style="font-size: 14px; color: #252525;">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" style="border: 1px solid #252525" type="text" wire:model="offense_description"></textarea>
                        @error('offense_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
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
