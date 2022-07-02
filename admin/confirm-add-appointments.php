<?php
require_once 'conn.php';

$patient_id = $_REQUEST['patient_id'];
$doctor_id = $_REQUEST['doctor_id'];
$date = $_REQUEST['date'];
$reason = $_REQUEST['reason'];
$is_new = $_REQUEST['is_new'];
$status = $_REQUEST['status'];

$sql = "INSERT INTO appointments VALUES( null, '$patient_id', '$doctor_id', '$date', '$reason', '$is_new', '$status')";

$query = mysqli_query($conn, $sql);
if ($query) {
    header('location: /admin/appointments.php');
} else {
    "Something wrong. please try again";
}
