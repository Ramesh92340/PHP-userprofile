<?php 
session_start();
// clear all the variables
$_SESSION = array();
// Destroy the session
session_destroy();
// redirect to the login page
header("Location:login.php");
exit();
?>