<!-- Array -->
<?php 
$cities = ["Dhaka", "Sylhet", "Chattagram", "Khulna", "Rajsahi"];
echo "<pre>";
print_r($cities);
?>

<!-- Add two cities in end of the array -->
<?php 
$cities = ["Dhaka", "Sylhet", "Chattagram", "Khulna", "Rajsahi"];
echo "<pre>";
echo array_push($cities, "Cumilla", "Brahmanbaria");
print_r($cities);
?>

<!-- Remove three cities from the beginning of the array -->
<?php 
$cities = ["Dhaka", "Sylhet", "Chattagram", "Khulna", "Rajsahi"];
echo "<pre>";
echo array_shift($cities);
echo array_shift($cities);
echo array_shift($cities);
print_r($cities);
?>

<!-- Remove one city from the end of the array -->
<?php 
$cities = ["Dhaka", "Sylhet", "Chattagram", "Khulna", "Rajsahi"];
echo "<pre>";
echo array_pop($cities);
print_r($cities);
?>