<?php
include 'header.php';
//session_start();

// if (!isset($_SESSION['username'])) { //validates that admin has indeed logged in
//     header("Location: index.php");
// }

 include("../dbConnection.php");
 $conn = getDatabaseConnection();


if (isset($_GET['addProductForm'])){
    //the administrator clicked on the "Add prod" button
    $productName = $_GET['productName'];
    $productType = $_GET['productType'];
    $rating = $_GET['rating'];
    $price = $_GET['price'];
    $availability = $_GET['availability'];
    
    //"INSERT INTO `tc_user` (`userId`, `firstName`, `lastName`, `email`, `universityId`, `gender`, `phone`, `role`, `deptId`) VALUES (NULL, 'a', 'a', 'a', '1', 'm', '1', '1', '1');
    //INSERT INTO `products` (`productId`, `productName`, `productType`, `price`, `rating`, `availability`) VALUES (NULL, '', '', '', '', '')
    $sql = "INSERT INTO `products`
    (`productName`, `productType`, `price`, `rating`, `availability`)
    VALUES (:productName, :productType, :rating, :price, :availability)";
    $namedParameters = array();
    $namedParameters[':productName'] =  $productName;
    $namedParameters[':productType'] =  $productType;
    $namedParameters[':rating'] =  $rating;
    $namedParameters[':price'] =  $price;
    $namedParameters[':availability'] = $availability;
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    
    echo "Product has been added successfully!";
            
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body style="text-align:center;">
         <h1 style="text-decoration:underline; color:#FF66B2;">Products</h1>
<fieldset>
    
        
       
        <form>
            
            <strong>Product Name:</strong> <input type="text" name="productName" required /> <br>
            <br>
            <strong>Product Type:</strong> <input type="text" name="productType" required/> <br>
            <br>
            <strong>Price:</strong> <input type="text" name="rating"/> <br>
            <br>
            <strong>Rating:</strong> <input type="text" name="price" required/> <br>
            <br>
            <strong>Availability:</strong> <input type="text" name="availability"/> <br>
            <br>
            <br>

                <input type="submit" class="btn btn-secondary" name="addProductForm" value="Add User!"/>
        </form>
        
    </fieldset>
    </body>
</html>