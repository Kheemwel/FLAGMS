<nav class="navbar navbar-expand navbar-white navbar-light" style="padding-top: 1rem; padding-left: 4rem; padding-right: 4rem;">
    <!-- Brand Logo -->
    <div style="border: transparent; display: flex; align-items: center;">
        <img src="{{ $logo }}" alt="AdminLTE Logo" class="brand-image img-circle" style="width: 60px; height: 60px; margin-right: 10px;">
        <div style="font-family: 'Inria Serif', serif; font-size: 22px;">
            {{-- <span style="color: #0A0863; font-weight: bold; font-family: 'Inria Serif', serif; font-size: 22px;">Fiat Lux Academe</span>
            <span style="color: #0A0863; font-size: 16px; font-weight: bold; font-family: 'Inria Serif', serif;">Cavite</span> --}}
            {!! $school_name !!}
        </div>
    </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-------LOGIN BUTTON--------->
        <li class="nav-item">
            <button class="nav-link btn" wire:click='authenticateWithRememberToken'>
                <p style="color: white; font-size: 14px; background-color: #0A0863; border-radius: 15px; padding: 5px; padding-left: 30px; padding-right: 30px;"> Login</p>
            </button>
        </li>
    </ul>
</nav><!--------------- /.navbar ----------------------->

