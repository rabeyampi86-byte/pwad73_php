<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "pwad73php";
$conn = new mysqli($host, $user, $pass, $db);
if (!$conn){
    die("Database connection failed:" . mysqli_connect_error());
}
?>