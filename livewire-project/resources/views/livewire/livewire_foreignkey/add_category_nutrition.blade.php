<div wire:ignore.self class="modal fade" id="addCategoryModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="addCategoryModalLable" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="cancel()"></button>
            </div>
            <div class="modal-body">
                <form>
                   <input type="text" class="form-control" placeholder="Enter New Category" wire:model="newCategory">
                   @if ($errors->has('newCategory') && !$newCategory)
                       <span class="text-danger">{{ $errors->first('newCategory') }}</span>
                   @endif
                </form>
            </div>
            <div class="modal-footer">
                <button wire:click="addNewCategory()" class="btn btn-primary">Add</button>
                <button wire:click="cancel()" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div wire:ignore.self class="modal fade" id="addNutritionModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="addNutritionModalLable" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNutritionModalLabel">Add Nutrition</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="cancel()"></button>
            </div>
            <div class="modal-body">
                <form>
                   <input type="text" class="form-control" placeholder="Enter New Nutrition" wire:model="newNutrition">
                   @if ($errors->has('newNutrition') && !$newNutrition)
                       <span class="text-danger">{{ $errors->first('newNutrition') }}</span>
                   @endif
                </form>
            </div>
            <div class="modal-footer">
                <button wire:click="addNewNutrition()" class="btn btn-primary">Add</button>
                <button wire:click="cancel()" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>
</div>

