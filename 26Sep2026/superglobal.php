<a href="superglobal.php? name='Rabeya'&do='Codding'&aim='Wants to take a nap'">Click here</a>
<?php 
echo "<pre>";
//print_r($_SERVER); // Super Global Array
//echo $_SERVER['REQUEST_METHOD'];
//print_r($_GET);
echo $_GET['name'];
echo "<br>";
echo $_GET['do'];
echo "<br>";
echo $_GET['aim'];

?>