<!--VIEW USER INFORMATION MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="view-user-btn" role='dialog' style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <!--EDIT USER INFORMATION-->
                <button data-target="#stud-info-edit" data-toggle="modal" style="background-color: transparent; border-color: transparent;" type="button">
                    <i class="fa fa-solid fa-pen"></i>
                </button>

                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputFields()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                <!--MODAL TITLE-->
                <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">USER INFORMATION</p> <br><br><br>
                <div style="display: flex; flex-direction: column;">
                    <div class="input-group-prepend">
                        <p class="card-title" style="font-size: 18px; color: #252525; font-weight: bold; margin-bottom: 1rem;">Profile Picture</p>
                    </div>
                </div>
                <!--IMPORTANT USER DETAILS FORM SECTION-->
                <!--PROFILE PIC-->
                <div class="row">
                    <div class="form-group col-sm-12" style="margin-bottom: 5rem;">
                        <img alt="user profile" src="{{ $this->viewProfile() }}" width="100px">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 1rem;">
                    <!--ID-->
                    <div class="form-group col-sm-5" style="font-size: 12px; color: #252525;">
                        <p class="card-title">ID</p>
                    </div>
                    <div class="form-group col-sm-4" style="font-size: 12px; color: #252525;">
                        <p class="card-title" style="font-weight: bold;">{{ $user_id }}</p>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 1rem;">
                    <!--ROLE-->
                    <div class="form-group col-sm-5" style="font-size: 12px; color: #252525;">
                        <p class="card-title">Role</p>
                    </div>
                    <div class="form-group col-sm-4" style="font-size: 12px; color: #252525;">
                        <p class="card-title" style="font-weight: bold;">{{ $role }}</p>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 1rem;">
                    <!--NAME-->
                    <div class="form-group col-sm-5" style="font-size: 12px; color: #252525;">
                        <p class="card-title">Name</p>
                    </div>
                    <div class="form-group col-sm-4" style="font-size: 12px; color: #252525;">
                        <p class="card-title" style="font-weight: bold;">{{ $name }}</p>
                    </div>
                </div>
                @if ($role == 'Student')
                    <div class="row" style="margin-bottom: 1rem;">
                        <div class="form-group col-sm-5" style="font-size: 14px; color: #252525;">
                            <p class="card-title">School Level</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 14px; color: #252525;">
                            <p class="card-title" style="font-weight: bold;">{{ $school_level }}</p>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 1rem;">
                        <div class="form-group col-sm-5" style="font-size: 14px; color: #252525;">
                            <p class="card-title">Grade Level</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 14px; color: #252525;">
                            <p class="card-title" style="font-weight: bold;">{{ $grade_level }}</p>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 1rem;">
                        <!--CHILD/STD NAME-->
                        <div class="form-group col-sm-5" style="font-size: 14px; color: #252525;">
                            <p class="card-title">Parents</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 14px; color: #252525;">
                            @if ($parents)
                                <p class="card-title" style="font-weight: bold;">
                                    {{ sizeof($parents) <= 0 ? 'There is no registered parent for this child yet.' : '' }}
                                </p>
                                @foreach ($parents as $parent)
                                    <p class="card-title" style="font-weight: bold;">
                                        {{ $parent->getUserAccount->name }}
                                    </p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                @elseif ($role == 'Parent')
                    <div class="row" style="margin-bottom: 1rem;">
                        <!--CHILD/STD NAME-->
                        <div class="form-group col-sm-5" style="font-size: 14px; color: #252525;">
                            <p class="card-title">Children</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 14px; color: #252525;">
                            @if ($children)
                                @foreach ($children as $child)
                                    <p class="card-title" style="font-weight: bold;">{{ $child->getUserAccount->name }}</p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                @elseif ($role == 'Principal')
                    <div class="row" style="margin-bottom: 1rem;">
                        <div class="form-group col-sm-5" style="font-size: 14px; color: #252525;">
                            <p class="card-title">Position</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 14px; color: #252525;">
                            <p class="card-title" style="font-weight: bold;">{{ $principal_position }}</p>
                        </div>
                    </div>
                @endif
                <div class="row" style="margin-bottom: 1rem;">
                    <!--USERNAME-->
                    <div class="form-group col-sm-5" style="font-size: 14px; color: #252525;">
                        <p class="card-title">Username</p>
                    </div>
                    <div class="form-group col-sm-4" style="font-size: 14px; color: #252525;">
                        <p class="card-title" style="font-weight: bold;">{{ $username }}</p>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 1rem;">
                    <!--EMAIL-->
                    <div class="form-group col-sm-5" style="font-size: 14px; color: #252525;">
                        <p class="card-title">Email</p>
                    </div>
                    <div class="form-group col-sm-4" style="font-size: 14px; color: #252525;">
                        <p class="card-title" style="font-weight: bold;">{{ $email ? $email : 'There is no registered email.' }}</p>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 1rem;">
                    <!--PASSWORD-->
                    <div class="form-group col-sm-5" style="font-size: 14px; color: #252525;">
                        <p class="card-title">Password</p>
                    </div>
                    <div class="form-group col-sm-4" style="font-size: 14px; color: #252525;">
                        <p class="card-title" style="font-weight: bold;">{{ $password }}</p>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 1rem;">
                    <div class="form-group col-sm-5" style="font-size: 14px; color: #252525;">
                        <p class="card-title">Total Login</p>
                    </div>
                    <div class="form-group col-sm-4" style="font-size: 14px; color: #252525;">
                        <p class="card-title" style="font-weight: bold;">{{ $total_login }}</p>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 1rem;">
                    <div class="form-group col-sm-5" style="font-size: 14px; color: #252525;">
                        <p class="card-title">Last Login</p>
                    </div>
                    <div class="form-group col-sm-4" style="font-size: 14px; color: #252525;">
                        <p class="card-title" style="font-weight: bold;">
                            {{ $last_login ? date('F d,Y   h:i A', strtotime($last_login)) : 'User has not logged in yet.' }}
                        </p>
                    </div>
                </div>
            </div> <!-- /.card-body -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal end-->
