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
                <?php
                    if( 1 == isset( $_SESSION["admin"] ) ):
                ?>
                <li>
                    <a href="#Doctors" class="has-arrow"><i class="fa fa-user-md"></i><span>Doctors</span></a>
                    <ul>
                        <li><a href="/admin/all-doctor.php">All Doctors</a></li>
                        <li><a href="/admin/add-doctor.php">Add Doctors</a></li>
                        <!-- <li><a href="dr-schedule.html">Doctors Schedule</a></li> -->
                    </ul>
                </li>
                <?php endif; ?>
                <?php
                    if( 1 == isset( $_SESSION["admin"] ) ):
                ?>
                <li>
                    <a href="#Departments" class="has-arrow"><i class="fa fa-list"></i><span>Departments</span></a>
                    <ul>
                        <li><a href="/admin/departments.php">All Departments</a></li>
                        <li><a href="/admin/add-department.php">Add Departments</a></li>
                    </ul>
                </li>
                <?php endif; ?>
                <li>
                    <a href="#Appoointments" class="has-arrow"><i class="fa fa-calendar"></i><span>Appointment</span></a>
                    <ul>
                        <?php
                            if( 1 == isset( $_SESSION["admin"] ) || 1 == isset ( $_SESSION["doctor"] ) ):
                        ?>
                        <li><a href="/admin/appointments.php">All Appointments</a></li>
                        <li><a href="/admin/appointments-add.php">Add Appointment</a></li>
                        <?php elseif( 1 == isset( $_SESSION["patient"]) ): ?>
                        <li><a href="/admin/appointments-patients.php">View Appointment</a></li>
                        <li><a href="/admin/appointments-patient-add.php">Add Appointment</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
                <!-- <li><a href="app-todo.html"><i class="fa fa-th-list"></i> <span>Todo List</span></a></li> -->
                <li>
                    <a href="#Patients" class="has-arrow"><i class="fa fa-user-circle-o"></i><span>Patients</span></a>
                    <ul>
                        <?php
                            if( 1 == isset( $_SESSION["admin"] ) || 1 == isset( $_SESSION["doctor"]) ):
                        ?>
                        <li><a href="/admin/all-patients.php">All Patient</a></li>
                        <li><a href="/admin/patients-add.php">Add Patient</a></li>
                        <?php
                            elseif( 1 == $_SESSION["patient"] ):
                        ?>
                        <li><a href="/admin/patients-view.php?id=<?php echo $_SESSION["patient_id"]; ?>">View Profile</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
                <?php
                    if( 1 == isset( $_SESSION["admin"] ) || 1 == isset( $_SESSION["doctor"]) ):
                ?>
                <li>
                    <a href="#Room" class="has-arrow"><i class="fa fa-thumbs-up"></i><span>Bed Allotment</span></a>
                    <ul>
                        <li><a href="bed-allotment.php">Alloted Beds</a></li>
                        <li><a href="bed-allotment-add.php">Add Allotment</a></li>
                        <li><a href="room.html">Add Bed Type</a></li>
                    </ul>
                </li>
                <?php endif; ?>
                <li>
                    <a href="#Prescription" class="has-arrow"><i class="fa fa-sticky-note-o"></i><span>Prescriptions</span></a>
                    <ul>
                        <?php
                            if( 1 == isset( $_SESSION["admin"] ) || 1 == isset( $_SESSION["doctor"]) ):
                        ?>
                        <li><a href="prescriptions.php">Prescriptions</a></li>
                        <li><a href="prescriptions-add.php">Add Prescription</a></li>
                        <?php elseif( 1 == $_SESSION["patient"] ): ?> 
                        <li><a href="prescriptions-patients.php">My Prescriptions</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
                <?php
                    if( 1 == isset( $_SESSION["admin"] ) || 1 == isset( $_SESSION["doctor"]) ):
                ?>
                <li>
                    <a href="#Medicine" class="has-arrow"><i class="fa fa-medkit"></i><span>Medicines</span></a>
                    <ul>
                        <li><a href="medicines.php">Medicines</a></li>
                        <li><a href="medicines-add.php">Add Medicine</a></li>
                        <li><a href="medicines-category.php">Category</a></li>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
        </nav>     
    </div>
</div>