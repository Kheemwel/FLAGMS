<div class="modal fade" id="request-form" data-backdrop="static" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content" x-data="{ form: '' }">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" x-on:click="form = ''">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent='requestForm(form)'>
                <div class="modal-body" style="max-height: 500px; overflow-y: auto; margin-left: 1rem; margin-right: 1rem;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #080743; font-size: 20px; font-weight: bold;">Request Form</p> <br><br>

                    <div class="row" style="text-align: left; margin-bottom: 2rem;">
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="input-SL" style="font-weight: normal;">Type of Form</label>
                            <div class="input-group-prepend">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="input-SL" style="background-color: transparent; color:#252525; font-size: 14px;" type="button" x-text="form == '' ? 'Type of Form' : form">
                                    Select Form Type
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#" x-on:click="form = 'Violation Form'">Violation Form</a>
                                    <a class="dropdown-item" href="#" x-on:click="form = 'Home Visitation Form'">Home Visitation Form</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <template x-if="form == 'Violation Form'">
                        @include('livewire.request_forms.request-violation-form')
                    </template>
                    <template x-if="form == 'Home Visitation Form'">
                        @include('livewire.request_forms.request-home-visitation-form')
                    </template>
                </div> <!-- /.modal-body -->
                <div class="modal-footer justify-content-center">
                    <template x-if="form == 'Violation Form'">
                        <div class="col-md-10 offset-md-1 text-center">
                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white;" type="submit" x-on:click="@this.set('studentsInvolve', studentsInvolve)">Send</button>
                        </div>
                    </template>
                    <template x-if="form == 'Home Visitation Form'">
                        <div class="col-md-10 offset-md-1 text-center">
                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white;" type="submit" x-on:click="@this.set('selectedStudent', selectedStudent)">Send</button>
                        </div>
                    </template>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal end-->
