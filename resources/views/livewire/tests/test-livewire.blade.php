<div>
    <input id="" name="" type="checkbox" wire:model.live='showContent'>Show Content

    @if ($showContent)
        @include('livewire.tests.other')
    @endif
</div>
