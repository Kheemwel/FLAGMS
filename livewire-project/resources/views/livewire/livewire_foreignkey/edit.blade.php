<div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="editModalLable" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Food</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="cancel()"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Food Name:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Enter Food Name" wire:model="food_name">
                        @error('food_name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="food_categories" class="form-label">Food Categories</label>
                        <select class="form-select form-select-sm" id="food_categories" selected wire:model="food_category">
                            @foreach($food_categories as $category)
                                <option @if($food_category == $category->category) selected @endif>{{ $category->category }}</option>
                            @endforeach
                        </select>
                        @error('food_category') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="food_nutritions" class="form-label">Food Nutritions</label>
                        <select class="form-select form-select-sm" id="food_nutritions" selected wire:model="food_nutrition">
                            @foreach($food_nutritions as $nutrition)
                                <option value="{{ $nutrition->id }}" @if($food_nutrition == $nutrition->id) selected @endif>{{ $nutrition->nutrition }}</option>
                            @endforeach
                        </select>
                        @error('food_nutrition') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirm-saveModal">Update</button>
                <button wire:click.prevent="cancel()" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div wire:ignore.self class="modal fade" id="confirm-saveModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="confirm-saveModalLable" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="confirm-saveModalLabel">Save Changes?</h5>
            </div>
            <div class="modal-footer">
                <button wire:click.prevent="update()" class="btn btn-primary" data-bs-dismiss="modal">Yes</button>
                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editModal">No</button>
            </div>
        </div>
    </div>
</div>

