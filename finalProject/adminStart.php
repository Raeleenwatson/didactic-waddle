<?php
session_start();
if (!isset($_SESSION['username'])) { //checks whether admin has logged in
    
    header("Location: index.php");
    exit();
    
}
include 'header.php';

?>

<!DOCTYPE html>
<html>
    <head>
        
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <title>
         </title>
    </head>
    <body style="text-align:center;">
        
        <form action="products.php">
        <input type="submit" class="btn btn-secondary" value="View Products"/>
        </form>
        
        <br>
        <form>
            <input type="submit" class="btn btn-secondary" name="repBtn" id="reports" value="Generate Reports" />
        </form>
     
    </body>
</html>

<?php

include '../dbConnection.php';
$conn = getDatabaseConnection();

if(isset($_GET['repBtn']))
{
    global $conn;
    echo "<table class='table'>
  <thead>
    <tr>
      <th scope='col'>Average Price Of Products:</th>
      <th scope='col'>Average Rate Of Products:</th>
      <th scope='col'>Max price of products:</th>
    </tr>
    </thead>
    <tbody>
    <tr>";
    $sql="SELECT AVG(price) av
            FROM `products`";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetch();

    echo "<td>".$records['av']."</td>";
    
    echo "<br>";
    $sql="SELECT AVG(rating) rate
            FROM `products`";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetch();
    
     echo "<td>".$records['rate']."</td>";
     echo "<br>";
     
    $sql="select productName,price
            from products
            where price in (select max(price) from products)";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetch();
    
    echo "<td>" .$records['productName']."$". $records['price']." </td>";
     
     echo "</tr>
      </tbody>
</table>";
}

?>