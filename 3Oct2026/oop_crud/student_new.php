<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Student Entry Form</h3>
    <form action="" method="post">
    <?php
    include_once("dbconfiger.php");
    include_once("student.php");
    $studentManager = new Student($conn);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        if ($studentManager->create($name, $email, $phone)) {
            echo '<p class="success-message" role="status">Successful Data Entry</p>';
        }
    }
    ?>
        <input type="text" name="name" placeholder="Enter your name" required><br>
        <input type="email" name="email" placeholder="Enter your email" required><br>
        <input type="text" name="phone" placeholder="Enter your phone number" required><br>
        <input type="submit" name="submit" value="Save">
    </form><br>
    <a href="index.php">Bact to student list</a>
</body>
</html>