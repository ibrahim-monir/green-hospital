<?php
require_once 'conn.php';
$patient_id = $_REQUEST['patient_id'];
$bed_id = $_REQUEST['bed_id'];
$allotment = $_REQUEST['allotment'];
$discharge = $_REQUEST['discharge'];
$sql = "INSERT INTO bed_booking VALUES( NULL, $patient_id, $bed_id, '$allotment', '$discharge' )";
$query = mysqli_query( $conn, $sql );
if( $query ){
    $updateBedStatusSql = "UPDATE beds SET status='Booked' Where id={$bed_id}";
    $updateBedStatusQuery = mysqli_query( $conn, $updateBedStatusSql );
    header( 'location:/admin/bed-allotment.php' );
}else{
    header( 'location: /admin/bed-allotment-add.php' );
}