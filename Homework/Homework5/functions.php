<?php

include '../../dbConnection.php';
$conn = getDatabaseConnection();
   
    $sql = "SELECT checkoutHistory
            FROM tc_device
            WHERE deviceName = :deviceName"; 
    
    $namedParameters = array();
    $namedParameters[':deviceName'] = $_GET['deviceName'];
           
            
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    $record = $stmt->fetch(PDO::FETCH_ASSOC);//expecting only one record
   
 echo json_encode($record);


?>