<?php
include_once("dbconfiger.php");
include_once("student.php");
$studentManager = new Student($conn);
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    header("Location: index.php");
    exit;
}
$student = $studentManager->getById($id);
if (!$student) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Student Update Form</h3>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        if ($studentManager->update($id, $name, $email, $phone)) {
            echo '<p class="success-message" role="status">Successful Data Updated</p>';
            $student = $studentManager->getById($id);
        }
    }
    ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter your name" value="<?php echo htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8'); ?>" required><br>
        <input type="email" name="email" placeholder="Enter your email" value="<?php echo htmlspecialchars($student['email'], ENT_QUOTES, 'UTF-8'); ?>" required><br>
        <input type="text" name="phone" placeholder="Enter your phone number" value="<?php echo htmlspecialchars($student['phone'], ENT_QUOTES, 'UTF-8'); ?>" required><br>
        <input type="submit" name="submit" value="Update">
    </form><br>
    <a href="index.php">Bact to student list</a>
</body>
</html>