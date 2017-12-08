<!DOCTYPE html>
<html>
    <head>
        <title> Get Prices!</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <div class="jumbotron">
        <h1 style="text-align:center;text-decoration:underline; color:#FF66B2;">Sort by Price!
        
        </h1>
        
    </head>
    <body style="text-align:center;">
    <form action="index.php">
    <input type="submit" name="goHome" value="Back to HomePage">
   
    </body>
    </div>
</html>

<?php
include '../dbConnection.php';
$conn = getDatabaseConnection();

$sql="SELECT *
        FROM `products`
        ORDER BY price ASC";
        
        
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($records as $record)
    {
        echo "<strong style='color:#FF66B2'>Product Name: </strong>". $record['productName']."<br> <strong style='color:#FF66B2'> Product Type: </strong>". $record['productType']."<br> <strong style='color:#FF66B2'> Rating: </strong>". $record['rating']. " stars <br> <strong style='color:#FF66B2'> Price: </strong>" .$record['price']."<br><br>";
        
    }



?>