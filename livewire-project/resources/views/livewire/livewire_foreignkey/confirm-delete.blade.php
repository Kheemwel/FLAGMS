<div wire:ignore.self class="modal fade" id="confirm-deleteModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="confirm-deleteModalLable" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirm-deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="cancel()"></button>
            </div>
            <div class="modal-body">
                <form>
                    <h6>Are you sure you want to delete this?</h6>
                    <table>
                        <tr>
                            <th>ID:</th>
                            <td>{{ $food_id }}</td>
                        </tr>
                        <tr>
                            <th>Food Name:</th>
                            <td>{{ $food_name }}</td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button wire:click="delete()" class="btn btn-danger" data-bs-dismiss="modal">Yes</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
