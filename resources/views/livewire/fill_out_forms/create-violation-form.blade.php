<div x-init="initMultiSelect()">
    <div class="row form-group" style="font-size: 14px; color: #252525;">
        <div class="col-12" wire:ignore>
            <label for="single-select-optgroup-clear-field" style="font-weight: normal;">Select Student(s) Adviser</label>
            <select class="form-select single-select2 teacher-select" data-placeholder="Select Teacher" style="border: 1px solid #252525;">
                <option></option>
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>
        <x-error field="selectedTeacher" style="font-size: 14px; color: #252525;" />
    </div>
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

    {{-- <div class="row form-group" style="font-size: 14px; color: #252525;">
        <label for="reason" style="font-weight: normal;">Reason of Violation</label>
        <textarea class="form-control" cols="30" id="reason" name="reason" rows="10" wire:model='violationReason'></textarea>
        <x-error field="violationReason" />
    </div> --}}
</div>
