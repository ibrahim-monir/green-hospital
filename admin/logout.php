<?php
session_start();
if( 1 == $_SESSION["patient"] ){
    session_destroy();
    header('Location:/login.php');
}else{
    session_destroy();
    header('Location:/admin/login.php');
}
?>