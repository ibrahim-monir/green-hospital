<?php
require_once 'conn.php';

$id = $_REQUEST['id'];
$patient_id = $_REQUEST['patient_id'];
$doctor_id = $_REQUEST['doctor_id'];
$date = $_REQUEST['date'];
$reason = $_REQUEST['reason'];
$is_new = $_REQUEST['is_new'];
$status = $_REQUEST['status'];

$sql = "UPDATE appointments SET patient_id = '$patient_id', doctor_id = '$doctor_id', date = '$date', reason = '$reason', is_new = '$is_new', status = '$status' WHERE id = $id";


$query = mysqli_query($conn, $sql);
if ($query) {
    header('location: /admin/appointments.php');
} else {
    echo "Something wrong. please try again";
}
