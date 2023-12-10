<div style="display: flex; flex-direction: column;">
    <p class="card-title" style="font-size: 14px; color: #252525; margin-bottom: 1rem;">School Level</p>
    <div class="row" style="margin-left: 1rem;">
        <template x-for="level in schoolLevels">
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="inlineRadioOptions" required type="radio" x-bind:checked="selectedSchoolLevel == level['school_level']" x-bind:id="'inlineRadio' + level['school_level']" x-bind:value="level['school_level']" x-model='selectedSchoolLevel'>
                <label class="form-check-label" x-bind:for="'inlineRadio' + level['school_level']" x-text="level['school_level']"></label>
            </div>
        </template>
    </div>
    @error('school_level')
        <span class="text-danger">You must select a school level of this student</span>
    @enderror
</div>
<div style="display: flex; flex-direction: column;">
    <p class="card-title" style="font-size: 14px; color: #252525; margin-bottom: 1rem; margin-top: 1rem;">Grade Level</p>
    <!--ROLE DROPDOWN BUTTON-->
    <div class="input-group-prepend">
        <div>
            <select class="form-select form-select-sm mb-2" id="roles" required x-model="selectedGradeLevel">
                <template x-if="selectedGradeLevel == ''">
                    <option selected>Grade Level</option>
                </template>
                <template x-for="level in gradeLevels">
                    <option x-bind:value="level['grade_level']" x-text="level['grade_level']"></option>
                </template>
            </select>
        </div>
        @error('grade_level')
            <span class="text-danger">You must select a grade level of this student</span>
        @enderror
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
        <label for="inputEmail" style="font-weight: normal;">LRN</label>
        <input class="form-control" id="inputEmail" required style="border: 1px solid #252525" type="text" wire:model="lrn">
        <x-error field='lrn' />
    </div>
</div>
