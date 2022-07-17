<?php
session_start();

require_once 'conn.php';
$email = $_REQUEST['email'];
$password = md5($_REQUEST['password']);
$admin = $_REQUEST['admin'];

$table = "doctors";
if( 1 == $admin ) $table = "admin";

$sql = "SELECT * FROM {$table} where email = '{$email}' AND password = '{$password}'";
$query = mysqli_query($conn, $sql);
// echo "<pre>";
// print_r( $query );
// echo "<br>";
// print_r( mysqli_num_rows($query) );
// echo "<br>";

if(mysqli_num_rows($query)){
    if( 1 == $admin ){
        $_SESSION["admin"] = 1;
    }else{
        $_SESSION["doctor"] = 1;
    }
    $_SESSION["login"] = 1;
    header( 'Location: /admin/index.php' );
}else{
    $_SESSION["error"] = "The email or password is invalid";
    header( 'Location: /admin/login.php' );
}
