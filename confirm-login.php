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
    header( 'Location: /admin/appointments-patient-add.php' );
}else{
    $_SESSION["error"] = "The mobile or password is invalid";
    header( 'Location: login.php' );
}
