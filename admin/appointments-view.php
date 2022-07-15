<?php
require_once 'conn.php';
require_once 'header.php';
/**
 * Appointment Data Query
 */
$id = $_REQUEST['id'];
$sql = "SELECT * FROM appointments WHERE id={$id}";
$query = mysqli_query( $conn, $sql );
$data = mysqli_fetch_assoc( $query );
?>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card profile-header">
            <div class="body text-center">
                <?php
                    /**
                     * Patient info query
                     */
                    $patient_id = $data['patient_id'];
                    $patientSql = "SELECT * FROM patients WHERE id={$patient_id}";
                    $patientQuery = mysqli_query( $conn, $patientSql );
                    $patientData = mysqli_fetch_assoc( $patientQuery );
                ?>
                <?php
                    /**
                     * Doctor info query
                     */
                    $doctor_id = $data['doctor_id'];
                    $doctorSql = "SELECT * FROM doctors WHERE id={$doctor_id}";
                    $doctorQuery = mysqli_query( $conn, $doctorSql );
                    $doctorData = mysqli_fetch_assoc( $doctorQuery );
                ?>
                <img src="<?php echo $patientData['photo']; ?>" class="rounded-circle" alt="">
                <div class="mt-3">
                    <h5 class="mb-0"><strong><?php echo $patientData['full_name']; ?></strong></h5>
                    <a href="tel:<?php echo $patientData['mobile_number']; ?>"><?php echo $patientData['mobile_number']; ?></a> <br>
                </div>
                <div class="m-t-15">
                    <a href="patients-view.php?id=<?php echo $patientData['id']; ?>" class="btn btn-primary">Profile</a>
                    <a href="prescriptions-add.php?appointment_id=<?php echo $data['id']; ?>" class="btn btn-outline-secondary">Add Prescription</a>
                </div>                            
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Appointment Info</h2>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-md-6">
                        <small class="text-muted">Date: </small>
                        <p><?php echo $data['date']; ?></p>
                    </div>
                    <div class="col-md-6">
                        <small class="text-muted">Reason: </small>
                        <p><?php echo $data['reason']; ?></p>
                    </div>
                    <div class="col-md-6">
                        <small class="text-muted">New Patient: </small>
                        <p><?php echo $data['is_new']; ?></p>
                    </div>
                    <div class="col-md-6">
                        <small class="text-muted">Status: </small>
                        <p><?php echo $data['status']; ?></p>
                    </div>
                    <div class="col-md-6">
                        <small class="text-muted">Doctor Name: </small>
                        <p><?php echo $doctorData['full_name']; ?></p>
                    </div>
                    <div class="col-md-6">
                        <small class="text-muted">Designation: </small>
                        <p><?php echo $doctorData['designation']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <ul class="nav nav-tabs3">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Patients">History</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Tests">Tests</a></li>
            </ul>
        </div>

        <div class="tab-content padding-0">
            <div class="tab-pane active" id="Patients">
                <div class="card">
                    <div class="header">
                        <h2>Patients Case History</h2>
                        <ul class="header-dropdown dropdown">
                            <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <p>
                            <?php echo $patientData['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="Tests">
                <div class="card">
                    <div class="header">
                        <h2>Diagonostic tests</h2>
                        <ul class="header-dropdown dropdown">
                            <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<?php
require_once 'footer.php';