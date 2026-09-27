<?php include_once("dbconfiger.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <h3>Student List</h3>
    <?php 
    $rawData = $conn->query("SELECT * FROM allstudents"); ?>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Contact</th>
        </tr>
    <?php 
    while($row = $rawData->fetch_assoc()){ ?>
       <tr>
        <td><?php echo $row['id'] . "<br>"; ?></td>
        <td><?php echo $row['name'] . "<br>"; ?></td>
        <td><?php echo $row['email'] . "<br>"; ?></td>
        <td><?php echo $row['phone'] . "<br>"; ?></td>
       </tr>
       <?php
    }
    ?>
    </table>
</body>
</html>