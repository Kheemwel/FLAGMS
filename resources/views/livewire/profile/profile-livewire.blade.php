@section('head')
    <title>Profile</title>
    <style>
        /* For Eye Icons of Home Visitation and Summary Section inside the table */
        .btn-primary.action-btn {
            background-color: transparent;
            border-color: transparent;
        }

        .btn-primary.action-btn i {
            color: #252525;
        }

        /* Hover styles */
        .btn-primary.action-btn:hover {
            background-color: transparent;
        }

        .btn-primary.action-btn:hover i {
            color: #0A0863;
        }

        /********************************/

        /* Widen the Home Visitation modal */
        .Home Visitation-dialog {
            max-width: 90%;
        }

        .Home Visitation-modal {
            margin-left: auto;
            margin-right: auto;
        }

        /* Widens the add signature modal */
        .as-dialog {
            max-width: 50%;
        }

        .as-modal {
            margin-left: auto;
            margin-right: auto;
        }

        /* CLEAR BUTTON */
        .clear-button {
            background-color: #ffffff;
            border-color: #080743;
            color: #080743;
        }

        /* Hover effect */
        .clear-button:hover {
            background-color: #1f1b8e;
            border-color: #1f1b8e;
            color: #ffffff;
        }

        /* Clicked effect */
        .clear-button:active {
            background-color: #060554;
            border-color: #060554;
            color: #ffffff;
        }
    </style>
@endsection
<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <div class="row" style="align-content: center; margin-left: 1rem; margin-right: 1rem; margin-top: 2rem;">
        <div class="col-12">
            <div class="col-lg-12">
                <div class="small-box bg-info" style="background-color: #7684B9 !important; color: #252525 !important; border-radius: 10px; display: flex; flex-direction: row; height: 200px; margin-bottom: 0;">
                </div>
            </div>
            <!------------------------------------------------------------------------------------------------------>

            <!--User Important Details-->
            <div class="col-lg-12" style="margin-bottom: 3rem;">
                <img alt="user profile" src="{{ $this->viewProfile() }}" style=" height: 150px; width: 150px;">
                <label style="font-size: 26px; color: #252525ce; line-height: 5%; margin-left: 1rem; margin-top: 23px;">{{ $name }}</label>
                <button class="btn btn-default" data-target="#edit-profile" data-toggle="modal" style="color: white; background-color: #080743; font-size: 12px; width: 100px; margin-left: 69rem;"><i class="fa fa-solid fa-pen"></i> Edit Profile</button>
                <!--EDIT PROFILE MODAL-->
                @include('livewire.profile.edit-profile')
            </div>
            <!----------------------------------------------------------------------------------------->
            <!--User Personal Details-->
            <div class="col-lg-13">
                <div class="row">
                    <div class="col-12" style="background-color: white !important; color: #252525 !important; margin-left: 1rem; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; padding-left: 3rem; padding-top: 2rem; padding-bottom: 1rem; margin-bottom: 3rem; margin-right: 7rem;">
                        <label style="font-size: 18px; color: #060554;">Personal Information</label>
                        <div class="row">
                            <!--NAME-->
                            <div class="form-group col-sm-4">
                                <label style="font-size: 18px; font-weight: bold;">Name</label>
                            </div>
                            <div class="form-group col-sm-8">
                                <label style="font-size: 18px; font-weight: normal; margin-left: 2rem;">{{ $name }}</label>
                            </div>
                        </div>
                        <div class="row" style="line-height: 5%;">
                            <!--ROLE-->
                            <div class="form-group col-sm-4">
                                <label style="font-size: 18px; font-weight: bold;">Role</label>
                            </div>
                            <div class="form-group col-sm-8">
                                <label style="font-size: 18px; font-weight: normal; margin-left: 2rem;">{{ $role }}</label>
                            </div>
                        </div>
                        <div class="row">
                            <!--USERNAME-->
                            <div class="form-group col-sm-4">
                                <label style="font-size: 18px; font-weight: bold; margin-right: 2;">Username</label>
                            </div>
                            <div class="form-group col-sm-8">
                                <label style="font-size: 18px; font-weight: normal; margin-left: 2rem;">{{ $username }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
