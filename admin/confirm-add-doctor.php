<?php
require_once 'conn.php';

$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile_number'];
$password = md5($_REQUEST['password']);
$fullname = $_REQUEST['fullname'];
$dob = $_REQUEST['dob'];
$gender = $_REQUEST['gender'];
$age = $_REQUEST['age'];
$address = $_REQUEST['address'];
$photo = $_REQUEST['photo'];
$designation = $_REQUEST['designation'];
$doctor_type = $_REQUEST['doctor_type'];
$shortbio = $_REQUEST['shortbio'];
$details = $_REQUEST['details'];
$specialist = $_REQUEST['specialist'];
$department_id = $_REQUEST['department_id'];

$sql = "INSERT INTO doctors VALUES( null, '$username', '$email', '$mobile', '$password',
'$fullname', '$dob', '$gender', '$age', '$address', '$photo', '$designation', '$doctor_type', '$shortbio', 
'$details', '$specialist', '$department_id')";

$query = mysqli_query($conn, $sql);
if ($query) {
    echo "Doctor Added Successfully.";
    header('location: /admin/all-doctor.php');
} else {
    "Something wrong. please try again";
}
