<!-- Main left sidebar menu -->
<div id="left-sidebar" class="sidebar light_active">
    <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
    <div class="navbar-brand">
        <a href="/admin"><img src="assets/images/icon.svg" alt="Green Logo" class="img-fluid logo"><span>Green-Hospital</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="fa fa-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="assets/images/user.png" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Welcome</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Monzur Alam</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="dr-profile.html"><i class="fa fa-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="fa fa-envelope"></i>Messages</a></li>
                    <li><a href="setting.html"><i class="fa fa-gear"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="/admin/logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
                </ul>
            </div>
        </div>  
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu animation-li-delay">
                <li class="header">Hospital</li>
                <li class="active"><a href="/admin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                <li>
                    <a href="#Doctors" class="has-arrow"><i class="fa fa-user-md"></i><span>Doctors</span></a>
                    <ul>
                        <li><a href="/admin/all-doctor.php">All Doctors</a></li>
                        <li><a href="/admin/add-doctor.php">Add Doctors</a></li>
                        <!-- <li><a href="dr-schedule.html">Doctors Schedule</a></li> -->
                    </ul>
                </li>
                <li>
                    <a href="#Departments" class="has-arrow"><i class="fa fa-list"></i><span>Departments</span></a>
                    <ul>
                        <li><a href="/admin/departments.php">All Departments</a></li>
                        <li><a href="/admin/add-department.php">Add Departments</a></li>
                    </ul>
                </li>
                <li><a href="app-calendar.html"><i class="fa fa-calendar"></i> <span>Appointment</span></a></li>
                <!-- <li><a href="app-todo.html"><i class="fa fa-th-list"></i> <span>Todo List</span></a></li> -->
                <li>
                    <a href="#Patients" class="has-arrow"><i class="fa fa-user-circle-o"></i><span>Patients</span></a>
                    <ul>
                        <li><a href="/admin/all-patients.php">All Patient</a></li>
                        <li><a href="/admin/patients-add.php">Add Patient</a></li>
                        <li><a href="patients-profile.html">Patient Profile</a></li>
                        <li><a href="patients-invoice.html">Patient Invoices</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#Room" class="has-arrow"><i class="fa fa-thumbs-up"></i><span>Room Allotment</span></a>
                    <ul>
                        <li><a href="room-allotment.html">Alloted Rooms</a></li>
                        <li><a href="room-add.html">Add Allotment</a></li>
                    </ul>
                </li>
                <!-- <li><a href="departments.html"><i class="fa fa-table"></i><span>Departments</span></a></li> -->
                <li>
                    <a href="#Payments" class="has-arrow"><i class="fa fa-cc-paypal"></i><span>Payments</span></a>
                    <ul>
                        <li><a href="payments.html">Payments</a></li>
                        <li><a href="payments-add.html">Add Payments</a></li>
                        <li><a href="payments-invoice.html">Invoice</a></li>
                    </ul>
                </li>
                <!-- <li class="header">Admin</li>
                <li><a href="app-inbox.html"><i class="fa fa-envelope"></i> <span>Email</span> <span class="badge badge-default mr-0">12</span></a></li>
                <li><a href="app-chat.html"><i class="fa fa-comments"></i> <span>Chat</span></a></li>
                <li><a href="our-staffs.html"><i class="fa fa-users"></i><span>Our Staffs</span></a></li>
                <li><a href="app-contacts.html"><i class="fa fa-address-book"></i> <span>Contacts</span></a></li>
                <li><a href="app-filemanager.html"><i class="fa fa-folder"></i> <span>File Manager</span></a></li>
                <li><a href="our-centres.html"><i class="fa fa-map-marker"></i><span>Our Centres</span></a></li>
                <li class="header">Social</li>
                <li><a href="page-news.html"><i class="fa fa-globe"></i> <span>Blog</span></a></li>
                <li><a href="page-social.html"><i class="fa fa-share-alt-square"></i> <span>Social</span></a></li>                        
                <li class="extra_widget">
                    <div class="form-group">
                        <label class="d-block">Traffic this Month <span class="float-right">77%</span></label>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Server Load <span class="float-right">50%</span></label>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                        </div>
                    </div>
                </li> -->
            </ul>
        </nav>     
    </div>
</div>