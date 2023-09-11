<div>
    <h1>Welcome to your Dashboard</h1>
    <p>Username: {{ $username }}</p>
    <p><button class="btn btn-primary" wire:click="logout">Logout</button></p>
    <br><br><br>
    <a class="btn btn-primary" href="{{ route('profile_livewire') }}">Profile</a>
</div>
