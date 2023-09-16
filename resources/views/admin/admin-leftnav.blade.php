<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #FFFF; font-size: 16px;">
    <!-- Brand Logo -->
    <a class="brand-link" href="#" style="border: transparent;">
        <img alt="AdminLTE Logo" class="brand-image img-circle" src="{{ $logo }}" style="width: auto; height: auto;">
        <span class="brand-text font-weight-bold" style="color: #080743;">{{ $school_name }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="margin-top: 5rem;">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a class="nav-link {{ setActiveLink('user-dashboard-page') }}" href="{{ route('user-dashboard-page') }}">
                        <iconify-icon icon="clarity:dashboard-solid" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActiveLink('user-accounts-page') }}" href="{{ route('user-accounts-page') }}">
                        <iconify-icon height="20" icon="mdi:account-box-multiple-outline" style="color: black;" width="20"></iconify-icon>
                        <p style="color: #252525;">Accounts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <iconify-icon icon="fa6-solid:users" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Users
                            <i class="right fas fa-angle-left" style="color: #252525;"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('guidance-page') }}" href="{{ route('guidance-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Guidance</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('students-page') }}" href="{{ route('students-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">
                                    Students
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('parents-page') }}" href="{{ route('parents-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Parents</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('teachers-page') }}" href="{{ route('teachers-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Teachers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('principals-page') }}" href="{{ route('principals-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Principals</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            File Management
                            <i class="right fas fa-angle-left" style="color: #252525;"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('roles-page') }}" href="{{ route('roles-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('profile-pictures-page') }}" href="{{ route('profile-pictures-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Profile Pictures</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('offenses-page') }}" href="{{ route('offenses-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Offenses</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('calendar-colors-page') }}" href="{{ route('calendar-colors-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Calendar Colors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('item-images-page') }}" href="{{ route('item-images-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Item Images</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('item-types-page') }}" href="{{ route('item-types-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Item Types</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('guidance-records-page') }}" href="{{ route('guidance-records-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Guidance Records</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('database-page') }}" href="{{ route('database-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Database</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActiveLink('content-management-page') }}" href="{{ route('content-management-page') }}">
                        <iconify-icon icon="ph:files-fill" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Content Management
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
                            <a class="nav-link {{ setActiveLink('anecdotal-records-page') }}" href="{{ route('anecdotal-records-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Anecdotal Records</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('violation-forms-page') }}" href="{{ route('violation-forms-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Violation Forms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('home-visitations-page') }}" href="{{ route('home-visitation-forms-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Home Visitation Forms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('individual-inventory-page') }}" href="{{ route('individual-inventory-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Individual Inventory</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActiveLink('guidance-program-page') }}" href="{{ route('guidance-program-page') }}">
                        <iconify-icon icon="bx:calendar" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Guidance Program
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActiveLink('lost-and-found-page') }}" href="{{ route('lost-and-found-page') }}">
                        <iconify-icon icon="fluent:box-search-16-filled" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Lost and Found
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <iconify-icon icon="fluent-mdl2:file-request" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Forms
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('approval-forms-page') }}" href="{{ route('approval-forms-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Approval Forms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ setActiveLink('fill-out-forms-page') }}" href="{{ route('fill-out-forms-page') }}">
                                <i class="far fa-circle nav-icon" style="color: #252525;"></i>
                                <p style="color: #252525;">Fill Out Forms</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" wire:click.prevent='logout()'>
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
</aside>
