<div>
    <input type="text" wire:model="name">
    <p>Hello {{ $name }}</p>
    <br><br><br>
    <button type="button" wire:click="increment">Increment</button>
    <p>Count: {{ $count }}</p>
    <br><br><br>
    <input type="text" wire:model="text">
    <p>Text: {{ $this->printText() }}</p>
    <br><br><br>
</div>