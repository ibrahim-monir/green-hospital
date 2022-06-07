<?php 
$id = $_REQUEST['id'];
require_once 'header.php';
require_once 'overview.php';
?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <form action="/admin/confirm-update-doctor.php?id=<?php echo $id;?>" method="post">
            <!-- card start here  -->
            <div class="card">
                <div class="header">
                    <h2>Doctor's Account Information</h2>
                </div>
                
                <div class="body">
                    <div class="row clearfix">
                        <?php 
                            $sql = "SELECT * FROM doctors Where id={$id}";
                            $query = mysqli_query($conn, $sql);
                            if($query){
                                $data = mysqli_fetch_assoc($query);
                            } 
                        ?>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="username">User Name <span class="text-danger">*</span></label>
                                <input id="username" class="form-control" type="text" name="username" value="<?php echo $data['username']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input id="email" class="form-control" type="email" name="email" value="<?php echo $data['email']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="mobile">Mobile Number<span class="text-danger">*</span></label>
                                <input id="mobile" class="form-control" type="tel" name="mobile_number" value="<?php echo $data['mobile_number']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="password">Password <span class="text-danger">*</span></label>
                                <input id="password" class="form-control" type="password" name="password" value="<?php echo $data['password']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="fname">Full Name <span class="text-danger">*</span></label>
                                <input id="fname" class="form-control" type="text" name="fullname" value="<?php echo $data['full_name']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="dob">Date of Birth </label>
                                <input id="dob" class="form-control" type="date" name="dob" value="<?php echo $data['dob']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group c_form_group">
                                <label>Gender <span class="text-danger">*</span></label>
                                <select class="form-control show-tick" name="gender">
                                    <option value="" disabled>- Gender -</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group c_form_group">
                                <label for="age">Age </label>
                                <input id="age" class="form-control" type="number" name="age" value="<?php echo $data['age']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="address">Address </label>
                                <input id="address" class="form-control" type="text" name="address" value="<?php echo $data['address']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="photo">Photo <span class="text-danger">*</span></label>
                                <input id="photo" class="form-control" type="file" name="photo" value="<?php echo $data['photo']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group c_form_group">
                                <label for="designation">Designation <span class="text-danger">*</span></label>
                                <input id="designation" class="form-control" type="text" name="designation" value="<?php echo $data['designation']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group c_form_group">
                                <label for="type">Doctor Type <span class="text-danger">*</span></label>
                                <select id="type" class="form-control show-tick" name="doctor_type">
                                    <option value="" disabled>- select -</option>
                                    <option value="permanent">Permanent</option>
                                    <option value="contract">Contract</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="shortbio">Short bio<span class="text-danger">*</span></label>
                                <textarea rows="3" id="shortbio" class="form-control no-resize" name="shortbio"><?php echo $data['shortbio']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="details">details<span class="text-danger">*</span></label>
                                <textarea rows="3" id="details" class="form-control" name="details"><?php echo $data['details']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="specialist">Specialist<span class="text-danger">*</span></label>
                                <input id="specialist" class="form-control" type="text" name="specialist" value="<?php echo $data['specialist']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label id="department">Departments<span class="text-danger">*</span></label>
                                
                                <select id="department" class="form-control show-tick" name="department_id">
                                    <?php
                                        $sql = "SELECT * FROM departments";
                                        $dp = mysqli_query( $conn, $sql);
                                        if($dp){
                                            while($row = mysqli_fetch_assoc($dp)){
                                                ?>
                                                    <option value="<?php echo strtolower($row['id']); ?>" <?php echo ($row['id'] == $data['department_id']) ? 'selected' : '' ?> > <?php echo $row['name']; ?></option>
                                                <?php
                                            }
                                        }
                                    ?>
                                </select>
                                <?php 
                                    
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div><!-- card stop here  -->
        </form>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12">
        
    </div>
</div>
<?php
require_once 'footer.php';