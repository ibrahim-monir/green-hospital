<?php 
require_once 'conn.php';
$id = $_GET['id'];

$sql = "DELETE FROM doctors WHERE id={$id}";
$query = mysqli_query($conn, $sql);
if($query){
    echo "Doctor Deleted Successfully";
    sleep(5);
    header('location: /admin/all-doctor.php');
}else{
    echo "Something Wrong. Please try again.";
}