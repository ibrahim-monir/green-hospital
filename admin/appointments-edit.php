<?php 
require_once 'header.php';
$id = $_REQUEST['id'];

$sql = "SELECT * FROM appointments Where id={$id}";
$query = mysqli_query($conn, $sql);
if($query){
    $data = mysqli_fetch_assoc($query);
}

?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <form action="/admin/confirm-edit-appointments.php?id=<?php echo $id;?>" method="post">
            <!-- card start here  -->
            <div class="card">
                <div class="header">
                    <h2>Patients Information</h2>
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
                                                <option value="<?php echo strtolower($row['id']); ?>" <?php if ( $row['id'] == $data['patient_id'] ) echo 'selected'; ?>>
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
                                                <option value="<?php echo strtolower($row['id']); ?>" <?php if ( $row['id'] == $data['doctor_id'] ) echo 'selected'; ?>>
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
                                <input id="date" class="form-control" type="date" name="date" value="<?php echo $data['date'] ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="reason">Reason<span class="text-danger">*</span></label>
                                <input id="reason" class="form-control" type="text" name="reason" value="<?php echo $data['reason']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="is_new">New Patients ? <span class="text-danger">*</span></label>
                                <select for="is_new" class="form-control show-tick" name="is_new">
                                    <option value="yes" <?php if ( 'yes' == $data['is_new'] ) echo 'selected'; ?>>Yes</option>
                                    <option value="no" <?php if ( 'no' == $data['is_new'] ) echo 'selected'; ?>>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group c_form_group">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                <select for="status" class="form-control show-tick" name="status">
                                    <option value="pending" <?php if ( 'pending' == $data['status'] ) echo 'selected'; ?>>Pending</option>
                                    <option value="approved" <?php if ( 'approved' == $data['status'] ) echo 'selected'; ?>>Approved</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Update</button>
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