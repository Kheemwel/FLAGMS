<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #FFFF; font-size: 16px;">
    <!-- Brand Logo -->
    <a class="brand-link" href="#" style="border: transparent;">
        <img alt="AdminLTE Logo" class="brand-image img-circle" src="images/fiat.png" style="width: auto; height: auto;">
        <span class="brand-text font-weight-bold" style="color: #080743;">Fiat Lux Academe</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="margin-top: 5rem;">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user-dashboard-page') }}">
                        <iconify-icon icon="clarity:dashboard-solid" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('child-records-page') }}">
                        <iconify-icon icon="streamline:interface-file-clipboard-text-edition-form-task-checklist-edit-clipboard" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            My Child's Records
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guidance-program-page') }}">
                        <iconify-icon icon="bx:calendar" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Guidance Program
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('fill-out-forms-page') }}">
                        <iconify-icon icon="fluent-mdl2:file-request" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Request
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="" wire:click.prevent='logout()'>
                        <iconify-icon icon="majesticons:logout" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>