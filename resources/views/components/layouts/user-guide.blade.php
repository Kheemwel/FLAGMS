
<style>
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        transition: transform 0.3s ease-in-out;
    }

    .carousel-control-prev:hover .carousel-control-prev-icon,
    .carousel-control-next:hover .carousel-control-next-icon {
        transform: scale(1.2);
    }

    .carousel-inner .carousel-item {
        transition: transform 0.5s ease-in-out;
    }

    .carousel-inner:hover .carousel-item {
        transform: scale(1.2);
    }
</style>

<!--USER GUIDE MODAL -->
<div class="modal fade" id="user-guide">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" x-data="userGuide">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-12 col-md-4 d-flex flex-column justify-content-center align-items-center mb-3">
                            <img alt="Fiat Logo" class="img-fluid" src="images/fiat.png">
                            <p class="text-lg font-weight-bold text-center" style="color: #252525;">FLAGMS User Guide
                            </p>
                        </div>
                        <!-- USER GUIDE LEFT NAVBAR PART -->
                        <div class="col-12 col-md-8">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="true" data-widget="treeview" id="user-guide-links" role="menu">
                                <li class="nav-item">
                                    <a class="nav-link  nav-link-button" href="#sidebar">
                                        <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                                        <p style="color: #252525;">
                                            Getting Started
                                            <i class="right fas fa-angle-left" style="color: #252525;"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item" x-on:click="view('start', 'sidebar')">
                                            <a class="nav-link nav-link-button" href="#">
                                                <p style="color: #252525;">Sidebar</p>
                                            </a>
                                        </li>
                                        <li class="nav-item" x-on:click="view('start', 'notification')">
                                            <a class="nav-link nav-link-button" href="#">
                                                <p style="color: #252525;">Notification and Profile</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link  nav-link-button" href="#">
                                        <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                                        <p style="color: #252525;">
                                            Your Profile
                                            <i class="right fas fa-angle-left" style="color: #252525;"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item" x-on:click="view('profile', 'email')">
                                            <a class="nav-link nav-link-button" href="#">
                                                <p style="color: #252525;">Change Your Email</p>
                                            </a>
                                        </li>
                                        <li class="nav-item" x-on:click="view('profile', 'password')">
                                            <a class="nav-link nav-link-button" href="#">
                                                <p style="color: #252525;">Reset Your Password</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link  nav-link-button" href="#">
                                        <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                                        <p style="color: #252525;">
                                            User Accounts
                                            <i class="right fas fa-angle-left" style="color: #252525;"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item" x-on:click="view('account', 'addUser')">
                                            <a class="nav-link nav-link-button" href="#">
                                                <p style="color: #252525;">Adding User</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link nav-link-button" href="#" x-on:click="view('account', 'importUser')">
                                                <p style="color: #252525;">Importing User Accounts</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link nav-link-button" href="#" x-on:click="view('account', 'exportUser')">
                                                <p style="color: #252525;">Exporting User Accounts</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link nav-link-button nav-link-button" href="#" x-on:click="view('role', 'role')">
                                        <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                                        <p style="color: #252525;">
                                            Add New Role
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link  nav-link-button" href="#">
                                        <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                                        <p style="color: #252525;">
                                            Offenses
                                            <i class="right fas fa-angle-left" style="color: #252525;"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item" x-on:click="view('offense', 'offense')">
                                            <a class="nav-link nav-link-button" href="#">
                                                <p style="color: #252525;">Adding New Offense</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link nav-link-button" href="#" x-on:click="view('offense', 'offenseCategory')">
                                                <p style="color: #252525;">Adding New Offense Category</p>
                                            </a>
                                        </li>
                                        <li class="nav-item" x-on:click="view('offense', 'offenseLevel')">
                                            <a class="nav-link nav-link-button" href="#">
                                                <p style="color: #252525;">Adding New Offense Level</p>
                                            </a>
                                        </li>
                                        <li class="nav-item" x-on:click="view('offense', 'offense')">
                                            <a class="nav-link nav-link-button" href="#">
                                                <p style="color: #252525;">Adding New Disciplinary Actions</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link nav-link-button nav-link-button" href="#">
                                        <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                                        <p style="color: #252525;">
                                           Adding New Offense
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link nav-link-button nav-link-button" href="#">
                                        <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                                        <p style="color: #252525;">
                                            Adding New Offense Category
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link nav-link-button nav-link-button" href="#">
                                        <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                                        <p style="color: #252525;">
                                            Adding New Offense Level
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link nav-link-button nav-link-button" href="#">
                                        <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                                        <p style="color: #252525;">
                                            Adding New Disciplinary Actions
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link nav-link-button nav-link-button" href="#">
                                        <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                                        <p style="color: #252525;">
                                            Create an Event
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link nav-link-button nav-link-button" href="#">
                                        <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                                        <p style="color: #252525;">
                                            Add Schedule Tag
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link nav-link-button nav-link-button" href="#">
                                        <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                                        <p style="color: #252525;">
                                            Add Item Type
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link nav-link-button nav-link-button" href="#">
                                        <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                                        <p style="color: #252525;">
                                            Add Item Tag
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link nav-link-button nav-link-button" href="#">
                                        <iconify-icon icon="solar:folder-with-files-bold" style="color: #252525;"></iconify-icon>
                                        <p style="color: #252525;">
                                            Edit the Content in Home Page
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- USER GUIDE CONTENT PART -->
                    <div class="row">
                        <div class="col-12 text-justify">
                            <div x-show="content == 'start'">
                                <p class="text-md text-xl font-weight-bold mt-5 ml-5 mr-5 text-center">Quick Start Guide
                                </p>

                                <p class="text-md text-lg mb-4 ml-5 mr-5">
                                    Welcome to Fiat Lux Academe Guidance Management System (FLAGMS). It provides modules and features that can help with the manual processing and managing of records and reports of the guidance office of Fiat Lux Academe Dasmariñas. To get started,  check out the guide below for a quick tour.
                                </p>

                                <div x-ref="sidebar">
                                    <p class="text-md text-xl ml-5 mr-5 text-center">Sidebar</p>

                                    <!-- IMAGE DEMO -->
                                    <div class="row">
                                        <div class="col-12 col-md-12 d-flex flex-column justify-content-center align-items-center p-5">
                                            <img alt="Image Guide 1" class="img-fluid" src="images/user-guide/img_guide1.png" style="max-width: 80%; height: auto;">
                                        </div>
                                    </div>

                                    <!-- TABS -->
                                    <div class="card card-tabs ml-5 mr-5">
                                        <div class="card-header p-0 pt-1">
                                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-dashboard" aria-selected="true" class="nav-link active" data-toggle="pill" href="#custom-tabs-one-dashboard" id="custom-tabs-one-dashboard-tab" role="tab" style="color: #252525;">1. Dashboard</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-accounts" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-accounts" id="custom-tabs-one-accounts-tab" role="tab" style="color: #252525;">2. Accounts</a>
                                                </li>

                                                {{--FOR PARENTS: 
                                                    
                                                    <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-child-rec" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-child-rec" id="custom-tabs-one-child-rec-tab" role="tab" style="color: #252525;">2. My Child's Records</a>

                                                </li> --}}

                                                <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-students" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-students" id="custom-tabs-one-students-tab" role="tab" style="color: #252525;">3. Students</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-file-management" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-file-management" id="custom-tabs-one-file-management-tab" role="tab" style="color: #252525;">4. File Management</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-content-management" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-content-management" id="custom-tabs-one-content-management-tab" role="tab" style="color: #252525;">5. Content
                                                        Management</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                                <div aria-labelledby="custom-tabs-one-dashboard-tab" class="tab-pane fade show active" id="custom-tabs-one-dashboard" role="tabpanel">
                                                    {{-- FOR ADMIN, STUDENTS, TEACHERS & PARENTS: --}}
                                                    This shows the comprehensive summary of your completed activities, your calendar, and upcoming events.

                                                    {{-- FOR PRINCIPAL:
                                                    This shows the comprehensive summary of your completed activities, your calendar, list of forms that need to fill out, and upcoming events. --}}
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-accounts-tab" class="tab-pane fade" id="custom-tabs-one-accounts" role="tabpanel">
                                                    {{-- FOR ADMIN --}}
                                                    This allows you to manage user accounts. First, you can add new users and customize their access. Second, you can add many users by importing them for time-saving efficiency. Third, easily export user data for comprehensive reports or backups. 
                                                </div>

                                                {{-- FOR PARENTS:

                                                <div aria-labelledby="custom-tabs-one-child-rec-tab" class="tab-pane fade" id="custom-tabs-one-child-rec" role="tabpanel">
                                                    
                                                    This shows the anecdotal record, individual inventory report and summary information of your child/children. 

                                                </div> --}}

                                                <div aria-labelledby="custom-tabs-one-students-tab" class="tab-pane fade" id="custom-tabs-one-students" role="tabpanel">
                                                    {{-- ADMIN --}}
                                                    This shows the detailed list of students alongside their anecdotal records and student information.

                                                    {{-- TEACHER:
                                                    This shows the list of students alongside their anecdotal records. --}}
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-file-management-tab" class="tab-pane fade" id="custom-tabs-one-file-management" role="tabpanel">
                                                    {{-- ADMIN: --}}
                                                    This allows you to easily manage important components in the guidance management system. It includes pages for roles, profile pictures, offenses, guidance schedule tags, item images, item types, item tags, guidance records, and database management.
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-content-management-tab" class="tab-pane fade" id="custom-tabs-one-content-management" role="tabpanel">
                                                    {{-- ADMIN: --}}
                                                    This allows you to easily customize and update the content on the homepage, ensuring that it reflects the most relevant and important information.
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.card -->

                                    <!-- IMAGE DEMO -->
                                    <div class="row">
                                        <div class="col-12 col-md-12 d-flex flex-column justify-content-center align-items-center p-5">
                                            <img alt="Image Guide 1" class="img-fluid" src="images/user-guide/img_guide2.png" style="max-width: 80%; height: auto;">
                                        </div>
                                    </div>

                                    <!-- TABS -->
                                    <div class="card card-tabs ml-5 mr-5">
                                        <div class="card-header p-0 pt-1">
                                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-records" aria-selected="true" class="nav-link active" data-toggle="pill" href="#custom-tabs-one-records" id="custom-tabs-one-records-tab" role="tab" style="color: #252525;">6. Records</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-lnf" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-lnf" id="custom-tabs-one-lnf-tab" role="tab" style="color: #252525;">7. Lost and Found</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-forms" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-forms" id="custom-tabs-one-forms-tab" role="tab" style="color: #252525;">8. Forms</a>
                                                </li>

                                                {{-- FOR PARENT:
                                                    <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-forms" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-forms" id="custom-tabs-one-forms-tab" role="tab" style="color: #252525;">3. Forms</a>
                                                    </li>
                                                 --}}
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                                <div aria-labelledby="custom-tabs-one-records-tab" class="tab-pane fade show active" id="custom-tabs-one-records" role="tabpanel">
                                                    {{-- ADMIN: --}}
                                                    This allows you to easily manage crucial documentation including anecdotal records, violation forms, home visitation forms, and individual inventory.  

                                                    {{-- STUDENT:
                                                    This shows your anecdotal record and individual inventory report. In the anecdotal record, it allows you to track your records and submit your signature digitally. Also, you can create or edit your individual inventory report.  --}}
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-lnf-tab" class="tab-pane fade" id="custom-tabs-one-lnf" role="tabpanel">
                                                    {{-- ADMIN: --}}
                                                    This allows you to effortlessly add found items to the system. You can also keep track of claimed items and easily identify expired items. This ensures a smooth and organized approach to managing lost and found items.

                                                    {{-- STUDENTS:
                                                    This shows the list of lost items in your school.  --}}

                                                    {{-- TEACHERS:
                                                    This shows the list of students alongside their anecdotal records. --}}
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-forms-tab" class="tab-pane fade" id="custom-tabs-one-forms" role="tabpanel">
                                                    {{-- ADMIN: --}}
                                                    In Forms, it consists of Approval Forms and Fill Out Forms pages. In the Approval Forms section, you can easily manage pending, approved, and disapproved requests. While the Fill Out Forms page enables you to view forms that need to be fill out for completion, with statuses indicating whether they are completed, incomplete, or pending.

                                                    {{-- STUDENTS:
                                                    In Forms, it has the Fill Out forms that enables you to view forms that need to be fill out for completion, with statuses indicating whether they are completed, incomplete, or pending. --}}

                                                    {{-- TEACHERS:
                                                    Forms consists of Requested Forms and Fill Out Forms. (PENDING!) --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.card -->
                                </div>

                                <div x-ref="notification"><!-- IMAGE DEMO -->
                                    <p class="text-md text-xl mt-5 ml-5 mr-5 text-center">User Guide, Guidance Program, Notification and Profile</p>

                                    <div class="row">
                                        <div class="col-12 col-md-12 d-flex flex-column justify-content-center align-items-center p-5">
                                            <img alt="Image Guide 1" class="img-fluid" src="images/user-guide/img_guide3.png" style="max-width: 80%; height: auto;">
                                        </div>
                                    </div>

                                    <!-- TABS -->
                                    <div class="card card-tabs ml-5 mr-5">
                                        <div class="card-header p-0 pt-1">
                                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-user-guide" aria-selected="false" class="nav-link active" data-toggle="pill" href="#custom-tabs-one-user-guide" id="custom-tabs-one-forms-user-guide" role="tab" style="color: #252525;">9. User Guide</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-guidance-prog" aria-selected="true" class="nav-link" data-toggle="pill" href="#custom-tabs-one-guidance-prog" id="custom-tabs-one-guidance-prog-tab" role="tab" style="color: #252525;">10. Guidance Program</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-notif" aria-selected="true" class="nav-link" data-toggle="pill" href="#custom-tabs-one-notif" id="custom-tabs-one-notif-tab" role="tab" style="color: #252525;">11. Notification</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-profile" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-profile" id="custom-tabs-one-profile-tab" role="tab" style="color: #252525;">12. Profile</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                                <div aria-labelledby="custom-tabs-one-user-guide-tab" class="tab-pane fade show active" id="custom-tabs-one-user-guide" role="tabpanel">
                                                    {{-- ALL: --}}
                                                    A user guide contains information about the features and functions of FLAGMS. This will help you to learn how to use the FLAGMS effectively and efficiently, as well as to solve any problems that you may encounter.
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-guidance-prog-tab" class="tab-pane fade" id="custom-tabs-one-guidance-prog" role="tabpanel">
                                                    {{-- ALL: --}}
                                                    This shows the guidance-related programs. This allows you to easily create a guidance-related event or program. 
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-notif-tab" class="tab-pane fade" id="custom-tabs-one-notif" role="tabpanel">
                                                    {{-- ALL: --}}
                                                    This allows you to receive timely updates, announcements, and important alerts. This module ensures that users are promptly notified of critical information, enhancing communication and keeping everyone informed. 
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-profile-tab" class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel">
                                                    {{-- ALL: --}}
                                                    This shows your personal information. This allows you to easily edit your profile and change password. 
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.card -->
                                </div>
                            </div>

                            <div x-show="content == 'profile'">
                                <!-- PROFILE PART -->
                                <p class="text-md text-xl font-weight-bold mt-5 ml-5 mr-5 text-center">Your Profile</p>

                                <div x-ref="email">
                                    <p class="text-md text-xl mb-4 ml-5 mr-5 text-center">
                                        Change Your Email
                                    </p>

                                    <!-- IMAGE CAROUSEL CHANGE EMAIL -->
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselChangeEmail" data-interval="1500" style="max-width: 70%; height: auto;">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img alt="First slide" class="d-block w-100" src="images/user-guide/change_email_demo1.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Second slide" class="d-block w-100" src="images/user-guide/change_email_demo2.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Third slide" class="d-block w-100" src="images/user-guide/change_email_demo3.png">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" data-slide="prev" href="#carouselChangeEmail" role="button">
                                            <span aria-hidden="true" class="carousel-control-prev-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselChangeEmail" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon" style="background-color: black; border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        
                                    </div>

                                    <div class="mt-5 mb-5 ml-5 mr-5" style="line-height: 1.2;">
                                        <p class="text-lg">1. Click your profile picture at the top right corner.</p>
                                        <p class="text-lg">2. Click <strong>Edit Profile</strong></p>
                                        <p class="text-lg">3. Edit your email in the designated email text box.</p>
                                        <p class="text-lg">4. Click <strong>Save</strong></p>
                                    </div>
                                </div>

                                <div x-ref="password">
                                    <p class="text-md text-xl mb-4 ml-5 mr-5 text-center">
                                        Reset Your Password
                                    </p>

                                    <!-- IMAGE CAROUSEL RESET YOUR PASSWORD -->
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselResetPass" data-interval="1500" style="max-width: 70%; height: auto;">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img alt="First slide" class="d-block w-100" src="images/user-guide/reset_pass1.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Second slide" class="d-block w-100" src="images/user-guide/reset_pass2.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Third slide" class="d-block w-100" src="images/user-guide/reset_pass3.png">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" data-slide="prev" href="#carouselResetPass" role="button">
                                            <span aria-hidden="true" class="carousel-control-prev-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselResetPass" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5" style="line-height: 1.2;">
                                        <p class="text-lg">1. Click your profile picture at the top right corner. </p>
                                        <p class="text-lg">2. Click <strong> Change Password </strong></p>
                                        <p class="text-lg">3. In the Create New Password window, change your password. </p>
                                        <p class="text-lg">4. Click <strong> Change Password </strong></p>
                                    </div>
                                </div>
                            </div>

                            <div x-show="content == 'account'"><!-- USER ACCOUNTS PART -->
                                <p class="text-md text-xl font-weight-bold pt-5 ml-5 mr-5 text-center">User Accounts</p>

                                <div x-ref="addUser">
                                    <p class="text-md text-xl mb-4 ml-5 mr-5 text-center">
                                        Adding User
                                    </p>

                                    <!-- IMAGE CAROUSEL ADDING USER -->
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselAddingUser" data-interval="1500" style="max-width: 70%; height: auto;">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img alt="First slide" class="d-block w-100" src="images/user-guide/add_user1.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Second slide" class="d-block w-100" src="images/user-guide/add_user2.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Third slide" class="d-block w-100" src="images/user-guide/add_user3.png">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" data-slide="prev" href="#carouselAddingUser" role="button">
                                            <span aria-hidden="true" class="carousel-control-prev-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselAddingUser" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5" style="line-height: 1.2;">
                                        <p class="text-lg">1. On the Sidebar, click <strong> Accounts </strong></p>

                                        <p class="text-lg">2. Click <strong> Add User </strong></p>
                                        <p class="text-lg">3. Fill Out the required information</p>
                                        <p class="text-lg">4. Click <strong> Submit User </strong></p>
                                    </div>
                                </div>

                                <div x-ref="importUser">
                                    <p class="text-md text-xl mb-4 ml-5 mr-5 text-center">
                                        Import User Accounts
                                    </p>

                                    <p class="text-md mb-4 ml-5 mr-5 text-center">
                                        The 'Import User Account' button allows you to add multiple users at once.
                                    </p>

                                    <!-- IMAGE CAROUSEL IMPORT USER ACCOUNTS -->
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselImportUsers" data-interval="1500" style="max-width: 70%; height: auto;">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img alt="First slide" class="d-block w-100" src="images/user-guide/import_export_user1.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Second slide" class="d-block w-100" src="images/user-guide/import_user2.png">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" data-slide="prev" href="#carouselImportUsers" role="button">
                                            <span aria-hidden="true" class="carousel-control-prev-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselImportUsers" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5" style="line-height: 1.2;">
                                        <p class="text-lg">1. On the Sidebar, click <strong> Accounts </strong></p>
                                        <p class="text-lg">2. Click <strong> Import User Accounts </strong> </p>
                                    </div>
                                </div>

                                <div x-ref="exportUser">
                                    <p class="text-md text-xl mb-4 ml-5 mr-5 text-center">
                                        Exporting User Accounts
                                    </p>

                                    <p class="text-md mb-4 ml-5 mr-5 text-center">
                                        The 'Export User Account' button allows you to download a file containing information
                                        for all existing users in the system.
                                    </p>

                                    <!-- IMAGE CAROUSEL IMPORT USER ACCOUNTS -->
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselExportUsers" data-interval="1500" style="max-width: 70%; height: auto;">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img alt="First slide" class="d-block w-100" src="images/user-guide/import_export_user1.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Second slide" class="d-block w-100" src="images/user-guide/export_user2.png">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" data-slide="prev" href="#carouselExportUsers" role="button">
                                            <span aria-hidden="true" class="carousel-control-prev-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselExportUsers" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5" style="line-height: 1.2;">
                                        <p class="text-lg">1. On the Sidebar, click <strong> Accounts </strong></p>
                                        <p class="text-lg">2. Click <strong> Export User Accounts </strong></p>
                                    </div>
                                </div>
                            </div>

                            <div x-show="content == 'role'">
                                <!-- ADDING NEW ROLE -->
                                <p class="text-md text-xl font-weight-bold ml-5 mr-5 text-center">Add New Role</p>

                                <div x-ref="role">
                                    <p class="text-md text-xl mb-4 ml-5 mr-5 text-center">
                                        Adding New Role
                                    </p>

                                    <!-- IMAGE CAROUSEL ADDING NEW ROLE -->
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselNewRole" data-interval="1500" style="max-width: 70%; height: auto;">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img alt="First slide" class="d-block w-100" src="images/user-guide/new_role1.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Second slide" class="d-block w-100" src="images/user-guide/new_role2.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Third slide" class="d-block w-100" src="images/user-guide/new_role3.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Fourth slide" class="d-block w-100" src="images/user-guide/new_role4.png">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" data-slide="prev" href="#carouselNewRole" role="button">
                                            <span aria-hidden="true" class="carousel-control-prev-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselNewRole" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5" style="line-height: 1.2;">
                                        <p class="text-lg">1. On the Sidebar, click <strong> File Management </strong></p>
                                        <p class="text-lg">2. Go to <strong> Roles </strong></p>
                                        <p class="text-lg">3. Click <strong> Add Role </strong></p>
                                        <p class="text-lg">4. Enter the Role name and set the permissions</p>
                                        <p class="text-lg">5. Click <strong> Submit </strong></p>
                                    </div>
                                </div>
                            </div>

                            <div x-show="content == 'offense'"><!--OFFENSES -->
                                <p class="text-md text-xl font-weight-bold ml-5 mr-5 text-center">Offenses</p>

                                <div x-ref="offense">
                                    <p class="text-md text-xl mb-4 ml-5 mr-5 text-center">
                                        Adding New Offense
                                    </p>

                                    <!-- IMAGE CAROUSEL ADDING NEW OFFENSE -->
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselNewOffense" data-interval="1500" style="max-width: 70%; height: auto;">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img alt="First slide" class="d-block w-100" src="images/user-guide/new_role1.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Second slide" class="d-block w-100" src="images/user-guide/new_offense2.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Third slide" class="d-block w-100" src="images/user-guide/new_offense3.png">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" data-slide="prev" href="#carouselNewOffense" role="button">
                                            <span aria-hidden="true" class="carousel-control-prev-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselNewOffense" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5" style="line-height: 1.2;">
                                        <p class="text-lg">1. On the Sidebar, click <strong> File Management </strong></p>
                                        <p class="text-lg">2. Click <strong> Offenses </strong></p>
                                        <p class="text-lg">3. In the <strong> Offenses </strong> tab, click <strong> Add New Offense </strong></p>
                                        <p class="text-lg">4. Enter the Offense name and select the Offense category and
                                            Offense Level. </p>
                                        <p class="text-lg">5. Click <strong> Submit </strong></p>
                                    </div>
                                </div>

                                <div x-ref="offenseCategory"><!-- ADDING NEW OFFENSE CATEGORY -->
                                    <p class="text-md text-xl mb-4 ml-5 mr-5 text-center">
                                        Adding New Offense Category
                                    </p>

                                    <!-- IMAGE CAROUSEL NEW OFFENSE CATEGORY -->
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselOffenseCategory" data-interval="1500" style="max-width: 70%; height: auto;">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img alt="First slide" class="d-block w-100" src="images/user-guide/new_role1.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Second slide" class="d-block w-100" src="images/user-guide/new_offense2.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Third slide" class="d-block w-100" src="images/user-guide/offense_category1.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Third slide" class="d-block w-100" src="images/user-guide/offense_category2.png">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" data-slide="prev" href="#carouselOffenseCategory" role="button">
                                            <span aria-hidden="true" class="carousel-control-prev-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselOffenseCategory" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5" style="line-height: 1.2;">
                                        <p class="text-lg">1. On the Sidebar, click <strong>File Management</strong></p>
                                        <p class="text-lg">2. Go to <strong> Offenses</strong> </p>
                                        <p class="text-lg">3. On the <strong> Offense Categories </strong> tab, click <strong> Add New Offense Category </strong></p>
                                        <p class="text-lg">4. Enter the new offense category</p>
                                        <p class="text-lg">5. Click <strong> Submit </strong></p>
                                    </div>
                                </div>

                                <div x-ref="offenseLevel"><!-- ADDING NEW OFFENSE CATEGORY -->
                                    <p class="text-md text-xl mb-4 ml-5 mr-5 text-center">
                                        Adding New Offense Level
                                    </p>

                                    <!-- IMAGE CAROUSEL NEW OFFENSE LEVEL -->
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselOffenseLevel" data-interval="1500" style="max-width: 70%; height: auto;">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img alt="First slide" class="d-block w-100" src="images/user-guide/new_role1.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Second slide" class="d-block w-100" src="images/user-guide/new_offense2.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Third slide" class="d-block w-100" src="images/user-guide/offense_level1.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Third slide" class="d-block w-100" src="images/user-guide/offense_level2.png">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" data-slide="prev" href="#carouselOffenseLevel" role="button">
                                            <span aria-hidden="true" class="carousel-control-prev-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselOffenseLevel" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon" style="background-color: black;  border-radius: 50px; padding: 10px;"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5" style="line-height: 1.2;">
                                        <p class="text-lg">1. On the Sidebar, click <strong> File Management </strong></p>
                                        <p class="text-lg">2. Go to <strong> Offenses </strong> </p>
                                        <p class="text-lg">3. On the <strong> Offense Categories </strong> tab, click <strong> Add New Offense Level </strong></p>
                                        <p class="text-lg">4. Enter the new offense level</p>
                                        <p class="text-lg">5. Click <strong> Submit </strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
