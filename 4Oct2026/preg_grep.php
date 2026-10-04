<?php
$foods = array("pasta", "steak", "fish", "potatoes");
//$food = preg_grep("/^f/", $foods); //"^" is used it to find a array by its first word.
$food = preg_grep("/s$/", $foods); //used "$" to find an array by its last word.
echo "<pre>";
print_r($food);
?>