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
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //Data received from entry form
        $name = $_POST['name'];
        $email =$_POST['email'];
        $phone = $_POST['phone'];
        include_once("dbconfiger.php"); //Database connection
        $result = $conn->query("INSERT INTO allstudents
        (id, name, email, phone) VALUES
        (NULL, '$name', '$email', '$phone')");
        if($conn->affected_rows){
            echo '<p class="success-message" role="status">Successful Data Entry</p>';
        }
    }
    ?>
        <input type="text" name="name" placeholder="Enter your name"><br>
        <input type="text" name="email" placeholder="Enter your email"><br>
        <input type="text" name="phone" placeholder="Enter your phone number"><br>
        <input type="submit" name="submit" value="Save">
    </form><br>
    <a href="index.php">Bact to student list</a>
</body>
</html>