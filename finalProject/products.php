<?php
include 'header.php';
session_start();

if (!isset($_SESSION['username'])) { //checks whether admin has logged in
    
     header("Location: index.php");
     exit();
    
 }

include '../dbConnection.php';
$conn = getDatabaseConnection();

function displayProducts()
{
    global $conn;
    $sql="SELECT * 
    FROM products
    ORDER BY productName ASC";
    
    $statement = $conn->prepare($sql);
    $statement->execute();
    $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    //print_r($users);
    
    
    return $products;
    
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin </title>
    </head>
    <body style="text-align:center;">
        
    <h1 style="text-decoration:underline; color:#FF66B2;">Products</h1>    
    <?php
    echo "[<a href=insertProduct.php?productId=".$product['productId']."'> Insert New Product! </a> ]";
    echo "<br><br>";
    $products=displayProducts();
    
    
     foreach($products as $product) 
     {
        echo "<strong>Product Name: </strong>". $product['productName']."<br>";
        echo "<strong>ProductType: </strong>". $product['productType']."<br>";
        echo "<strong>Rating: </strong>". $product['rating']."<br>";
        echo "<strong>Price: </strong>".$product['price']."<br>";
        echo "<strong>Availability: </strong>".$product['availability']."<br>";
        echo "[<a href='updateProduct.php?productId=".$product['productId']."'> Update </a> ]";
        echo "[<a href='deleteProduct.php?productId=".$product['productId']."'> Delete </a> ]";
        
        echo "<br>";
        echo "<br>";
        echo "<br>";
     }
     
    ?>
    </body>
</html>