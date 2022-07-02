<?php
require_once 'conn.php';
$id = $_GET['id'];

$sql = "DELETE FROM appointments WHERE id={$id}";
$query = mysqli_query($conn, $sql);
if($query){
    header('location: /admin/appointments.php');
}else{
    echo "Something Wrong. Please try again.";
}