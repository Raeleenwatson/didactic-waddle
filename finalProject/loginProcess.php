<?php

session_start();

include '../dbConnection.php';
$conn = getDatabaseConnection();
global $conn;

$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT *
        FROM admin
        WHERE username = :username 
        AND   password = :password";

$namedParameters = array();
$namedParameters[':username'] = $username;
$namedParameters[':password'] = $password;        
        
$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);//expecting only one record

//print_r($record);

if (empty($record)) {
    
     header("Location: index.php?error=true"); //redirecting to admin portal
    
} else {
    
    //echo "right credentials!";
    $_SESSION['username'] = $record['username'];
    $_SESSION['adminFullName'] = $record['firstName'] . " " . $record['lastName'];
    //echo $_SESSION['adminFullName'] . "<br>";
    //echo $record['firstName'] . " " . $record['lastName'];
   header("Location: adminStart.php"); //redirecting to admin portal
}

?>