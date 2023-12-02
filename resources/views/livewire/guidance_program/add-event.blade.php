<div class="modal fade" id="add-event" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <!--EVENT INFORMATION-->
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetFields()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form wire:submit='addEvent()'>
                <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; max-height: 560px; overflow-y: auto;">
                    <!--MODAL TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">ADD EVENT</p> <br><br><br>

                    <!--Time-->
                    <div class="row">
                        <div class="col-6">
                            <label style="text-align: left; color: #252525;">Start</label>
                        </div>
                        <div class="col-6">
                            <label style="text-align: left; color: #252525;">End</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <input class="form-control datePicker" name="time_start" placeholder="time start" style="height: 35px; margin-bottom: 1rem;" type="datetime-local" wire:model='program_start'>
                            <x-error field='program_start' />
                        </div>
                        <div class="col-6">
                            <input class="form-control datePicker" name="time_end" placeholder="time end" style="height: 35px; margin-bottom: 1rem;" type="datetime-local" wire:model='program_end'>
                            <x-error field='program_end' />
                        </div>
                    </div>

                    <!--Title-->
                    <div class="row">
                        <div class="col-12">
                            <label style="text-align: left; color: #252525;">Title</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <input class="form-control" name="event_title" style="height: 35px; margin-bottom: 1rem;" type="text" wire:model='title'>
                            <x-error field='title' />
                        </div>
                    </div>

                    <!--Description-->
                    <div class="row">
                        <div class="col-12">
                            <label style="text-align: left; color: #252525;">Description</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <textarea class="form-control" name="event_description" style="height: 100px; margin-bottom: 1rem; resize: none;" wire:model='description'></textarea>
                            <x-error field='description' />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label style="text-align: left; color: #252525;">Accessibility</label>
                        </div>
                    </div>

                    <div class="row ml-2">
                        <div class="form-check col-4">
                            <input checked class="form-check-input" id="public" type="radio" value="1" wire:model.live='is_public'>
                            <label class="form-check-label" for="public">
                                Public
                            </label>
                        </div>
                        <div class="form-check col-4">
                            <input class="form-check-input" id="private" type="radio" value="0" wire:model.live='is_public'>
                            <label class="form-check-label" for="private">
                                Private
                            </label>
                        </div>
                    </div>
                    
                    @if (!$is_public)
                        <div class="row form-group mb-6" style="font-size: 14px; color: #252525;" x-init="initMultiSelect()">
                            <div class="col-12" wire:ignore>
                                <label for="multiple-select-optgroup-clear-field">Select Users Involve</label>
                                <select class="form-select multiple-select-optgroup-clear-field" data-placeholder="Select Target User(s)" id="multiple-select-optgroup-clear-field" multiple style="border: 1px solid #252525;">
                                    <option></option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->getNameAttribute() }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <x-error field="selected_users" />
                        </div>
                    @endif

                    <!--Select Color-->
                    <div class="row">
                        <div class="col-12">
                            <label style="text-align: left; color: #252525;">Select Tag</label>
                        </div>
                    </div>

                    <div class="row mb-4 ml-2">
                        <div class="row d-flex w-100 justify-content-start" style="font-size: 18px;">
                            @foreach ($schedule_tags as $tag)
                                <div class="col-6 d-flex mb-2">
                                    <label class="color-radio-input" style="background-color: {{ $tag->color }}; border-color: {{ $tag->color }};">
                                        <input class="color-radio" name="radio1" type="radio" value="{{ $tag->id }}" wire:model='schedule_tag_id'>
                                        <span class="color-radio-checkmark"></span>
                                    </label>
                                    <span class="ml-1 text-sm">{{ $tag->tag_name }}</span>
                                </div>
                            @endforeach
                            <x-error field='schedule_tag_id' />
                            {{-- <div class="form-check col-2">
                                <input class="form-check-input" id="colorRadio1" name="colorRadio" style="accent-color: #6256AC" type="radio" value="#6256AC" wire:model='color'>
                                <label class="form-check-label" for="colorRadio1">
                                    <i class="fa fa-solid fa-circle" style="color: #6256AC;"></i>
                                </label>
                            </div> --}}
                            {{-- <div class="col-1">
                                <label class="color-radio-input" style="background-color: #6256AC; border-color: #6256AC;">
                                    <input class="color-radio" name="radio1" type="radio" value="#6256AC" wire:model='color'>
                                    <span class="color-radio-checkmark"></span>
                                </label>
                            </div> --}}
                        </div>
                    </div>
                </div> <!-- /.card-body -->
                <div class="modal-footer justify-content-center">
                    <div class="col-12">
                        <button class="btn btn-default" style="width: 400px; margin-left: 10px; background-color: #0A0863; color: white; font-size: 16px;">
                            Add Event
                        </button>
                    </div>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal-end -->
