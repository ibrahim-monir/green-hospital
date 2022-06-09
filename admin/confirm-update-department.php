<?php
require_once 'conn.php';
/**
 * Update Department Data
 */
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$description = $_REQUEST['description'];
$status = $_REQUEST['status'];
$data = "UPDATE departments SET name = '$name', description = '$description' , status = '$status' WHERE id = '$id' ";
$update = mysqli_query( $conn, $data );
if($update){
    header('location: /admin/departments.php');
}else{
    echo "Error";
}