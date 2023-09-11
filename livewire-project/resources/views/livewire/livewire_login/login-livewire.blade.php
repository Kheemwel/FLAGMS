<div>
    <form wire:submit.prevent="login">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" wire:model="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" wire:model="password">
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Login</button>
        </div>
    </form>
    @if($errorMessage)
        <div>{{ $errorMessage }}</div>
    @endif
</div>   