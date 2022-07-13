<?php
session_start();

require_once 'conn.php';
$email = $_REQUEST['email'];
$password = md5($_REQUEST['password']);

$sql = "SELECT * FROM doctors where email = '{$email}' AND password = '{$password}'";
$query = mysqli_query($conn, $sql);
// echo "<pre>";
// print_r( $query );
// echo "<br>";
// print_r( mysqli_num_rows($query) );
// echo "<br>";

if(mysqli_num_rows($query)){
    $_SESSION["login"] = 1;
    header( 'Location: /admin/index.php' );
}else{
    $_SESSION["error"] = "The email or password is invalid";
    header( 'Location: /admin/login.php' );
}
