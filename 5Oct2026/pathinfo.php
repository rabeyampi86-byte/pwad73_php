<?php 
$path = 'D:\Xampp\htdocs\pwad73_php\5Oct2026\myfile.txt';
$info = pathinfo($path);
echo "<pre>";
print_r($info);
echo $info['basename'];
echo "<br>";
echo $info['dirname'];
echo "<br>";
echo $info['extension'];
echo "<br>";
echo $info['filename'];
?>