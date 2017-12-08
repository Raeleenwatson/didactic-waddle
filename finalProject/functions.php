<?php

include '../../dbConnection.php';
$conn = getDatabaseConnection();

$sql= "INSERT INTO history (deviceName) 
        VALUES (:deviceName)";

   $namedParameters = array();
   $namedParameters[":deviceName"]=$_GET['deviceName'];
  
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);

    
    echo json_encode($_GET['deviceName'] . " was searched " . " " . $record['temp'] . " ". "times.");
?>

