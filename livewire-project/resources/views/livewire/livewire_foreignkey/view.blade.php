<div wire:ignore.self class="modal fade" id="viewModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="viewModalLable" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel">Food Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click.prevent="cancel()"></button>
            </div>
            <div class="modal-body">
                <form>
                    <table>
                        <tr>
                            <th>ID:</th>
                            <td>{{ $food_id }}</td>
                        </tr>
                        <tr>
                            <th>Food Name:</th>
                            <td>{{ $food_name }}</td>
                        </tr>
                        <tr>
                            <th>Food Category:</th>
                            <td>{{ $food_category }}</td>
                        </tr>
                        <tr>
                            <th>Food Nutrition:</th>
                            <td>{{ $food_nutrition }}</td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
