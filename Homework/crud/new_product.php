<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Product Entry Form</h3>
    <form action="" method="post">
    <?php  
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //Data received from entry form
         $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description =$_POST['description'];
        $status =$_POST['status'];
        include_once("dbconfiger.php"); //Database connection
        $result = $conn->query("INSERT INTO products
        (id, name, price, quantity, description, status) VALUES
        (NULL, '$name', '$price', '$quantity', '$description', '$status')");
        if($conn->affected_rows){
            echo '<p class="success-message" role="status">Successful Data Entry</p>';
        }
    }
    ?>
        <input type="text" name="name" placeholder="Product name"><br>
        <input type="text" name="price" placeholder="Product price"><br>
        <input type="text" name="quantity" placeholder="Product quantity"><br>
        <textarea name="description" placeholder="Product description"></textarea> <br>
        <input type="text" name="status" placeholder="Product status"><br>
        <input type="submit" name="submit" value="Save">
    </form><br>
    <a href="index.php">Back to product list</a>
</body>
</html>