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
    <h3>Product Update Form</h3>
    <?php  
    // Display Student Record
    $id = $_GET['id'];
     
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //Data received from entry form
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description =$_POST['description'];
        $status =$_POST['status'];
       
        //Update Query
        $conn->query("UPDATE products SET name= '$name', price = '$price', quantity = '$quantity', 
        description = '$description', status = '$status' WHERE id= '$id'");
        if($conn->affected_rows){
            echo '<p class="success-message" role="status">Successful Data Updated</p>';
        }
    } //Condition end

    //Query for select one record
    $data = $conn->query("SELECT * FROM products WHERE id = '$id' ");
     $row = $data->fetch_object();
    ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Product name" value="<?php echo $row->name ?>"><br>
        <input type="text" name="price" placeholder="Product price" value="<?php echo $row->price ?>"><br>
        <input type="text" name="quantity" placeholder="Product quantity" value="<?php echo $row->quantity ?>"><br>
        <textarea name="description" placeholder="Product description"><?php echo htmlspecialchars($row->description, ENT_QUOTES, 'UTF-8'); ?></textarea> <br>
        <input type="text" name="status" placeholder="Product status" value="<?php echo $row->status ?>"><br>
        <input type="submit" name="submit" value="Update">
    </form><br>
    <a href="index.php">Back to product list</a>
</body>
</html>