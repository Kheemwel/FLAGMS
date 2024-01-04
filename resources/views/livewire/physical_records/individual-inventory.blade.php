<div>
    <div class="row">
        <div class="col-12">
            <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
                <!--SEARCH FEATURE-->
                <div class="input-group input-group-sm" style="max-width: 30%;">
                    <!--SEARCH INPUT-->
                    <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text">
                    <div class="input-group-append">
                        <button class="btn btn-default" data-target="#table-filter" data-toggle="modal" style="height: 35px;" type="submit">
                            <i aria-hidden="true" class="fa fa-filter"></i>
                        </button>
                        <!--TABLE FILTER MODAL-->
    
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal end-->
    
                    <!--UPLOAD BUTTON-->
                    <button class="btn btn-default" data-target="#upload-inventory-form" data-toggle="modal" style="max-width: 5rem; height: 35px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button"><i class="fa fa-solid fa-upload"></i> Upload</button>
                    <!--UPLOAD INDIVIDUAL INVENTORY FORM MODAL-->
    
                    <!-- /.modal-end -->
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-2 mr-1">
        <div class="col-12 col-sm-12 pt-2 pr-4 pl-4 d-flex justify-content-end">
            <label class="font-weight-normal text-sm" for="per-page">Show
                <select class="form-select form-select-sm" id='per-page'>
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                    <option selected>30</option>
                    <option>50</option>
                    <option>100</option>
                </select>
                Entries
            </label>
        </div>
    </div>
    
    <!--INDIVIDUAL INVENTORY TABLE SECTION-->
    <div class="row">
        <div class="col-12">
            <!--TABLE SECTION-->
            <div class="card ml-4 mr-4" style="border-radius: 10px;">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0"style="border: 1px solid #252525; border-radius: 10px;">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover" style="text-align: center;">
                            <thead style="background-color: #7684B9; color: white;">
                                <tr>
                                    <th>Student Name</th>
                                    <th>School Level</th>
                                    <th>Grade Level</th>
                                    <th>Upload Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records_inventory as $record)
                                    <tr>
                                        <td>{{ $record->student_name }}</td>
                                        <td>{{ $record->school_level }}</td>
                                        <td>Grade {{ $record->grade_level }}</td>
                                        <td>{{ $record->created_at->format('F d,Y   h:i A') }}</td>
                                        <td>
                                            <!--ANECDOTAL STUDENT INFO EDIT BUTTON-->
                                            <a class="btn btn-primary action-btn" data-target="#edit-inventory-record" data-toggle="modal" wire:click="getRecord('inventory', {{ $record->id }})">
                                                <i class="fa fa-solid fa-pen"></i>
                                            </a>

                                            <!--ANECDOTAL STUDENT INFO VIEW BUTTON-->
                                            <a class="btn btn-primary action-btn" data-target="#view-inventory-record" data-toggle="modal" wire:click="getRecord('inventory', {{ $record->id }})">
                                                <i aria-hidden="true" class="fa fa-eye"></i>
                                            </a>

                                            <!--DELETE BUTTON-->
                                            <a class="btn btn-primary action-btn" wire:click="deleteRecord('inventory', {{ $record->id }})">
                                                <i class="fa fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</div>

<div class="modal fade" id="table-filter">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #252525; font-size: 16px;">School Level</p> <br><br>
                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <div class="row">
                        <!--Junior High-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Junior High School</button>
                        </div>
                        <!--Senior High-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Senior High School</button>
                        </div>
                    </div>
                    <div class="row">
                        <p style="margin-left: 5px;">Grade Level</p>
                    </div>
                    <div class="row">
                        <!--Grade 7-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 7</button>
                        </div>
                        <!--Grade 8-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 8</button>
                        </div>
                    </div>
                    <div class="row">
                        <!--Grade 9-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 9</button>
                        </div>
                        <!--Grade 10-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 10</button>
                        </div>
                    </div>
                    <div class="row">
                        <!--Grade 11-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 11</button>
                        </div>
                        <!--Grade 12-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 12</button>
                        </div>
                    </div>
                    <div class="row">
                        <!--RESET-->
                        <div class="form-group col-sm-6">
                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #d9d9f3; color: #0A0863;"> Reset</button>
                        </div>
                        <!--DONE-->
                        <div class="form-group col-sm-6">
                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white;">Done</button>
                        </div>
                    </div>
                </div> <!-- /.card-body -->
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>

