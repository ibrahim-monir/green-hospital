<?php

require_once 'conn.php';
$id = $_REQUEST['id'];
$username = $_REQUEST['username'];
$password = md5( $_REQUEST['password'] );
$mobile_number = $_REQUEST['mobile_number'];
$fullname = $_REQUEST['fullname'];
$dob = $_REQUEST['dob'];
$gender = $_REQUEST['gender'];
$age = $_REQUEST['age'];
$address = $_REQUEST['address'];
$photo = $_REQUEST['photo'] ?? '/admin/assets/images/xs/avatar4.jpg';
$details = $_REQUEST['details'];
$status = $_REQUEST['status'];
$date = $_REQUEST['date'];
$doctor_id = $_REQUEST['doctor_id'];

$data = "UPDATE patients SET username = '$username', password = '$password' ,mobile_number = '$mobile_number', full_name = '$fullname', dob = '$dob', gender = '$gender', age = '$age', address = '$address', description = '$details', status = '$status', date = '$date' WHERE id = $id";
echo $data;
$update = mysqli_query( $conn, $data );

if($update){
    header('location: /admin/all-patients.php');
}else{
    echo "Error";
}