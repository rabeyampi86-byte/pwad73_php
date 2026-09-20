<?php 
$x = 15;
$y = "Hello world";
print $x;
//echo $y;
?>

<?php 
$color = "red";
echo "<br> My car is $color <br>";
?>
a = 25 <br>
b = 20 <br>
<?php
$a = 25;
$b = 20;
?>
a+b = <?php $sum = $a+$b ; echo $sum; ?> <br>
a-b = <?php $sub = $a-$b ; echo $sub; ?> <br>
a*b = <?php $mul = $a*$b ; echo $mul; ?> <br>
a/b = <?php $div = $a/$b ; echo $div; ?> <br>

<!-- Testing tag var_dump() -->
<?php
$flower = ["Lily", "Lotus", "Bely", "Sunflower"];
$number = 100;
$name = "Rabeya";
echo "<pre>";
var_dump($flower);
var_dump($name);
var_dump($number);
?>

<?php
function myTest() {
  static $x = 0; // static scope
  echo $x;
  $x++;
}
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
?>