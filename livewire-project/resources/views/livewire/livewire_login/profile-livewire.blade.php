<div>
    <h1>Profile Page</h1>
    <form wire:submit.prevent="changePassword">
        <div class="mb-3">
            <label for="currentPassword" class="form-label">Current Password:</label>
            <input type="password" id="currentPassword" wire:model="currentPassword" class="form-control">
        </div>
        <div class="mb-3">
            <label for="newPassword" class="form-label">New Password:</label>
            <input type="password" id="newPassword" wire:model="newPassword" class="form-control">
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password:</label>
            <input type="password" id="confirmPassword" wire:model="confirmPassword" class="form-control">
        </div>
        @if($errorMessage)
            <div class="alert alert-danger">{{ $errorMessage }}</div>
        @endif
        <button type="submit" class="btn btn-primary">Change Password</button>
    </form>
    <br><br><br>
    <a class="btn btn-primary" onclick="history.back()">Go Back</a>
</div>
