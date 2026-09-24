<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "pwad73";

$conn = new mysqli($host, $user, $pass, $db);
if(!$conn){
    die("Database connection fail:" . mysqli_connect_error());
}
?>