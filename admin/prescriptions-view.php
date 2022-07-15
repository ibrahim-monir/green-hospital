<?php
require_once 'conn.php';
require_once 'header.php';
/**
 * Appointment Data Query
 */
$id = $_REQUEST['id'];
$sql = "SELECT * FROM prescriptions WHERE id={$id}";
$query = mysqli_query( $conn, $sql );
$data = mysqli_fetch_assoc( $query );
// print_r( $data );
/**
 * Appointments information query
 */
$appointmentId = $data['appointments_id'];
$appointmentSql = "SELECT * FROM appointments WHERE id={$appointmentId}";
$appointmentQuery = mysqli_query( $conn, $appointmentSql );
$appointmentData = mysqli_fetch_assoc( $appointmentQuery );
/**
 * Patient info query
 */
$patient_id = $appointmentData['patient_id'];
$patientSql = "SELECT * FROM patients WHERE id={$patient_id}";
$patientQuery = mysqli_query( $conn, $patientSql );
$patientData = mysqli_fetch_assoc( $patientQuery );
/**
 * Doctor info query
 */
$doctor_id = $appointmentData['doctor_id'];
$doctorSql = "SELECT * FROM doctors WHERE id={$doctor_id}";
$doctorQuery = mysqli_query( $conn, $doctorSql );
$doctorData = mysqli_fetch_assoc( $doctorQuery );
?>
<div class="card">
    <div class="row clearfix">
        <div class="col"></div>
        <div class="col-1">
            <button onclick="window.print()" class="btn btn-success float-right"><i class="fa fa-print"></i></button>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col">
            <div class="doctor-info p-4">
                <p><?php echo 'Dr. ' . $doctorData['full_name']; ?></p>
                <span><?php echo $doctorData['designation']; ?></span> <br>
                <span><?php echo $doctorData['mobile_number']; ?></span> <br>
            </div>
        </div> <!-- .col stop here -->
        <div class="col">
            <div class="hospital-info p-4 float-right">
                <h5>Green Hospital</h5>
                <p>Begum rokeya soroni, mirpur-10, dhaka, bangladesh</p>
                <p>01786860880</p>
                <span>info@greenhospital.ccom</span>
            </div>
        </div> <!-- .col stop here -->
        <div class="col-md-12 p-4">
            <div class="row">
                <div class="col-6">
                    <span>
                        Name: <?php echo $patientData['full_name']; ?>
                    </span>
                </div>
                <div class="col">
                    <span>
                        Age: <?php echo $patientData['age']; ?>
                    </span>
                </div>
                <div class="col">
                    <span>Date: <?php echo $data['date']; ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="header">
                            <h2>Advice</h2>
                        </div>
                        <div class="body">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="card">
                        <div class="header">
                            Rx
                        </div>
                        <div class="body">
                            <?php
                                /**
                                 * Medicine Query
                                 */
                                $medicineSql = "SELECT * FROM medicine_pricription WHERE pricription_id={$id}";
                                $medicineQuery = mysqli_query( $conn, $medicineSql );
                                if( $medicineQuery ){
                                    while( $medicineData = mysqli_fetch_assoc( $medicineQuery ) ){
                                        $medicineId = $medicineData['id'];
                                        $medicineDataSql = "SELECT * FROM medicines WHERE id={$medicineId}";
                                        $medicineDataQuery = mysqli_query( $conn, $medicineDataSql );
                                        $medicineDataInfo = mysqli_fetch_assoc( $medicineDataQuery );
                                        ?>
                                        <div class="row mb-2">
                                            <div class="col-9">
                                                <p class="mb-1"><?php echo $medicineDataInfo['name']; ?></p>
                                                <span><?php echo $medicineData['dose']; ?></span><br>
                                                <small><?php echo $medicineData['instruction']; ?></small>
                                            </div>
                                            <div class="col-3">
                                                <?php echo $medicineData['duration']; ?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'footer.php';