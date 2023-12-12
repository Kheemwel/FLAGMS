<nav class="main-header navbar sticky-top navbar-expand navbar-white navbar-light" style="border-color: transparent; background-color: rgb(253, 253, 253);">

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
        <div class="d-flex justify-content-center align-items-center">
            <li class="nav-item mr-1 mt-2"data-toggle="modal" data-target="#user-guide">
                <iconify-icon icon="icon-park-solid:help" class="mt-1" style="color: #252525; font-size: 24px;"></iconify-icon>
            </li>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <li class="nav-item">
                <a class="nav-link ml-0 mt-1" href="{{ route('guidance-program-page') }}">
                    <iconify-icon icon="bx:calendar" class=" text-center" style="color: #252525; font-size: 24px;"></iconify-icon>
                    <span class="badge badge-primary navbar-badge">1</span>
                </a>
            </li>
        </div>
        


        @include('livewire.dashboard.notification-menu')

        <!--Admin Profile-->
        <li class="nav-item">
            <div class="image mt-2 mr-2">
                <a href="{{ route('profile-page') }}">
                    <img alt="User Image" class="img-circle elevation-2" height="30px" src="{{ $this->viewProfile() }}" width="30px">
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
