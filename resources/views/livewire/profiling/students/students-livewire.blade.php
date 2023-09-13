<div>
    <div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                        <h1 style="font-weight: bold;">Students</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        
        <div class="row">
            <div class="col-12">
                <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
                    <!--SEARCH FEATURE-->
                    <div class="input-group input-group-sm" style="max-width: 20%;">
                        <!--SEARCH INPUT-->
                        <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text">
                        <div class="input-group-append">
                            <button class="btn btn-default" data-target="#table-filter" data-toggle="modal" type="submit">
                                <i aria-hidden="true" class="fa fa-filter"></i>
                            </button>
                            <!--TABLE FILTER MODAL-->
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
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal end-->
                    </div>
                </div>
            </div>
        </div>
    
    
        <!--PROFILING TABLE SECTION-->
        <div class="card" style="margin-left: 2rem; margin-right: 2rem;">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
                <table class="table text-nowrap" style="text-align: center;">
                    <thead style="background-color: #7684B9; color: white;">
                        <tr>
                            <th style="border-right: 1px solid #252525;">ID</th>
                            <th style="border-right: 1px solid #252525;">Name</th>
                            <th style="border-right: 1px solid #252525;">School Level</th>
                            <th style="border-right: 1px solid #252525;">Grade Level</th>
                            <th style="border-right: 1px solid #252525;">Anecdotal</th>
                            <th>Summary</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->getUserAccount->first_name . ' ' . $student->getUserAccount->last_name }}</td>
                            <td>{{ $student->schoolLevel->school_level }}</td>
                            <td>Grade {{ $student->gradeLevel->grade_level }}</td>
                            <td>
                                <a class="btn btn-primary action-btn" data-target="#anecdotal-btn" data-toggle="modal" href="#">
                                    <i aria-hidden="true" class="fa fa-eye"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-primary action-btn" data-target="#summary-btn" data-toggle="modal" href="#">
                                    <i aria-hidden="true" class="fa fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- /.card-body -->
    
    <!--PAGINATION-->
    <div style="margin-top: 10rem;">
        <ul class="pagination justify-content-center">
            <li class="paginate_button page-item previous" id="example1_previous">
                <a aria-controls="example1" class="page-link" data-dt-idx="0" href="#" tabindex="0">Previous</a>
            </li>
            <li class="paginate_button page-item ">
                <a aria-controls="example1" class="page-link" data-dt-idx="1" href="#" tabindex="0">1</a>
            </li>
            <li class="paginate_button page-item ">
                <a aria-controls="example1" class="page-link" data-dt-idx="2" href="#" tabindex="0">2</a>
            </li>
            <li class="paginate_button page-item ">
                <a aria-controls="example1" class="page-link" data-dt-idx="3" href="#" tabindex="0">3</a>
            </li>
            <li class="paginate_button page-item ">
                <a aria-controls="example1" class="page-link" data-dt-idx="4" href="#" tabindex="0">4</a>
            </li>
            <li class="paginate_button page-item ">
                <a aria-controls="example1" class="page-link" data-dt-idx="5" href="#" tabindex="0">5</a>
            </li>
            <li class="paginate_button page-item ">
                <a aria-controls="example1" class="page-link" data-dt-idx="6" href="#" tabindex="0">6</a>
            </li>
            <li class="paginate_button page-item next" id="example1_next">
                <a aria-controls="example1" class="page-link" data-dt-idx="7" href="#" tabindex="0">Next</a>
            </li>
        </ul>
    </div>

    @include('livewire.profiling.students.anecdotal-window')
    @include('livewire.profiling.students.summary-window')
    @include('livewire.profiling.students.edit-student')
</div>