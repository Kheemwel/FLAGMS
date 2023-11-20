<div x-init="initMultiSelect()">
    <div class="row form-group" style="font-size: 14px; color: #252525;" >
        <div class="col-12" wire:ignore>
            <label for="multiple-select-optgroup-clear-field" style="font-weight: normal;">Select Student(s) Involve</label>
            <select class="form-select" data-placeholder="Select Student(s)" id="multiple-select-optgroup-clear-field" multiple style="border: 1px solid #252525;">
                <option></option>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->getUserAccount->name }}</option>
                @endforeach
            </select>
        </div>
        <x-error field="studentsInvolve"/>
    </div>

    <div class="row">
        <label class="col-12" style="font-size: 14px; color: #252525; font-weight: normal;">Type of Offense</label>
        @foreach ($offenseTypes as $type)
            <div class="form-check col-3">
                <input class="form-check-input" id="colorRadio4" name="colorRadio" type="radio" value="{{ $type }}" wire:model='offenseType'>
                <label class="form-check-label" for="colorRadio4">
                    {{ $type }}
                </label>
            </div>
        @endforeach
        <x-error field="offenseType" style="font-size: 14px; color: #252525;" />
    </div>
</div>
