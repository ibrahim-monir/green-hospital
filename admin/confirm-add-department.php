<?php
require_once 'conn.php';

$name = $_REQUEST['name'];
$description = $_REQUEST['description'];
$status = $_REQUEST['status'];

$sql = "INSERT into departments values(null, '$name', '$description', $status)";
$query = mysqli_query( $conn, $sql);

if($query){
    header('location: /admin/departments.php');
}else{
    echo "Something Wrong. please try again";
}
