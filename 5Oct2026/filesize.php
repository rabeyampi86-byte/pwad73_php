<?php 
$php = '..\php.pdf';
$byte = filesize($php);
$kb = round($byte/1024, 2);
echo $kb;
?>