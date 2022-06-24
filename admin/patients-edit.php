<?php
    require_once 'header.php';
?>
    <div class="row clearfix">
        <div class="col-sm-12">
            <div class="card">
                <div class="body">
                    <?php 
                        $id = $_REQUEST['id'];
                        $sql = "SELECT * FROM patients WHERE id={$id}";
                        $query = mysqli_query( $conn, $sql );
                        $data = mysqli_fetch_assoc( $query );
                    ?>
                    <form method="POST" enctype="multipart/form-data" action="/admin/confirm-patients-edit.php">
                        <!-- Basic information start here -->
                        <div class="form-group row">
                            <label class="col-md-2 col-sm-4 col-form-label">Basic Information</label>
                            <div class="col-md-10 col-sm-8">
                                <div class="row clearfix">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Username</label>
                                            <input class="form-control" type="text" name="username" value="<?php echo $data['username']; ?>" placeholder="Enter username">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <input class="form-control" type="password" name="password" value="<?php echo $data['password']; ?>" placeholder="Enter password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Full Name <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="fullname" value="<?php echo $data['full_name']; ?>" placeholder="Enter fullname" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Phone No. <span class="text-danger">*</span></label>
                                            <input class="form-control" type="tel" name="mobile_number" value="<?php echo $data['mobile_number']; ?>" placeholder="Enter phone number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Date of Birth <span class="text-danger">*</span></label>
                                            <input type="text" name="dob" value="<?php echo $data['dob']; ?>" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Select Date of Birth" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Gender <span class="text-danger">*</span></label>
                                            <select class="form-control show-tick" name="gender" required>
                                                <option value="male" <?php if( 'male' == $data['gender'] ) echo 'selected'; ?> >Male</option>
                                                <option value="female" <?php if( 'male' == $data['gender'] ) echo 'selected'; ?> >Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Age <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="age" value="<?php echo $data['age']; ?>" placeholder="Enter age here" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Address <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="address" value="<?php echo $data['address']; ?>" placeholder="Enter address here" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Photo <span class="text-danger">*</span></label>
                                            <input class="form-control" type="file" name="photo">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Details <span class="text-danger">*</span></label>
                                            <textarea name="details" id="" cols="20" rows="2" class="form-control" required><?php echo $data['description']; ?></textarea>
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
                                                            ?>
                                                            <option value="<?php echo $doctorData['id']; ?>" <?php if( $data['doctor_id'] == $doctorData['id']) echo 'selected'?>><?php echo $doctorData['full_name']; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group c_form_group">
                                            <label>Please choose date <span class="text-danger">*</span></label>
                                            <input type="text" name="date" value="<?php echo $data['date']; ?>" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Select" required>
                                        </div>                            
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group c_form_group">
                                            <label>Status <span class="text-danger">*</span></label>
                                            <select class="form-control show-tick" name="status" required>
                                                <option value="pending" <?php if( 'pending' == $data['status'] ) echo "seleted"; ?>>Pending</option>
                                                <option value="approved" <?php if( 'approved' == $data['status'] ) echo "seleted"; ?>>Approved</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
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