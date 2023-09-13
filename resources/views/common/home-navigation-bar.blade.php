<nav class="navbar navbar-expand navbar-white navbar-light"
    style="border: 1px solid rgb(213, 212, 212); background: linear-gradient(180deg, #000000 -129.53%, #0A0863 100%);">
    <!-- Brand Logo -->
    <a class="brand-link" href="{{ route('home-page') }}" style="border: transparent;">
        <img alt="AdminLTE Logo" class="brand-image img-circle" src="images/fiat.png" style="width: auto; height: auto;">
        <span class="brand-text" style="color: white;">Fiat Lux Academe</span>
    </a>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-------------- RIGHT HAND UPPER SIDE NAVIGATION -------->
        <!-------HOME BUTTON--------->
        <li class="nav-item">
            <a class="nav-link" href="/">
                <p style="color: white; font-size: 18px;">
                    Home
                </p>
            </a>
        </li>
        <!-------ABOUT BUTTON--------->
        <li class="nav-item">
            <a class="nav-link" href="/about">
                <p style="color: white; font-size: 18px;">
                    About
                </p>
            </a>
        </li>

        <!-------LOGIN BUTTON--------->
        <li class="nav-item">
            <a class="nav-link" data-target="#login-modal" data-toggle="modal" href="">
                <p style="color: white; font-size: 18px;"><i class="fa fa-solid fa-user"></i> Log In</p>
            </a>
            @livewire('login-livewire')
        </li>

        <!--Interface FullScreen-->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt" style="color: white;"></i>
            </a>
        </li>
    </ul>
</nav>
