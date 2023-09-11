<div wire:ignore.self class="modal fade" id="viewModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="viewModalLable" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel">View User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click.prevent="cancel()"></button>
            </div>
            <div class="modal-body">
                <table>
                    <tr>
                        <th>ID:</th>
                        <td>{{ $myuser_id }}</td>
                    </tr>
                    <tr>
                        <th>Username:</th>
                        <td>{{ $username }}</td>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <td>{{ $password }}</td>
                    </tr>
                    <tr>
                        <th>Hashed Password:</th>
                        <td>{{ $hashed_password }}</td>
                    </tr>
                    <tr>
                        <th>Register Date:</th>
                        <td>{{ $register_date }}</td>
                    </tr>
                    <tr>
                        <th>Last Modified:</th>
                        <td>{{ $last_modified }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
