<div>
    @props(['model', 'value', 'placeholder'])
    <input class="form-control {{ $errors->has($model) && !$value ? 'is-invalid' : ''}}"  placeholder="{{ $placeholder }}" type="text" wire:model.live.debounce.500ms="{{ $model }}">

    @if ($errors->has($model) && !$value)
        <span class="text-danger">{{ $errors->first($model) }}</span>
    @endif
</div>