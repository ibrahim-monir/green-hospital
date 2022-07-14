<?php
require_once 'conn.php';
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$status = $_REQUEST['status'];
$sql = "UPDATE medicine_cat SET name = '$name', status = '$status' WHERE id={$id}";
$query = mysqli_query( $conn, $sql );
if( $query ){
    header( 'location: medicines-category.php' );
}else{
    echo "Erorr";
}