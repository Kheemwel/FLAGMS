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
                    <a class="nav-link" href="#">
                        <iconify-icon icon="streamline:interface-file-clipboard-text-edition-form-task-checklist-edit-clipboard" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Records
                            <i class="right fas fa-angle-left" style="color: #252525;"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('student-anecdotal-record-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Anecdotal Records</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('student-individual-inventory-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Individual Inventory</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user-guidance-program-page') }}">
                        <iconify-icon icon="bx:calendar" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Guidance Program
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user-lost-and-found-page') }}">
                        <iconify-icon icon="guidance:lost-and-found" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Lost and Found
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('fill-out-forms-page') }}">
                        <iconify-icon icon="fluent-mdl2:file-request" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Forms
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" wire:click.prevent='logout()'>
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
