<?php
//echo strlen("Hello world!");                   #letter count
//echo str_word_count("Hello world!");           #word count
//echo strpos("Hello world!", "world");            # letter count before world word
//$x = "My name is Rabeya";
//echo strtoupper($x);
//echo strtolower($x);
//echo str_replace("Rabeya", "Nila", $x);
//echo strrev($x);
//$y = " Today is the first day at Metro Shopping Mall";
//$y = trim($y);  //trim removes the extra space or whitespace from the beginning or the end of the sentence.
//echo $x . $y;

$x = "Hello lovely World!";
$y = explode("o", $x);
echo"<pre>";
//Use print_r() to display the result
//print_r($y);

//$x = "Hello World!";
echo substr($x, 6, 4);
?>