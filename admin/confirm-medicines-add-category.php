<?php
require_once 'conn.php';
/**
 * Category Add
 */

$name = $_REQUEST['name'];
$status = $_REQUEST['status'];
$categoryAddSql = "INSERT INTO medicine_cat VALUES( NULL, '$name', '$status' )";
$categoryAddQuery = mysqli_query( $conn, $categoryAddSql );
if( $categoryAddQuery ){
    header( 'location: medicines-category.php');
}else{
    echo "Error";
}