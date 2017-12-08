<?php
include '../dbConnection.php';
$conn = getDatabaseConnection();

$imgName=$_GET['searchId'];

$namedParameters = array();
if($imgName == trim($imgName) && strpos($imgName, ' ') !== false)
{
    $t2=strtolower($imgName);
    $goodName=str_replace(' ', '', $t2);
    $tempName=ucfirst($goodName);
    $namedParameters[":searchName"]=$tempName;
}
else{
    
    $t2=strtolower($imgName);
    $tempName=ucfirst($t2);
    $namedParameters[":searchName"]=$tempName;
}

//print_r($namedParameters);

//PRINTING PRODUCT INFO
$sql= "SELECT *  from products
        WHERE 1
        and productName LIKE :searchName";
  
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    $record = $stmt->fetch(PDO::FETCH_ASSOC);//expecting only one record
  
   echo "<strong style='font-size:1.4em;'>Product Name: </strong>"." <strong style='color:#FF66B2; font-size:1.2em;'>" .$record['productName']. "</strong> <br> <strong style='font-size:1.4em;'> Product Type: </strong>"." <strong style='color:#FF66B2; font-size:1.2em;'>". $record['productType']."</strong> <br><strong style='font-size:1.4em;'> Rating: </strong>"." <strong style='color:#FF66B2; font-size:1.2em;'>". $record['rating']. "stars </strong> <br> <strong style='font-size:1.4em;'> Price: </strong>"." <strong style='color:#FF66B2; font-size:1.2em; '> $" .$record['price'];
  
 //PUTTING INTO HISTORY TABLE THEN GETTING COUNT
  $sql= "INSERT INTO history (productName) 
        VALUES (:searchName)";

    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);

    
     $sql="SELECT COUNT(time) temp
    FROM `history`
    WHERE productName = :searchName";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    
    $record = $stmt->fetch(PDO::FETCH_ASSOC);//expecting only one record
   echo "<br>";
   echo $tempName . " was searched " . " " . $record['temp'] . " ". "times.";
    
    
?>