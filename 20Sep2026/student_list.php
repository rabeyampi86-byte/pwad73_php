<?php include_once('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       $data = $conn->query("SELECT * FROM students");
       //$row = $data->fetch_assoc();
       //$row = $data->fetch_array();
       //var_dump($row);
       while($row = $data->fetch_object()){
        echo $row->ID . "<br>";
        echo $row->Name . "<br>";
        echo $row->Email  . "<br>";
        echo $row->Phone  . "<br>";
        echo $row->Hometown  . "<br>";
       }
    ?>
</body>
</html>