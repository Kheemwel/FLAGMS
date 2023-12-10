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
                                        <iconify-icon icon="clarity:dashboard-solid" style="color: #252525;"></iconify-icon>
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
                                    Welcome to Fiat Lux Academe Guidance Management System (FLAGMS). It provides modules and
                                    features that can help with the manual processing and managing of records and reports of
                                    the guidance office of Fiat Lux Academe Dasmariñas. To get started, check out the guide
                                    below for a quick tour.
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
                                                    It is where you'll find a comprehensive summary of your completed
                                                    activities, your calendar, and upcoming events.
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-accounts-tab" class="tab-pane fade" id="custom-tabs-one-accounts" role="tabpanel">
                                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris
                                                    pharetra purus ut ligula tempor, et vulputate metus facilisis.
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-students-tab" class="tab-pane fade" id="custom-tabs-one-students" role="tabpanel">
                                                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris.
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-file-management-tab" class="tab-pane fade" id="custom-tabs-one-file-management" role="tabpanel">
                                                    Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna,
                                                    iaculis tempus turpis ac, ornare sodales tellus.
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-content-management-tab" class="tab-pane fade" id="custom-tabs-one-content-management" role="tabpanel">
                                                    Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique.
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
                                                    <a aria-controls="custom-tabs-one-guidance-program" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-guidance-program" id="custom-tabs-one-guidance-program-tab" role="tab" style="color: #252525;">7. Guidance Program</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-lnf" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-lnf" id="custom-tabs-one-lnf-tab" role="tab" style="color: #252525;">8. Lost and Found</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-forms" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-forms" id="custom-tabs-one-forms-tab" role="tab" style="color: #252525;">9. Forms</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                                <div aria-labelledby="custom-tabs-one-records-tab" class="tab-pane fade show active" id="custom-tabs-one-records" role="tabpanel">
                                                    It is where you'll find a comprehensive summary of your completed
                                                    activities, your calendar, and upcoming events.
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-guidance-program-tab" class="tab-pane fade" id="custom-tabs-one-guidance-program" role="tabpanel">
                                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris
                                                    pharetra purus ut ligula tempor, et vulputate metus facilisis.
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-lnf-tab" class="tab-pane fade" id="custom-tabs-one-lnf" role="tabpanel">
                                                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris.
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-forms-tab" class="tab-pane fade" id="custom-tabs-one-forms" role="tabpanel">
                                                    Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna,
                                                    iaculis tempus turpis ac, ornare sodales tellus.
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.card -->
                                </div>

                                <div x-ref="notification"><!-- IMAGE DEMO -->
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
                                                    <a aria-controls="custom-tabs-one-notif" aria-selected="true" class="nav-link active" data-toggle="pill" href="#custom-tabs-one-notif" id="custom-tabs-one-notif-tab" role="tab" style="color: #252525;">10. Notification</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a aria-controls="custom-tabs-one-profile" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-profile" id="custom-tabs-one-profile-tab" role="tab" style="color: #252525;">11. Profile</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                                <div aria-labelledby="custom-tabs-one-notif-tab" class="tab-pane fade show active" id="custom-tabs-one-notif" role="tabpanel">
                                                    It is where you'll find a comprehensive summary of your completed
                                                    activities, your calendar, and upcoming events.
                                                </div>
                                                <div aria-labelledby="custom-tabs-one-profile-tab" class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel">
                                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris
                                                    pharetra purus ut ligula tempor, et vulputate metus facilisis.
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
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselChangeEmail" style="max-width: 70%; height: auto; color: #252525;">
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
                                            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselChangeEmail" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5">
                                        <p class="text-md">1. Click your profile picture at the top right corner.</p>
                                        <p class="text-md">2. Click Edit Profile</p>
                                        <p class="text-md">3. Edit your email in the designated email text box.</p>
                                        <p class="text-md">4. Click Save</p>
                                    </div>
                                </div>

                                <div x-ref="password">
                                    <p class="text-md text-xl mb-4 ml-5 mr-5 text-center">
                                        Reset Your Password
                                    </p>

                                    <!-- IMAGE CAROUSEL RESET YOUR PASSWORD -->
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselResetPass" style="max-width: 70%; height: auto; color: #252525;">
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
                                            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselResetPass" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5">
                                        <p class="text-md">1. Click your profile picture at the top right corner. </p>
                                        <p class="text-md">2. Click Change Password</p>
                                        <p class="text-md">3. In the Create New Password window, change your password. </p>
                                        <p class="text-md">4. Click Change Password</p>
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
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselAddingUser" style="max-width: 70%; height: auto; color: #252525;">
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
                                            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselAddingUser" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5">
                                        <p class="text-md">1. On the Sidebar, click Accounts</p>

                                        <p class="text-md">2. Click Add User</p>
                                        <p class="text-md">3. Fill Out the required information</p>
                                        <p class="text-md">4. Click Submit User</p>
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
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselImportUsers" style="max-width: 70%; height: auto; color: #252525;">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img alt="First slide" class="d-block w-100" src="images/user-guide/import_export_user1.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Second slide" class="d-block w-100" src="images/user-guide/import_user2.png">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" data-slide="prev" href="#carouselImportUsers" role="button">
                                            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselImportUsers" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5">
                                        <p class="text-md">1. On the Sidebar, click Accounts</p>
                                        <p class="text-md">2. Click Import User Accounts </p>
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
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselExportUsers" style="max-width: 70%; height: auto; color: #252525;">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img alt="First slide" class="d-block w-100" src="images/user-guide/import_export_user1.png">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="Second slide" class="d-block w-100" src="images/user-guide/export_user2.png">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" data-slide="prev" href="#carouselExportUsers" role="button">
                                            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselExportUsers" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5">
                                        <p class="text-md">1. On the Sidebar, click Accounts</p>
                                        <p class="text-md">2. Click Export User Accounts</p>
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
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselNewRole" style="max-width: 70%; height: auto; color: #252525;">
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
                                            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselNewRole" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5">
                                        <p class="text-md">1. On the Sidebar, click File Management</p>
                                        <p class="text-md">2. Go to Roles</p>
                                        <p class="text-md">3. Click Add Role</p>
                                        <p class="text-md">4. Enter the Role name and set the permissions</p>
                                        <p class="text-md">5. Click Submit</p>
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
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselNewOffense" style="max-width: 70%; height: auto; color: #252525;">
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
                                            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselNewOffense" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5">
                                        <p class="text-md">1. On the Sidebar, click File Management</p>
                                        <p class="text-md">2. Go to Offenses</p>
                                        <p class="text-md">3. In the Offenses tab, click Add New Offense</p>
                                        <p class="text-md">4. Enter the Offense name and select the Offense category and
                                            Offense Level. </p>
                                        <p class="text-md">5. Click Submit</p>
                                    </div>
                                </div>

                                <div x-ref="offenseCategory"><!-- ADDING NEW OFFENSE CATEGORY -->
                                    <p class="text-md text-xl mb-4 ml-5 mr-5 text-center">
                                        Adding New Offense Category
                                    </p>

                                    <!-- IMAGE CAROUSEL NEW OFFENSE CATEGORY -->
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselOffenseCategory" style="max-width: 70%; height: auto; color: #252525;">
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
                                            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselOffenseCategory" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5">
                                        <p class="text-md">1. On the Sidebar, click File Management</p>
                                        <p class="text-md">2. Go to Offenses </p>
                                        <p class="text-md">3. On the Offense Categories tab, click Add New Offense Category</p>
                                        <p class="text-md">4. Enter the new offense category</p>
                                        <p class="text-md">5. Click Submit</p>
                                    </div>
                                </div>

                                <div x-ref="offenseLevel"><!-- ADDING NEW OFFENSE CATEGORY -->
                                    <p class="text-md text-xl mb-4 ml-5 mr-5 text-center">
                                        Adding New Offense Level
                                    </p>

                                    <!-- IMAGE CAROUSEL NEW OFFENSE LEVEL -->
                                    <div class="carousel slide d-flex flex-column justify-content-center align-items-center mx-auto my-auto text-center" data-ride="carousel" id="carouselOffenseLevel" style="max-width: 70%; height: auto; color: #252525;">
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
                                            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-slide="next" href="#carouselOffenseLevel" role="button">
                                            <span aria-hidden="true" class="carousel-control-next-icon"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!--Carousel End-->

                                    <div class="mt-5 mb-5 ml-5 mr-5">
                                        <p class="text-md">1. On the Sidebar, click File Management</p>
                                        <p class="text-md">2. Go to Offenses </p>
                                        <p class="text-md">3. On the Offense Categories tab, click Add New Offense Level</p>
                                        <p class="text-md">4. Enter the new offense level</p>
                                        <p class="text-md">5. Click Submit</p>
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