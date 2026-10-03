<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $id = $_GET['id'];
        include_once("dbconfiger.php");
        $conn->query("DELETE FROM products WHERE id= '$id'");
        if($conn->affected_rows){
            header("Location: index.php");
        }
    ?>
</body>
</html>