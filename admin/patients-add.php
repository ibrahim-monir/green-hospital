<?php 
    require_once 'header.php';
?>
    <div class="row clearfix">
        <div class="col-sm-12">
            <div class="card">
                <div class="body">
                    <form method="POST" enctype="multipart/form-data" action="/admin/confirm-patients-add.php">
                        <!-- Basic information start here -->
                        <div class="form-group row">
                            <label class="col-md-2 col-sm-4 col-form-label">Basic Information</label>
                            <div class="col-md-10 col-sm-8">
                                <div class="row clearfix">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Username</label>
                                            <input class="form-control" type="text" name="username" placeholder="Enter username">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <input class="form-control" type="password" name="password" placeholder="Enter password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Full Name <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="fullname" placeholder="Enter fullname" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Phone No. <span class="text-danger">*</span></label>
                                            <input class="form-control" type="tel" name="mobile_numer" placeholder="Enter phone number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Email Address</label>
                                            <input class="form-control" type="email" name="emailaddress" placeholder="Enter email address">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Date of Birth <span class="text-danger">*</span></label>
                                            <input type="text" name="dob" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Select Date of Birth" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Gender <span class="text-danger">*</span></label>
                                            <select class="form-control show-tick" name="gender" required>
                                                <option value="">- Select -</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Age <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="age" placeholder="Enter age here" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Address <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="address" placeholder="Enter address here" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Photo <span class="text-danger">*</span></label>
                                            <input class="form-control" type="file" name="photo" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Details <span class="text-danger">*</span></label>
                                            <textarea name="details" id="" cols="20" rows="2" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Basic information stop here -->
                        <div class="form-group row mt-5">
                            <label class="col-md-2 col-sm-4 col-form-label">Registration Information</label>
                            <div class="col-md-10 col-sm-10">
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group c_form_group">
                                            <label>Doctor Name <span class="text-danger">*</span></label>
                                            <select class="form-control show-tick" name="doctor_id" required>
                                                <?php
                                                    $doctor = "SELECT * From doctors";
                                                    $doctorQuery = mysqli_query( $conn, $doctor );
                                                    if( $doctorQuery ){
                                                        while( $doctorData = mysqli_fetch_assoc( $doctorQuery ) ){
                                                            echo '<option value="'.$doctorData['id'].'">' . $doctorData['full_name'] . '</option>';
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group c_form_group">
                                            <label>Please choose date <span class="text-danger">*</span></label>
                                            <input type="text" name="date" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Select" required>
                                        </div>                            
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group c_form_group">
                                            <label>Status <span class="text-danger">*</span></label>
                                            <select class="form-control show-tick" name="status" required>
                                                <option value="">Select</option>
                                                <option value="pending">Pending</option>
                                                <option value="approved">Approved</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
require_once 'footer.php';
?>