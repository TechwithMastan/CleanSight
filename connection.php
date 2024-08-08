<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "MINOR";
$errors = array(); 

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!");
}
?>