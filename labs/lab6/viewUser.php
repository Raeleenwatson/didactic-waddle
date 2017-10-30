<?php
session_start();
if (!isset($_SESSION['username'])) { //validates that admin has indeed logged in
    
    header("Location: index.php");
    
}

include("../../dbConnection.php");
 $conn = getDatabaseConnection();

function getDepartmentInfo(){
    global $conn;        
    $sql = "SELECT deptName, departmentId 
            FROM tc_department 
            ORDER BY deptName";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll();
    
    return $records;
    
}

function getUserInfo($userId) {
    global $conn;    
    $sql = "SELECT * 
            FROM tc_user
            WHERE userId = $userId";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch();
    //print_r($record);
    return $record;
}

if (isset($_GET['userId'])) {
    
    $userInfo = getUserInfo($_GET['userId']);
    
    
}
if(isset($_GET['updateUserForm']))
{
    $sql = "UPDATE tc_user
            SET firstName = :fName,
                lastName = :lName
			WHERE userId = :userId";
		
	$namedParameters=array();
	$namedParameters[":fName"]=$_GET['firstName'];
	$namedParameters[":lName"]=$_GET['lastName'];
	$namedParameters[":userId"]=$_GET['userId'];
	$stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);	
			
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin: View User </title>
    </head>
    <body>

    <h1> Admin Section </h1>
    <h2> Updating User Info </h2>

    
            <input type="hidden" name="userId"value="<?$userId['userId']?>" /> <br>
            First Name: <?=$userInfo['firstName']?> <br>
            Last Name: <?=$userInfo['lastName']?> <br>
            Email:  <?=$userInfo['email']?> <br>
            University Id: <?=$userInfo['universityId']?> <br>
            Phone: <?=$userInfo['phone']?> <br>
            Gender: <?=$userInfo['gender']?> <br>
            Role:   <?=$userInfo['role']?> <br>
            <br />
            Department: 
            <?php
            $departments=getDepartmentInfo();
            foreach ($departments as $record) {
                if($userInfo['deptId']==$record['departmentId'])
                {
                    echo $record['deptName'];
                }
            }
            
            
            ?>
            
    </body>
</html>