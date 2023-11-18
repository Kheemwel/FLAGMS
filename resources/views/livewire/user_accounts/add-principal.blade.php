<div style="display: flex; flex-direction: column;">
    <p class="card-title" style="font-size: 16px; margin-bottom: 1rem;">Position</p>
    <!--ROLE DROPDOWN BUTTON-->
    <div class="input-group-prepend">
        <select required class="form-select form-select-sm mb-2" id="roles" required selected wire:model.live.debounce.500ms="principal_position">
            @if ($principal_position == '')
                <option selected>Select Position</option>
            @endif
            @foreach ($principal_positions as $position)
                <option value="{{ $position->position }}">{{ $position->position }}</option>
            @endforeach
        </select>
        @error('principal_position')
            <span class="text-danger">You must select a position for this principal</span>
        @enderror
    </div>
</div>