<?php 
/**
 * @Database Connection
 * @1.0.0
 */
$conn = mysqli_connect('localhost','root','','hms');

if( ! $conn ){
    echo "Database Connection Failed ". mysqli_connect_error();
}