<?php
include_once("dbconfiger.php");
include_once("student.php");
$studentManager = new Student($conn);
$students = $studentManager->getAll();
?>
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
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Contact</th>
            <th>Action</th>
        </tr>
        <?php
        while ($row = $students->fetch_assoc()) { ?>
       <tr>
                <td><?php echo (int) $row['id']; ?></td>
                <td><?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($row['phone'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td>
            
                    <a class="delete-icon" href="student_edit.php?id=<?php echo (int) $row['id']; ?>">&#9998;</a>
                 <a onclick="return confirm('Are you sure to delete this row')" class="danger" href="student_delete.php?id=<?php echo (int) $row['id']; ?>">&#x1F5D1;&#xFE0E;</a>
        </td>
       </tr>
       <?php
    }
    ?>
    </table>
</body>
</html>