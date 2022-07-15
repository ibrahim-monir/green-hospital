<?php
session_start();
require_once 'admin/conn.php';
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$subject = $_REQUEST['subject'];
$msg = $_REQUEST['message'];

$sql = "INSERT INTO query VALUES( NULL, '$name', '$email', '$mobile', '$subject', '$msg' ) ";
$query = mysqli_query($conn, $sql);

if( $query ){
    $_SESSION['query'] = 1;
    header( 'location: contact.php ' );
}else{
    $_SESSION['query'] = 0;
    header( 'location: contact.php ' );
}
