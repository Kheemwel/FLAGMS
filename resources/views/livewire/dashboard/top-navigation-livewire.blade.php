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
        <li class="nav-item" style="margin-right: 1rem; margin-top: 2px;" data-toggle="modal" data-target="#user-guide">
            <iconify-icon icon="icon-park-solid:help" style="font-size: 22px; margin-top: 10px;"></iconify-icon>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('guidance-program-page') }}" style="margin-right: 1rem; margin-top: 2px;">
                <iconify-icon icon="bx:calendar" style="color: #252525; font-size: 22px;"></iconify-icon>
                <span class="badge badge-primary navbar-badge">1</span>
            </a>
        </li>


        @include('livewire.dashboard.notification-menu')

        <!--Admin Profile-->
        <li class="nav-item">
            <div class="image" style="margin-top: 5px; margin-right: 1rem;">
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
    @include('livewire.dashboard.user-guide')
</nav>
