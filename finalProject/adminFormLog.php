<?php

include 'header.php';
if (isset($_GET['error'])) {
    echo "Invalid name or password!";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 6: Admin Login Page </title>
    </head>
    <body style="text-align:center;">
    
    
        <form method="POST" action="loginProcess.php">
            
            <strong>Username: </strong> <input type="text" name="username"/> <br>
            <br>
            
            <strong>Password: </strong> <input type="password" name="password"/> <br>
            <br>
            <input type="submit" class="btn btn-secondary" name="login" value="Login"/>
            
            
        </form>
    </div>
    </body>
</html>