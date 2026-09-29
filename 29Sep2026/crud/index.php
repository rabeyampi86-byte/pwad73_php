<?php include_once("dbconfiger.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Student List</h3>
    <a href="student_new.php">New Entry</a><br><br>
    <?php 
    $rawData = $conn->query("SELECT * FROM `allstudents`"); ?>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Contact</th>
            <th>Action</th>
        </tr>
    <?php 
    while($row = $rawData->fetch_assoc()){ ?>
       <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td>
            
          <a class="delete-icon" href="student_edit.php?id=<?php echo $row['id']; ?>">&#9998;</a>  
         <a onclick="return confirm('Are you sure to delete this row')" class="danger" href="student_delete.php?id=<?php echo $row['id']; ?>">&#x1F5D1;&#xFE0E;</a>   
        </td>
       </tr>
       <?php
    }
    ?>
    </table>
</body>
</html>