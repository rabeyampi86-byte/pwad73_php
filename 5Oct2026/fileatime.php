<?php
$file = '../myfile.txt';
$timestamp = fileatime($file);
//$timestamp = filemtime($file);
echo date("Y m d G:i:s a", $timestamp);
?>