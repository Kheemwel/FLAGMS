<!-- Modal trigger button -->
<button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addModal">Add Food</button>

<div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="addModalLable" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Edit Food</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="cancel()"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Food Name:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Enter Food Name" wire:model="food_name">
                        {{-- Show error after submiting the form if this field is empty.
                        Then the error will only disapper if the field is not empty.
                        Erasing it will show the error again. --}}
                        @if ($errors->has('food_name') && !$food_name)
                            <span class="text-danger">{{ $errors->first('food_name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                      </form>
                        <label for="food_categories" class="form-label">Food Categories</label>
                        <select class="form-select form-select-sm" id="food_categories" selected wire:model="food_category">
                            @if ($food_category == "")
                                <option selected>Choose Food Category</option>
                            @endif
                            @foreach($food_categories as $category)
                                {{-- The text of the selected option is passed to the $food_category --}}
                                <option>{{ $category->category }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addCategoryModal"><i class="bi bi-plus-square-fill"></i>Add New Category</button>
                        @error('food_category') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="food_nutritions" class="form-label">Food Nutritions</label>
                        <select class="form-select form-select-sm" id="food_nutritions" selected wire:model="food_nutrition">
                            @if ($food_nutrition == "")
                                <option selected>Choose Food Nutrition</option>
                            @endif
                            @foreach($food_nutritions as $nutrition)
                                {{-- The value of the selected option is passed to the $food_nutrition --}}
                                <option value="{{ $nutrition->id }}">{{ $nutrition->nutrition }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addNutritionModal"><i class="bi bi-plus-square-fill"></i>Add New Nutrition</button>
                        @error('food_nutrition') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button wire:click.prevent="store()" class="btn btn-primary">Add</button>
                <button wire:click.prevent="cancel()" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>
</div>
