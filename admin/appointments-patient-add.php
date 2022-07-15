<?php 
require_once 'header.php';
?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <form action="/admin/confirm-add-appointments.php" method="post">
            <!-- card start here  -->
            <div class="card">
                <div class="header">
                    <h2>Appointment Information</h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label id="patients">Patients<span class="text-danger">*</span></label>
                                <select id="patients" class="form-control show-tick" name="patient_id">
                                    <?php
                                        $patient_sql = "SELECT * FROM patients";
                                        $patientQuery = mysqli_query( $conn, $patient_sql);
                                        if($patientQuery){
                                            while($row = mysqli_fetch_assoc($patientQuery)){
                                                ?>
                                                <option value="<?php echo strtolower($row['id']); ?>">
                                                    <?php echo $row['full_name']; ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label id="patients">Doctors<span class="text-danger">*</span></label>
                                <select for="patients" class="form-control show-tick" name="doctor_id">
                                    <?php
                                        $patient_sql = "SELECT * FROM doctors";
                                        $patientQuery = mysqli_query( $conn, $patient_sql);
                                        if($patientQuery){
                                            while($row = mysqli_fetch_assoc($patientQuery)){
                                                ?>
                                                <option value="<?php echo strtolower($row['id']); ?>">
                                                    <?php echo $row['full_name']; ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="date">Date <span class="text-danger">*</span></label>
                                <input id="date" class="form-control" type="date" name="date" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="reason">Reason<span class="text-danger">*</span></label>
                                <input id="reason" class="form-control" type="text" name="reason">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="is_new">New Patients ? <span class="text-danger">*</span></label>
                                <select for="is_new" class="form-control show-tick" name="is_new">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                <select for="status" class="form-control show-tick" name="status">
                                    <option value="pending">Pending</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="/admin/appointments.php" class="btn btn-outline-secondary">Cancel</a>
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