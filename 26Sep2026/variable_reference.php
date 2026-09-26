<?php
$value1 = "Hello";
$value2 =& $value1; // $value1 and $value2 both equal "Hello"
$value2 = "Goodbye"; // $value1 and $value2 both equal "Goodbye"
echo $value1;
echo "<br>";
echo "Value1:" . $value1;
echo "<br>";
echo "Value2:" . $value2;
// if we use "&" then the $value1 will also changed after assinging new $value2. If we remove "&" from the line. $value1 will be unchanged.
?>