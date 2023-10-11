<div class="modal fade" id="edit-event" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <!--EVENT INFORMATION-->
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetFields()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form wire:submit='updateEvent()'>
                <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; max-height: 560px; overflow-y: auto;">
                    <!--MODAL TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">EDIT EVENT</p> <br><br><br>

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
                            <input class="form-control" name="time_start" placeholder="time start" style="height: 35px; margin-bottom: 1rem;" type="datetime-local" wire:model='program_start'>
                            <x-error field='program_start'/>
                        </div>
                        <div class="col-6">
                            <input class="form-control" name="time_end" placeholder="time end" style="height: 35px; margin-bottom: 1rem;" type="datetime-local" wire:model='program_end'>
                            <x-error field='program_end'/>
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
                            <x-error field='title'/>
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
                            <x-error field='description'/>
                        </div>
                    </div>

                    <!--Select Color-->
                    <div class="row">
                        <div class="col-12">
                            <label style="text-align: left; color: #252525;">Select Color</label>
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: 2rem;">
                        <div class="col-12 d-flex justify-content-start" style="font-size: 18px;">
                            {{-- <i class="fa fa-solid fa-circle" style="color: #6256AC;"></i>
                            <i class="fa fa-solid fa-circle" style="color: #05ADC7;"></i>
                            <i class="fa fa-solid fa-circle" style="color: #FA4481;"></i>
                            <i class="fa fa-solid fa-circle" style="color: #3C58FF;"></i>
                            <i class="fa fa-solid fa-circle" style="color: #FC993E;"></i> --}}
                            <div class="form-check">
                                <input wire:model='color' class="form-check-input" type="radio" name="colorRadio" id="colorRadio1" value="#6256AC">
                                <label class="form-check-label" for="colorRadio1">
                                  <i class="fa fa-solid fa-circle" style="color: #6256AC;"></i>
                                </label>
                              </div>
                              
                              <div class="form-check">
                                <input wire:model='color' class="form-check-input" type="radio" name="colorRadio" id="colorRadio2" value="#05ADC7">
                                <label class="form-check-label" for="colorRadio2">
                                  <i class="fa fa-solid fa-circle" style="color: #05ADC7;"></i>
                                </label>
                              </div>
                              
                              <div class="form-check">
                                <input wire:model='color' class="form-check-input" type="radio" name="colorRadio" id="colorRadio3" value="#FA4481">
                                <label class="form-check-label" for="colorRadio3">
                                  <i class="fa fa-solid fa-circle" style="color: #FA4481;"></i>
                                </label>
                              </div>
                              
                              <div class="form-check">
                                <input wire:model='color' class="form-check-input" type="radio" name="colorRadio" id="colorRadio4" value="#3C58FF">
                                <label class="form-check-label" for="colorRadio4">
                                  <i class="fa fa-solid fa-circle" style="color: #3C58FF;"></i>
                                </label>
                              </div>
                              
                              <div class="form-check">
                                <input wire:model='color' class="form-check-input" type="radio" name="colorRadio" id="colorRadio5" value="#FC993E">
                                <label class="form-check-label" for="colorRadio5">
                                  <i class="fa fa-solid fa-circle" style="color: #FC993E;"></i>
                                </label>
                              </div>
                              <x-error field='color'/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-default" style="width: 400px; margin-left: 10px; background-color: #0A0863; color: white; font-size: 16px;">
                                Update Event
                            </button>
                        </div>
                    </div>

                </div> <!-- /.card-body -->
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal-end -->
