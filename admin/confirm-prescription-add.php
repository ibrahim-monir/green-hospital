<?php
require_once 'conn.php';
$id = $_REQUEST['prescription_id'];
$case_history = $_REQUEST['case_history'];
$date = $_REQUEST['date'];
$appointments_id = $_REQUEST['appaointment_id'];
$medicines = $_REQUEST['medicine-group'];

$sql = "INSERT INTO prescriptions VALUES( $id, '$case_history', '$date', '$appointments_id' )";
$query = mysqli_query( $conn, $sql );

foreach( $medicines as $key => $value ){
    $medicine_id = $value['medicine_id'];
    $instruction = $value['instruction'];
    $dose = $value['dose'];
    $duration = $value['duration'];
    $medicineSql = "INSERT INTO medicine_pricription VALUES( NULL, '$medicine_id', '$id', '$instruction', '$dose', '$duration' )";
    $medicineQuery = mysqli_query( $conn, $medicineSql );
}
if( $query ){   
    if( $medicineQuery ){
        echo "success";
        header( 'location: prescriptions.php');
    }
}