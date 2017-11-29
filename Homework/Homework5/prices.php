<?php
    include '../../dbConnection.php';
    $conn = getDatabaseConnection();
      
    
    $sql = "SELECT deviceName, deviceType,price FROM `tc_device` ORDER BY price";
            
    
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetchAll(PDO::FETCH_ASSOC);//expecting only one record
        
         echo json_encode($record);
        
?>

