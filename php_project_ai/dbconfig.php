<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'php_ai';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die('Database connection failed: ' . mysqli_connect_error());
}

if (!mysqli_set_charset($conn, 'utf8mb4')) {
  die('Could not set the database connection charset: ' . mysqli_error($conn));
}