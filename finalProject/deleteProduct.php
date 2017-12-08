<?php

    include("../dbConnection.php");
    $conn = getDatabaseConnection();
    $sql = "DELETE FROM products 
            WHERE productId = " . $_GET['productId'];

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    header("Location: products.php");
    
?>