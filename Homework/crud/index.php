<?php include_once("dbconfiger.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Product List</h3>
    <a href="new_product.php">Product Entry</a><br><br>
    <?php 
    $rawData = $conn->query("SELECT * FROM `products`"); ?>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    <?php 
    while($row = $rawData->fetch_assoc()){ ?>
       <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['quantity']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td>
            
          <a class="delete-icon" href="product_edit.php?id=<?php echo $row['id']; ?>">&#9998; | </a>  
         <a onclick="return confirm('Are you sure to delete this row')" class="danger" href="product_delete.php?id=<?php echo $row['id']; ?>">&#x1F5D1;&#xFE0E;</a>   
        </td>
       </tr>
       <?php
    }
    ?>
    </table>
</body>
</html>