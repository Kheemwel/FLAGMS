<div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="editModalLable" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click.prevent="cancel()"></button>
            </div>
            <div class="modal-body">
                <form>
                    {{-- <input type="hidden" wire:model="myuser_id"> --}}
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Username:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Enter Username" wire:model="username">
                        @error('username') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput4">Password:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Enter Password" wire:model="password">
                        @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button wire:click.prevent="update()" class="btn btn-dark" data-bs-dismiss="modal">Update</button>
                <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </div>
</div>
