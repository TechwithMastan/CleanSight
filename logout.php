<?php
session_start();

// Unset all session variables
$_SESSION = array();

session_unset();
session_destroy();

// Redirect the user to the login page or any other page as needed
header('location: login.php');
exit();
?>
