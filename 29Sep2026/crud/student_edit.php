<?php include_once("dbconfiger.php"); //Database connection?>
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
    // Display Student Record
    $id = $_GET['id'];
     
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //Data received from entry form
        $name = $_POST['name'];
        $email =$_POST['email'];
        $phone = $_POST['phone'];
       
        //Update Query
        $conn->query("UPDATE allstudents SET name= '$name', 
        email = '$email', phone = '$phone' WHERE id= '$id'");
        if($conn->affected_rows){
            echo "Successful Data Updated";
        }
    } //Condition end

    //Query for select one record
    $data = $conn->query("SELECT * FROM allstudents WHERE id = '$id' ");
     $row = $data->fetch_object();
    ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter your name" value="<?php echo $row->name ?>"><br>
        <input type="text" name="email" placeholder="Enter your email" value="<?php echo $row->email ?>"><br>
        <input type="text" name="phone" placeholder="Enter your phone number" value="<?php echo $row->phone ?>"><br>
        <input type="submit" name="submit" value="Update">
    </form><br>
    <a href="index.php">Bact to student list</a>
</body>
</html>