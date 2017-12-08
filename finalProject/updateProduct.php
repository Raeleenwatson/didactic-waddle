<?php
include 'header.php';
//session_start();

// if (!isset($_SESSION['username'])) { //validates that admin has indeed logged in
    
//     header("Location: index.php");
    
// }

 include("../dbConnection.php");
 $conn = getDatabaseConnection();


function getProductInfo($productId) {
    
    global $conn;    
    $sql = "SELECT * 
            FROM products
            WHERE productId = $productId";
            
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch();
   // print_r($record);
    return $record;
}

if (isset($_GET['productId'])) {
    $productInfo = getProductInfo($_GET['productId']);
    
}
    
if (isset($_GET['updateUserForm']))
    {
        $sql = "UPDATE products
                SET productName = :name,
                    productType = :type,
                    rating= :rating,
                    price= :price,
                    availability= :availability
    			WHERE productId = :productId";
    		
    	$namedParameters=array();
    	$namedParameters[":name"]=$_GET['productName'];
    	$namedParameters[":type"]=$_GET['productType'];
    	$namedParameters[":productId"]=$_GET['productId'];
    	$namedParameters[":rating"]=$_GET['rating'];
    	$namedParameters[":price"]=$_GET['price'];
    	$namedParameters[":availability"]=$_GET['availability'];
    	//echo $_GET['[productId'];
    	//print_r($namedParameters);
    	
    	$stmt = $conn->prepare($sql);
        $stmt->execute($namedParameters);
        //$record = $stmt->fetch();
    		echo "<strong> Successfully Updated! </strong>";	
    }



?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin: Updating User </title>
    </head>
    <body style="text-align:center;">
    <h1 style="text-decoration:underline; color:#FF66B2;">Update Product</h1> 
    
    <fieldset>
        
       
        
        <form>
            <input type="hidden" name="productId"value="<?=$productInfo['productId']?>" /> <br>
            <br>
            <strong>Product Name:</strong> <input type="text" name="productName" required value="<?=$productInfo['productName']?>"/> <br>
            <br>
            <strong>Product Type:</strong> <input type="text" name="productType" required value="<?=$productInfo['productType']?>"/> <br>
            <br>
            <strong>Rating:</strong> <input type="text" name="rating" required value="<?=$productInfo['rating']?>"/> <br>
            <br>
            <strong>Price:</strong> <input type="text" name="price" required value="<?=$productInfo['price']?>"/> <br>
            <br>
            <strong>Availability:</strong> <input type="text" name="availability" required value="<?=$productInfo['availability']?>"/> <br>
            <br>
     
            <input type="submit" class="btn btn-secondary" name="updateUserForm" value="Update Product!"/>
        </form>
        
    </fieldset>


    </body>
</html>