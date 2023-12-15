<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #FFFF; font-size: 16px;">
    <!-- Brand Logo -->
    <a class="brand-link" href="#" style="border: transparent;">
        <img alt="AdminLTE Logo" class="brand-image img-circle" src="images/fiat.png" style="width: auto; height: auto;">
        <span class="brand-text font-weight-bold" style="color: #080743;">FLAGMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="margin-top: 5rem;">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" id="left-nav-links" data-accordion="true" data-widget="treeview" role="menu">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a class="nav-link nav-link-button nav-link-button {{ setActiveLink('user-dashboard-page') }}" href="{{ route('user-dashboard-page') }}">
                        <iconify-icon icon="clarity:dashboard-solid" style="color: #252525;"></iconify-icon>
                        <p style="color: #252525;">
                            Dashboard
                        </p>
                    </a>
                </li>
                @if (in_array('StudentPrivileges', $privileges))
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
                @endif
                @if (in_array('ParentPrivileges', $privileges))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('child-records-page') }}">
                            <iconify-icon icon="streamline:interface-file-clipboard-text-edition-form-task-checklist-edit-clipboard" style="color: #252525;"></iconify-icon>
                            <p style="color: #252525;">
                                My Child's Records
                            </p>
                        </a>
                    </li>
                @endif
                @if (in_array('ViewAccounts', $privileges) || in_array('ViewGuidanceAccounts', $privileges) || in_array('ViewStudentAccounts', $privileges) || in_array('ViewParentAccounts', $privileges) || in_array('ViewTeacherAccounts', $privileges) || in_array('ViewPrincipalAccounts', $privileges))
                    <li class="nav-item">
                        <a class="nav-link nav-link-button {{ setActiveLink('user-accounts-page') }}" href="{{ route('user-accounts-page') }}">
                            <iconify-icon height="20" icon="mdi:account-box-multiple-outline" style="color: black;" width="20"></iconify-icon>
                            <p style="color: #252525;">Accounts</p>
                        </a>
                    </li>
                @endif
                @if (in_array('ViewStudentsAnecdotal', $privileges) || in_array('ViewStudentSummary', $privileges))
                    <li class="nav-item">
                        <a class="nav-link nav-link-button {{ setActiveLink('students-page') }}" href="{{ route('students-page') }}">
                            <iconify-icon icon="mdi:account-school" style="color: black;" width="20"></iconify-icon>
                            <p style="color: #252525;">Students</p>
                        </a>
                    </li>
                @endif
                @if (!empty(array_intersect($privileges, ['ManageRoles', 'ManageDatabase'])))
                    <li class="nav-item">
                        <a class="nav-link  nav-link-button" href="#">
                            <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                            <p style="color: #252525;">
                                File Management
                                <i class="right fas fa-angle-left" style="color: #252525;"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @if (in_array('ManageRoles', $privileges))
                                <li class="nav-item">
                                    <a class="nav-link nav-link-button {{ setActiveLink('roles-page') }}" href="{{ route('roles-page') }}">
                                        <p style="color: #252525;">Roles</p>
                                    </a>
                                </li>
                            @endif
                            @if ($role == 'Guidance' || $role == 'SuperAdmin')
                                <li class="nav-item">
                                    <a class="nav-link nav-link-button {{ setActiveLink('profile-pictures-page') }}" href="{{ route('profile-pictures-page') }}">
                                        <p style="color: #252525;">Profile Pictures</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-button {{ setActiveLink('offenses-page') }}" href="{{ route('offenses-page') }}">
                                        <p style="color: #252525;">Offenses</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-button {{ setActiveLink('guidance-schedule-tags-page') }}" href="{{ route('guidance-schedule-tags-page') }}">
                                        <p style="color: #252525;">Guidance Schedule Tags</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-button {{ setActiveLink('item-images-page') }}" href="{{ route('item-images-page') }}">
                                        <p style="color: #252525;">Item Images</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-button {{ setActiveLink('item-types-page') }}" href="{{ route('item-types-page') }}">
                                        <p style="color: #252525;">Item Types</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-button {{ setActiveLink('item-tags-page') }}" href="{{ route('item-tags-page') }}">
                                        <p style="color: #252525;">Item Tags</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-button {{ setActiveLink('guidance-records-page') }}" href="{{ route('guidance-records-page') }}">
                                        <p style="color: #252525;">Guidance Records</p>
                                    </a>
                                </li>
                            @endif
                            @if (in_array('ManageDatabase', $privileges))
                                <li class="nav-item">
                                    <a class="nav-link nav-link-button {{ setActiveLink('database-management-page') }}" href="{{ route('database-management-page') }}">
                                        <p style="color: #252525;">Database Management</p>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if (in_array('ManageWebsiteContent', $privileges))
                    <li class="nav-item">
                        <a class="nav-link nav-link-button {{ setActiveLink('content-management-page') }}" href="{{ route('content-management-page') }}" target="blank">
                            <iconify-icon icon="ph:files-fill" style="color: #252525;"></iconify-icon>
                            <p style="color: #252525;">
                                Content Management
                            </p>
                        </a>
                    </li>
                @endif
                @if ($role == 'SuperAdmin' || $role == 'Guidance')
                    <li class="nav-item">
                        <a class="nav-link  nav-link-button" href="#">
                            <iconify-icon icon="streamline:interface-file-clipboard-text-edition-form-task-checklist-edit-clipboard" style="color: #252525;"></iconify-icon>
                            <p style="color: #252525;">
                                Guidance Records
                                <i class="right fas fa-angle-left" style="color: #252525;"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a class="nav-link nav-link-button {{ setActiveLink('anecdotal-records-page') }}" href="{{ route('anecdotal-records-page') }}">
                                    <p style="color: #252525;">Anecdotal Records</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-button {{ setActiveLink('violation-forms-page') }}" href="{{ route('violation-forms-page') }}">
                                    <p style="color: #252525;">Violation Forms</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-button {{ setActiveLink('home-visitations-page') }}" href="{{ route('home-visitation-forms-page') }}">
                                    <p style="color: #252525;">Home Visitation Forms</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-button {{ setActiveLink('individual-inventory-page') }}" href="{{ route('individual-inventory-page') }}">
                                    <p style="color: #252525;">Individual Inventory</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if (in_array('ViewOnlyFoundtItems', $privileges) || in_array('ManageExpiredItems', $privileges) || in_array('ManageClaimedItems', $privileges) || in_array('AddLostAndFound', $privileges) || in_array('DeleteLostAndFound', $privileges) || in_array('EditLostAndFound', $privileges))
                    <li class="nav-item">
                        <a class="nav-link nav-link-button {{ setActiveLink('lost-and-found-page') }}" href="{{ route('lost-and-found-page') }}">
                            <iconify-icon icon="fluent:box-search-16-filled" style="color: #252525;"></iconify-icon>
                            <p style="color: #252525;">
                                Lost and Found
                            </p>
                        </a>
                    </li>
                @endif
                @if (!empty(array_intersect($privileges, ['FillOutForms', 'ApproveForm', 'RequestForm'])))
                    <li class="nav-item">
                        <a class="nav-link  nav-link-button" href="#">
                            <iconify-icon icon="fluent-mdl2:file-request" style="color: #252525;"></iconify-icon>
                            <p style="color: #252525;">
                                Forms
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @if (in_array('ApproveForm', $privileges))
                                <li class="nav-item">
                                    <a class="nav-link nav-link-button {{ setActiveLink('approval-forms-page') }}" href="{{ route('approval-forms-page') }}">
                                        <p style="color: #252525;">Approval Forms</p>
                                    </a>
                                </li>
                            @endif
                            @if (in_array('RequestForm', $privileges))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('request-forms-page') }}">
                                        <p style="color: #252525;">Request Forms</p>
                                    </a>
                                </li>
                            @endif
                            @if (in_array('FillOutForms', $privileges))
                                <li class="nav-item">
                                    <a class="nav-link nav-link-button {{ setActiveLink('fill-out-forms-page') }}" href="{{ route('fill-out-forms-page') }}">
                                        <p style="color: #252525;">Fill Out Forms</p>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link nav-link-button " href="#" wire:click.prevent='logout()'>
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
