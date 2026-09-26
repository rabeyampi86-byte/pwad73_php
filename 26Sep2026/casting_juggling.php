<h1>Casting</h1>
<?php 
$score = (float) "13.0"; // $score = 13.0
echo $score;
echo "<br>";
var_dump($score);
echo "<br>";
$x = (array) "Rabeya";
var_dump($x);
echo "<br>";
$y = ["Rima", "Rani"];
$obj = (object) $y;
var_dump($y);
echo "<br>";
?>
<h1>Juggling</h1>
<?php
$to = 5; // an integer
$count = "15"; // a string
$total = $to + $count; // $total = 20 (an integer)
echo $total;
echo "<br>";
?>
<?php
$val1 = "1.2e3"; // "1200",      # e means exponensial
$val2 = 2;
echo $val1 * $val2; // outputs 2400 as 1.2e3 as a float is1200
?>