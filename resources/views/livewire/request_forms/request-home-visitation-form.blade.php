<div x-init="initMultiSelect()">
    <div class="row form-group" style="font-size: 14px; color: #252525;">
        <div class="col-12" wire:ignore>
            <label for="single-select-optgroup-clear-field" style="font-weight: normal;">Select Student</label>
            <select class="form-select" data-placeholder="Select Student" id="single-select-optgroup-clear-field" style="border: 1px solid #252525;">
                <option></option>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->getUserAccount->name }}</option>
                @endforeach
            </select>
        </div>
        <x-error field="selectedStudent" style="font-size: 14px; color: #252525;" />
    </div>

    <div class="row form-group" style="font-size: 14px; color: #252525;">
        <label for="reason" style="font-weight: normal;">Reason for Home Visitaton</label>
        <textarea class="form-control" cols="30" id="reason" name="reason" rows="10" wire:model='homeVisitationReason'></textarea>
        <x-error field="homeVisitationReason" />
    </div>
</div>
