<div>
    @props(['field'])

    @error($field)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>