<?php
require_once 'conn.php';

$id = $_REQUEST['id'];
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


$sql = "UPDATE doctors SET username = '$username', email = '$email', password = '$password', mobile_number = '$mobile', full_name = '$fullname',
dob = '$dob', gender = '$gender', age = '$age', address = '$address', photo = '$photo', designation = '$designation', doctor_type = '$doctor_type',
shortbio = '$shortbio', details = '$details', specialist = '$specialist', department_id = '$department_id' WHERE id = $id";


$query = mysqli_query($conn, $sql);
if ($query) {
    header('location: /admin/all-doctor.php');
} else {
    echo "Something wrong. please try again";
}
