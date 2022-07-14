<?php
/**
 * Database Connection
 */
require_once 'conn.php';

$id = $_REQUEST['id'];
/**
 * Delete query
 */
$sql = "DELETE FROM medicine_cat WHERE id={$id}";
$query = mysqli_query( $conn, $sql );
if( $query ){
    /**
     * Redirect to medicines-category.php
     */
    header( 'location: medicines-category.php' );
}else{
    echo "Error";
}