<?php

include '../../dbConnection.php';
$conn = getDatabaseConnection();
/*

$sql = "UPDATE `tc_device`
        SET `checkoutHistory` = UTC_TIMESTAMP()
        WHERE deviceName = :deviceName";
*/

$sql= "INSERT INTO history (deviceName) 
        VALUES (:deviceName)";

   $namedParameters = array();
   $namedParameters[":deviceName"]=$_GET['deviceName'];
    
   
   //print_r($namedParameters);
   
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);


$sql ="SELECT *
        FROM tc_device
        WHERE 1
        AND deviceName LIKE :deviceName";
      
    $namedParameters = array();
    $namedParameters[":deviceName"]= "%" . $_GET['deviceName'] . "%";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
  
    $record = $stmt->fetch(PDO::FETCH_ASSOC);//expecting only one record
    echo json_encode("Device ID: ". " " .$record['deviceId'] ."<br>" . "Device Type: " . $record['deviceType'] . "<br>". "Device Price: $" . $record['price']. "<br>. ");
    //echo "\r\n";
    echo json_encode("<strong>" ."Checkout History:". "<strong> <br>");
    
$sql="SELECT deviceName, time
    from `history`
    WHERE deviceName = :deviceName";
        
    $namedParameters = array();
    $namedParameters[":deviceName"]= $_GET['deviceName'];
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    
    //print_r($namedParameters);
    $record = $stmt->fetchAll(PDO::FETCH_ASSOC);//expecting only one record
    foreach($record as $records)
    {
     echo json_encode($records['deviceName'] ." " . $records['time'] ."<br>");
    }
    
    
    $sql="SELECT COUNT(time) temp
    FROM `history`
    WHERE deviceName = :deviceName";
    
     $namedParameters = array();
    $namedParameters[":deviceName"]= $_GET['deviceName'];
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    
    $record = $stmt->fetch(PDO::FETCH_ASSOC);//expecting only one record
    
    echo "<br>";
    
    echo json_encode($_GET['deviceName'] . " was searched " . " " . $record['temp'] . " ". "times.");
?>

