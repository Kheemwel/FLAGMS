<aside class="main-sidebar sidebar-dark-primary elevation-4"  style="background-color: #FFFF; font-size: 16px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="border: transparent;">
        <img src="images/fiat.png" alt="AdminLTE Logo" class="brand-image img-circle" style="width: auto; height: auto;">
        <span class="brand-text font-weight-bold" style="color: #080743;">Fiat Lux Academe</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="margin-top: 5rem;">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('user-dashboard-page') }}" class="nav-link">
                        <iconify-icon icon="clarity:dashboard-solid" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                        Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('students-anecdotals-page') }}" class="nav-link">
                        <iconify-icon icon="ph:users-three-fill" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">Students</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user-guidance-program-page') }}" class="nav-link">
                        <iconify-icon icon="bx:calendar" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                        Guidance Program
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user-lost-and-found-page') }}" class="nav-link">
                        <iconify-icon icon="fluent:box-search-16-filled" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                        Lost and Found
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <iconify-icon icon="clarity:form-line" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Forms
                            <i class="right fas fa-angle-left" style="color: #252525;"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('request-forms-page') }}" class="nav-link">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Request Forms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('fill-out-forms-page') }}" class="nav-link">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Fill Out Requests</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" wire:click='logout()'>
                        <iconify-icon icon="majesticons:logout" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                        Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav><!-- /.sidebar-menu -->
    </div><!-- /.sidebar -->
</aside>