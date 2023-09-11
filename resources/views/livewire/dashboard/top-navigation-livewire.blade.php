<nav class="main-header navbar sticky-top navbar-expand navbar-white navbar-light" style="border-color: transparent; background-color: rgb(253, 253, 253);">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-solid fa-bars" style="color: #080743;"></i></a>
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

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown" style="margin-right: 2rem;">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">2</span>
            </a>
            <!--NOTIF HEADER-->
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div style="display: flex; flex-direction: row; align-items: baseline;">
                    <span class="dropdown-header" style="font-size: 20px; text-align: left; color: #252525; font-weight: bold;">Notification</span>
                    <span class="dropdown-header" style="font-size: 12px; text-align: left; color: #252525; margin-left: 2rem;">Mark all as
                        read</span>
                </div>
                <div class="dropdown-divider"></div>

                <!--NOTIF CONTENT-->
                <a class="dropdown-item" href="#">
                    <div style="display: flex; flex-direction: row;">
                        <div>
                            <img src="images/notif-profile.png">
                        </div>
                        <div style="display: flex; flex-direction: column; margin-left: 1rem;">
                            <span class="float-right text-muted text-sm"> Val Dela Cruz</span>
                            <span class="float-right text-muted text-sm">Lorem Ip</span>
                            <span class="float-right text-muted text-sm">June 15, 23</span>
                        </div>
                        <div style="display: flex; flex-direction: column; margin-left: 1rem; padding: 2rem;">
                            <i class="fa fa-solid fa-circle" style="color: #3C58FF; font-size: 12px;"></i>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    <div style="display: flex; flex-direction: row;">
                        <div>
                            <img src="images/notif-profile2.png">
                        </div>
                        <div style="display: flex; flex-direction: column; margin-left: 1rem;">
                            <span class="float-right text-muted text-sm"> Anne Lopez</span>
                            <span class="float-right text-muted text-sm">Lorem Ip</span>
                            <span class="float-right text-muted text-sm">June 16, 23</span>
                        </div>
                        <div style="display: flex; flex-direction: column; margin-left: 1rem; padding: 2rem;">
                            <i class="fa fa-solid fa-circle" style="color: #3C58FF; font-size: 12px;"></i>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item dropdown-footer" href="{{ route('notification-page') }}">See All
                    Notifications</a>
            </div>
        </li>
        
        <!--Admin Profile-->
        <li class="nav-item">
            <div class="image">
                <a href="{{ route('profile-page') }}">
                    <img alt="User Image" class="img-circle elevation-2" src="{{ $this->viewProfile() }}" width="30px">
                </a>
            </div>
        </li>

        <!--Interface FullScreen-->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