<!-- Upload Modal -->
<div class="modal fade" id="upload-inventory-form" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content" x-data="studentInfo()">
            <div wire:loading wire:target='uploadRecord'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit="uploadRecord('inventory', studentName, selectedSchoolLevel, selectedGradeLevel, teacherName)">
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">Upload Individual Inventory Record</p> <br><br><br>

                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <!--------------------USER'S INFORMATION------------------------>
                    <!--STUDENT NAME-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                        <label for="upload-inv-student-name" style="font-weight: normal;">Student Name</label>
                        <input x-ref="studentName"  class="form-control auto-complete" id="upload-inv-student-name" required style="border: 1px solid #252525" type="text" x-model='studentName'>
                        <x-error field="student_name" />
                    </div>
                    <!--SCHOOL LEVEL-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; margin-bottom: 0;">
                        <label style="font-weight: normal;">School Level</label>
                    </div>
                    <div class="row" style="text-align: left;">
                        <div class="row" style="margin-left: 1rem;" wire:ignore>
                            <template x-for="level in schoolLevels">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="inlineRadioOptions" required type="radio" x-bind:checked="selectedSchoolLevel == level['school_level']" x-bind:id="'inlineRadio' + level['school_level']" x-bind:value="level['school_level']" x-model='selectedSchoolLevel'>
                                    <label class="form-check-label" x-bind:for="'inlineRadio' + level['school_level']" x-text="level['school_level']"></label>
                                </div>
                            </template>
                        </div>
                        <x-error field="school_level" />
                    </div>

                    <!--GRADE LEVEL-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                        <label for="input-std-info" style="font-weight: normal;">Grade Level</label>
                        <div wire:ignore>
                            <select class="form-select form-select-sm mb-2"  required x-model="selectedGradeLevel">
                                <template x-if="selectedGradeLevel == ''">
                                    <option selected value="">Grade Level</option>
                                </template>
                                <template x-for="level in gradeLevels">
                                    <option x-bind:value="level['grade_level']" x-text="level['grade_level']"></option>
                                </template>
                            </select>
                        </div>

                        <x-error field="grade_level" />
                    </div>

                    <!--UPLOAD A FILE-->
                    <div class="form-group col-sm-13 text-sm text-left" style="color: #252525;" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-finish="uploading = false; progress = 0" x-on:livewire-upload-progress="progress = $event.detail.progress" x-on:livewire-upload-start="uploading = true">
                        <label class="font-weight-normal" for="input-item-desc">Upload File</label>

                        <div class="form-group col-sm-12 d-flex flex-column align-items-center justify-content-center" style="border: 1px dashed gray;">
                            <input accept='.pdf, .jpg, .jpeg, .png' class="custom-file-input position-absolute z-50 m-0 p-0 w-100 h-100 border border-black" id="uploaded_file" type="file" wire:model="uploaded_file">
                            <div class="pt-3 pb-5 d-flex flex-column align-items-center justify-content-center">
                                @if ($uploaded_file)
                                    <div>
                                        <p class="font-weight-bold text-center">{{ $file_name }}</p>
                                    </div>
                                @else
                                    <div>
                                        <label class="text-sm font-weight-light text-center" style="color: gray;">Drag a file here <br> or </label>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-primary text-sm border-0" style=" width: 8rem; background-color: #0A0863;" type="button">Upload File</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- Progress Bar -->
                        <div class="progress" x-show="uploading">
                            <div aria-valuemax="100" aria-valuemin="0" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" x-bind:style="`width: ${progress}%;`" x-text="progress + '%'"></div>
                        </div>
                        @error('uploaded_file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" style="width: 450px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>

<!--Edit Modal -->
<div class="modal fade" id="edit-inventory-record" wire:ignore.self data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content" x-data="studentInfo()">
            <div wire:loading wire:target='getRecord, updateRecord'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputs()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit="updateRecord('inventory', studentName, selectedSchoolLevel, selectedGradeLevel, teacherName)">
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">Edit Individual Inventory Record</p> <br><br><br>

                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <!--------------------USER'S INFORMATION------------------------>
                    <!--STUDENT NAME-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                        <label for="edit-inv-student-name" style="font-weight: normal;">Student Name</label>
                        <input x-ref="studentName"  class="form-control auto-complete" id="edit-inv-student-name" required style="border: 1px solid #252525" type="text" x-model='studentName'>
                        <x-error field="student_name" />
                    </div>
                    <x-error field="teacher_name" />
                    <!--SCHOOL LEVEL-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; margin-bottom: 0;">
                        <label style="font-weight: normal;">School Level</label>
                    </div>
                    <div class="row" style="text-align: left;">
                        <div class="row" style="margin-left: 1rem;" wire:ignore>
                            <template x-for="level in schoolLevels">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="inlineRadioOptions" required type="radio" x-bind:checked="selectedSchoolLevel == level['school_level']" x-bind:id="'inlineRadio' + level['school_level']" x-bind:value="level['school_level']" x-model='selectedSchoolLevel'>
                                    <label class="form-check-label" x-bind:for="'inlineRadio' + level['school_level']" x-text="level['school_level']"></label>
                                </div>
                            </template>
                        </div>
                        <x-error field="school_level" />
                    </div>

                    <!--GRADE LEVEL-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                        <label for="input-std-info" style="font-weight: normal;">Grade Level</label>
                        <div wire:ignore>
                            <select class="form-select form-select-sm mb-2"  required x-model="selectedGradeLevel">
                                <template x-if="selectedGradeLevel == ''">
                                    <option selected value="">Grade Level</option>
                                </template>
                                <template x-for="level in gradeLevels">
                                    <option x-bind:value="level['grade_level']" x-text="level['grade_level']"></option>
                                </template>
                            </select>
                        </div>

                        <x-error field="grade_level" />
                    </div>

                    <!--UPLOAD A FILE-->
                    <div class="form-group col-sm-13 text-sm text-left" style="color: #252525;" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-finish="uploading = false; progress = 0" x-on:livewire-upload-progress="progress = $event.detail.progress" x-on:livewire-upload-start="uploading = true">
                        <label class="font-weight-normal" for="input-item-desc">Upload File</label>

                        <div class="form-group col-sm-12 d-flex flex-column align-items-center justify-content-center" style="border: 1px dashed gray;">
                            <input accept='.pdf, .jpg, .jpeg, .png' class="custom-file-input position-absolute z-50 m-0 p-0 w-100 h-100 border border-black" id="uploaded_file" type="file" wire:model="uploaded_file">
                            <div class="pt-3 pb-5 d-flex flex-column align-items-center justify-content-center">
                                @if ($uploaded_file)
                                    <div>
                                        <p class="font-weight-bold text-center">{{ $file_name }}</p>
                                    </div>
                                @else
                                    <div>
                                        <label class="text-sm font-weight-light text-center" style="color: gray;">Drag a file here <br> or </label>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-primary text-sm border-0" style=" width: 8rem; background-color: #0A0863;" type="button">Upload File</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- Progress Bar -->
                        <div class="progress" x-show="uploading">
                            <div aria-valuemax="100" aria-valuemin="0" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" x-bind:style="`width: ${progress}%;`" x-text="progress + '%'"></div>
                        </div>
                        @error('uploaded_file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" style="width: 450px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>

<!-- View Modal -->
<div class="modal fade" id="view-inventory-record" wire:ignore.self data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div wire:loading wire:target='getRecord'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="resetInputs()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body" style="margin-left: 1rem;">
                @if ($record_pdf)
                    <object data="{{ $record_pdf }}" height="550px" type="application/pdf" width="100%"></object>
                @elseif($record_image)
                    <img src="{{ $record_image }}" height="100%" width="100%">
                @endif
            </div>
        </div> <!-- /.card-body -->
    </div>
</div>
