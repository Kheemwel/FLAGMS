<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <div class="row" style="align-content: center; margin-left: 1rem; margin-right: 1rem; margin-top: 2rem;">
        <div class="col-12">
            <div class="col-lg-12">
                <div class="small-box bg-info" style="background-color: #7684B9 !important; color: #252525 !important; border-radius: 10px; display: flex; flex-direction: row; height: 200px; margin-bottom: 0;">
                </div>
            </div>
            <!------------------------------------------------------------------------------------------------------>


            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div aria-atomic="true" aria-live="assertive" class="toast text-bg-success" data-autohide="true" id="liveToast" role="alert">
                    <div class="toast-header">
                        <img class="rounded me-2" src="favicon.ico" width="24">
                        <strong class="me-auto">FLAGMS</strong>
                        <small>{{ now('Asia/Manila')->format('h:i A') }}</small>
                        <button aria-label="Close" class="btn-close" data-dismiss="toast" type="button"></button>
                    </div>
                    <div class="toast-body">
                        @if (session()->has('message'))
                            {{ session('message') }}
                        @endif
                    </div>
                </div>
            </div>

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
                <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; margin-left: 1rem; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; display: flex; flex-direction: row;">
                    <div class="inner" style="padding-left: 3rem; padding-top: 3%; padding-bottom: 1%">
                        <div style="display: flex; flex-direction: column;">
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
                <button class="btn btn-default" style="color: white; background-color: #080743; font-size: 12px; width: 100px; margin-left: 70rem; margin-top: 5rem; margin-bottom: 2rem;" wire:click='logout()'><iconify-icon icon="fa6-solid:right-from-bracket"></iconify-icon> Logout</button>
            </div>
        </div>
    </div>
</div>
