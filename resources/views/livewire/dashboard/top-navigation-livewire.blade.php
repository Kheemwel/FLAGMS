<nav class="main-header navbar sticky-top navbar-expand navbar-white navbar-light" style="border-color: transparent; background-color: rgb(253, 253, 253); margin-right: 2rem;">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link pushmenubtn" data-widget="pushmenu" href="#" role="button"><i class="fa fa-solid fa-bars" style="color: white;"></i></a>
        </li>
    </ul>

    <!--Greetings-->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link" style="font-size: 20px; font-weight: bold; color: #252525;">
                Good Day, {{ $first_name }}!
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- RIGHT HAND UPPER SIDE NAVIGATION -->
        <li class="nav-item"> 
        <iconify-icon icon="icon-park-solid:help" style="font-size: 22px; margin-top: 10px;"></iconify-icon>

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown" style="margin-right: 1rem; margin-top: 2px;">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-solid fa-bell" style="color: #252525; font-size: 18px;"></i>
                <span class="badge badge-warning navbar-badge">1</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" style="max-width: 500px; max-height: 300px; overflow-y: auto; overflow-x: hidden;">
                <div style="display: flex; flex-direction: row; justify-content: space-between;">
                    <span class="dropdown-header" style="font-size: 20px; text-align: left; color: #252525; font-weight: bold;">Notification</span>
                    <span class="dropdown-header" style="font-size: 12px; color: #252525; cursor: pointer;">Mark all as read</span>
                </div>

                <!-- NOTIF CONTENT -->
                <a class="dropdown-item" href="#" style="margin-bottom: 1rem;">
                    <div style="display: flex; flex-direction: row; align-items: center;">
                        <div>
                            <img src="images/notif-profile.png" style="width: 50px; height: 50px;">
                        </div>
                        <div style="display: flex; flex-direction: column; margin-left: 10px; margin-right: 5rem;">
                            <span class="text-sm">Val Dela Cruz</span>
                            <span class="text-sm">Lorem ipsum dolor sit amet.</span>
                            <span class="text-sm">June 14, 2023 at 10:00 AM</span>
                        </div>
                        <div style="display: flex; flex-direction: column; align-items: center; margin-right: 2rem;">
                            <i class="fa fa-solid fa-circle" style="color: #3C58FF; font-size: 12px;"></i>
                        </div>
                    </div>
                </a>

                <a class="dropdown-item" href="#" style="margin-bottom: 1rem;">
                    <div style="display: flex; flex-direction: row; align-items: center;">
                        <div>
                            <img src="images/notif-profile.png" style="width: 50px; height: 50px;">
                        </div>
                        <div style="display: flex; flex-direction: column; margin-left: 10px; margin-right: 5rem;">
                            <span class="text-sm">Val Dela Cruz</span>
                            <span class="text-sm">Lorem ipsum dolor sit amet.</span>
                            <span class="text-sm">June 14, 2023 at 10:00 AM</span>
                        </div>
                        <div style="display: flex; flex-direction: column; align-items: center; margin-right: 2rem;">
                            <i class="fa fa-solid fa-circle" style="color: #3C58FF; font-size: 12px;"></i>
                        </div>
                    </div>
                </a>
                <a class="dropdown-item" href="#" style="margin-bottom: 1rem;">
                    <div style="display: flex; flex-direction: row; align-items: center;">
                        <div>
                            <img src="images/notif-profile.png" style="width: 50px; height: 50px;">
                        </div>
                        <div style="display: flex; flex-direction: column; margin-left: 10px; margin-right: 5rem;">
                            <span class="text-sm">Val Dela Cruz</span>
                            <span class="text-sm">Lorem ipsum dolor sit amet.</span>
                            <span class="text-sm">June 14, 2023 at 10:00 AM</span>
                        </div>
                        <div style="display: flex; flex-direction: column; align-items: center; margin-right: 2rem;">
                            <i class="fa fa-solid fa-circle" style="color: #3C58FF; font-size: 12px;"></i>
                        </div>
                    </div>
                </a>
                <a class="dropdown-item" href="#" style="margin-bottom: 1rem;">
                    <div style="display: flex; flex-direction: row; align-items: center;">
                        <div>
                            <img src="images/notif-profile.png" style="width: 50px; height: 50px;">
                        </div>
                        <div style="display: flex; flex-direction: column; margin-left: 10px; margin-right: 5rem;">
                            <span class="text-sm">Val Dela Cruz</span>
                            <span class="text-sm">Lorem ipsum dolor sit amet.</span>
                            <span class="text-sm">June 14, 2023 at 10:00 AM</span>
                        </div>
                        <div style="display: flex; flex-direction: column; align-items: center; margin-right: 2rem;">
                            <i class="fa fa-solid fa-circle" style="color: #3C58FF; font-size: 12px;"></i>
                        </div>
                    </div>
                </a>

                

                <a class="btn" href="{{ route('notification-page') }}" style="background-color: #0A0863; color: white; margin-left: 1rem; margin-right: 1rem; width: 350px;">See All Notifications</a>
            </div>
        </li>

        
        <!--Admin Profile-->
        <li class="nav-item">
            <div class="image" style="margin-top: 5px; margin-right: 1rem;">
                <a href="{{ route('profile-page') }}">
                    <img alt="User Image" class="img-circle elevation-2" src="{{ $this->viewProfile() }}" width="30px" height="30px">
                </a>
            </div>
        </li>

        <!--Interface FullScreen-->
        {{-- <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li> --}}
    </ul>
</nav>
