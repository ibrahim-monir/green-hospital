<?php
require_once 'conn.php';
$id = $_REQUEST['id'];
$sql = "DELETE FROM patients WHERE id={$id}";
$query = mysqli_query( $conn, $sql );
if( $query ){
    header('location:/admin/all-patients.php');
}else{
    echo "Error";
}
