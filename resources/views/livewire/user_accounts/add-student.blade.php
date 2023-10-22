<div style="display: flex; flex-direction: column;">
    <p class="card-title" style="font-size: 16px; margin-bottom: 1rem;">School Level</p>
    <div class="row">
        @foreach ($school_levels as $level)
            <div class="form-check form-check-inline">
                <input @if ($school_level == $level->school_level) checked @endif class="form-check-input" id="inlineRadio1" name="inlineRadioOptions" type="radio" value="{{ $level->school_level }}" wire:model.live='school_level'>
                <label class="form-check-label" for="inlineRadio1">{{ $level->school_level }}</label>
            </div>
        @endforeach
    </div>
    @error('school_level')
        <span class="text-danger">You must select a school level of this student</span>
    @enderror
</div>
<div style="display: flex; flex-direction: column;">
    <p class="card-title" style="font-size: 16px; margin-bottom: 1rem;">Grade Level</p>
    <!--ROLE DROPDOWN BUTTON-->
    <div class="input-group-prepend">
        <select class="form-select form-select-sm mb-2" id="roles" selected wire:model.live="grade_level">
            @if ($grade_level == '')
                <option selected>Grade Level</option>
            @endif
            @foreach ($grade_levels as $level)
                <option value="{{ $level->grade_level }}">Grade {{ $level->grade_level }}</option>
            @endforeach
        </select>
        @error('grade_level')
            <span class="text-danger">You must select a grade level of this student</span>
        @enderror
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
        <label for="inputEmail" style="font-weight: normal;">LRN</label>
        <input class="form-control" id="inputEmail" style="border: 1px solid #252525" type="text" wire:model="lrn">
        <x-error field='lrn'/>
    </div>
</div>