<?php
session_start();

require_once 'admin/conn.php';
$mobile = $_REQUEST['mobile_number'];
$password = md5( $_REQUEST['password'] );

$sql = "SELECT * FROM patients  where mobile_number = '{$mobile}' AND password = '{$password}'";
$query = mysqli_query($conn, $sql);

if(mysqli_num_rows($query)){
    $_SESSION["login"] = 1;
    $_SESSION["patient"] = 1;

    /**
     * Patient ID Query
     */
    $patientSql = "SELECT * FROM patients WHERE mobile_number = {$mobile}";
    $patientQuery = mysqli_query( $conn, $patientSql );
    $patientData = mysqli_fetch_assoc( $patientQuery );
    $_SESSION["patient_id"] = $patientData['id'];

    /**
     * Redirct to patient appointments add
     */
    header( 'Location: /admin/appointments-patient-add.php' );
}else{
    $_SESSION["error"] = "The mobile or password is invalid";
    header( 'Location: login.php' );
}
