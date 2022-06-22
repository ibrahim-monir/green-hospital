<?php

require_once 'conn.php';

$username = $_REQUEST['username'];
$password = md5( $_REQUEST['password'] );
$mobile_numer = $_REQUEST['mobile_numer'];
$fullname = $_REQUEST['fullname'];
$email = $_REQUEST['emailaddress'];
$dob = $_REQUEST['dob'];
$gender = $_REQUEST['gender'];
$age = $_REQUEST['age'];
$address = $_REQUEST['address'];
$photo = $_REQUEST['photo'] ?? '/admin/assets/images/xs/avatar4.jpg';
$details = $_REQUEST['details'];
$status = $_REQUEST['status'];
$date = $_REQUEST['date'];
$doctor_id = $_REQUEST['doctor_id'];

$sql = "INSERT INTO patients VALUES( null, '$username', '$password', '$mobile_numer', '$fullname', '$dob', '$gender', '$age', '$address', '$photo', '$details', '$status', '$date', '$doctor_id')";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo "Patients Added Successfully.";
    header('location: all-patients.php');
} else {
    echo "Something wrong. please try again";
    header('location: patients-add.php');
}
