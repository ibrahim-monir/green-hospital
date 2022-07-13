<?php
/**
 * Database connection include
 */
require_once 'conn.php';
$id = $_REQUEST['id'];
$old_bed_id = $_REQUEST['old_bed_id'];
$patient_id = $_REQUEST['patient_id'];
$bed_id = $_REQUEST['bed_id'];
$allotment = $_REQUEST['allotment'];
$discharge = $_REQUEST['discharge'];
$sql = "UPDATE bed_booking SET patient_id = $patient_id, bed_id = $bed_id, allotment = '$allotment', discharge = '$discharge' WHERE id={$id}";

$query = mysqli_query( $conn, $sql );
if( $query ){
    /**
     * update current bed status 
     */
    $updateBedStatusSql = "UPDATE beds SET status='Booked' Where id={$bed_id}";
    $updateBedStatusQuery = mysqli_query( $conn, $updateBedStatusSql );
    /**
     * Update status for old bed id
     */
    $updateOldBedSql = "UPDATE beds SET status='Free' WHERE id={$old_bed_id}";
    $updateOldBedQuery = mysqli_query( $conn, $updateOldBedSql );
    /**
     * Redirection to bed-allotment.php
     */
    header( 'location:/admin/bed-allotment.php' );
}else{
    /**
     * redirection to bed-allotment-edit.php
     */
    header( 'location: /admin/bed-allotment-edit.php?id='.$id.'' );
}