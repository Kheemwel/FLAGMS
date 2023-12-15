<nav class="navbar navbar-expand navbar-white navbar-light pt-sm-4 pt-md-4 pt-lg-4 pt-xl-4 pl-sm-5 pl-md-5 pl-lg-5 pl-xl-5 pr-sm-5 pr-md-5 pr-lg-5 pr-xl-5">
    <!-- Brand Logo -->
    <div class="d-flex align-items-center">
        <img src="{{ $logo }}" alt="AdminLTE Logo" class="brand-image img-circle mr-2" style="width: 60px; height: 60px;">
        <div style="font-family: 'Inria Serif', serif; font-size: 22px; line-height: 1.2;">
            {!! $school_name !!}
        </div>
    </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        {{-- <li class="nav-item">
            <a class="nav-link btn" target="blank" href="https://docs.google.com/forms/d/e/1FAIpQLSe2qMR2pI9wHH1csWALMKe2V4OcvYCkVpDyr0_-Hc-0WnKY4w/viewform">
                <p class="pr-4 pl-4 pt-1 pb-1" style="color: white; font-size: 14px; background-color: #0A0863; border-radius: 15px;">Take Survey</p>
            </a>
        </li> --}}
        <!-------LOGIN BUTTON--------->
        <li class="nav-item">
            <button class="nav-link btn" wire:click='authenticateWithRememberToken'>
                <p class="pr-4 pl-4 pt-1 pb-1" style="color: white; font-size: 14px; background-color: #0A0863; border-radius: 15px;"> Login</p>
            </button>
        </li>
    </ul>
</nav><!--------------- /.navbar ----------------------->

