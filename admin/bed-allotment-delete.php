<?php
require_once 'conn.php';
$id = $_REQUEST['id'];
/**
 * Query for bed id
 */
$dataSql = "SELECT * FROM bed_booking WHERE id={$id}";
$dataQuery = mysqli_query( $conn, $dataSql );
$row = mysqli_fetch_assoc( $dataQuery );
$bed_id = $row['bed_id'];

/**
 * Delete query
 */
$sql = "DELETE FROM bed_booking WHERE id={$id}";
$query = mysqli_query( $conn, $sql );
if( $query ){
    $updateBedStatusSql = "UPDATE beds SET status='Free' Where id={$bed_id}";
    $updateBedStatusQuery = mysqli_query( $conn, $updateBedStatusSql );
    header( 'location: bed-allotment.php' );
}