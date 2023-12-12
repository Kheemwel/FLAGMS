{{-- Select Children --}}
<div class="row">
    <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
        <div wire:ignore>
            <label for="multiple-select-optgroup-clear-field" style="font-weight: normal;">Select Children</label>
            <select class="form-select" data-placeholder="Select Children" id="multiple-select-optgroup-clear-field" multiple style="border: 1px solid #252525; width: 200%;">
                <template x-for="student in students">
                    <option x-bind:value="student['id']" x-text="student['name']"></option>
                </template>
            </select>
        </div>
        @error('selectedStudents')
            <span class="text-danger">You must select atleast one student who is a child of this parent</span>
        @enderror
    </div>
</div>
