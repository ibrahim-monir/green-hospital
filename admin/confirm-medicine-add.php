<?php
require_once 'conn.php';
$name = $_REQUEST['name'];
$generic_name = $_REQUEST['generic_name'];
$other_brand_name = $_REQUEST['other_brand_name'];
$brand_id = $_REQUEST['brand_id'];
$category_id = $_REQUEST['category_id'];
$buy_price = $_REQUEST['buy_price'];
$sell_price = $_REQUEST['sell_price'];
$side_effect = $_REQUEST['side_effect'];
$description = $_REQUEST['description'];
/**
 * SQL query for data insert
 */
$sql = "INSERT INTO medicines VALUES( NULL, '$name', '$generic_name', '$other_brand_name', $brand_id, $category_id, $buy_price, $sell_price, '$side_effect', '$description')";
$query = mysqli_query( $conn, $sql );
if( $query ){
    header( 'location: /admin/medicines.php' );
}else{
    echo "Something Wrong";
}