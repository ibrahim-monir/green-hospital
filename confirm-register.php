<?php
require_once 'admin/conn.php';
$name = $_REQUEST['full_name'];
$mobile = $_REQUEST['mobile'];
$password = md5( $_REQUEST['password'] );
$doctorId = $_REQUEST['doctor_id'];
$date = date('y-m-d');
$sql = "INSERT INTO patients VALUES ( NULL, NULL, '$password', '$mobile', '$name', NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '$date', '$doctorId' ) ";
$query = mysqli_query( $conn, $sql );
if( $query ){
    header( 'location: login.php' );
}else{
    echo "Error";
}