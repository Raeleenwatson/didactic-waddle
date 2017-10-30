<?php

//include '../dbConnection1.php';
$conn = getDatabaseConnection();

function getDatabaseConnection(){
    /*
    $host = 'us-cdbr-iron-east-05.cleardb.net';//cloud 9
    $dbname = 'heroku_0adac1666acc680';
    $username = 'b1a7169c276343';
    $password = '6d64554d';*/
    
    $host = 'localhost';//cloud 9
    $dbname = 'practice';
    $username = 'root';
    $password = '';
    
    //using different database variables in Heroku
    if  (strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $host = $url["host"];
        $dbname = substr($url["path"], 1);
        $username = $url["user"];
        $password = $url["pass"];
    } 
    
    //creates db connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    //display errors when accessing tables
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn;
    
}

function getPopulation() {
    
    global $conn;
     $sql = "SELECT town_name,population
            FROM `mp_town` 
            WHERE population BETWEEN 50000 AND 80000";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) {
        
        echo $record['town_name']. " " . $record['population'];
        
    }
}

function orderedPopulation()
{
    
     global $conn;
     $sql = "SELECT town_name, county_name, population FROM `mp_town`
            INNER JOIN mp_county ON mp_town.county_id = mp_county.county_id
            ORDER BY population DESC";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) {
        
        echo $record['town_name']. " " . $record['county_name']. " " . $record['population']. "</br>";
        
    }
}

function listCountiesPop()
{
    global $conn;
    //create the total variable to be able to access it when printing
    $sql= "SELECT county_name, SUM( population ) total
		FROM mp_town t
		JOIN mp_county c ON t.county_id = c.county_id
		GROUP BY county_name ";
        
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) 
    {
        echo $record['county_name']. " - " . $record['total']. "</br>";
        
    }
}

function statePop()
{
    global $conn;
    $sql="SELECT state_name, SUM(population) total
        FROM `mp_town` t 
        JOIN mp_county c ON t.county_id= c.county_id
        JOIN mp_state s ON s.state_id=c.state_id
        GROUP BY state_name";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) 
    {
        echo $record['state_name']. " - " . $record['total']. "</br>";
        
    }
}

function leastPop()
{
    global $conn;
    
    $sql="SELECT town_name, population FROM `mp_town` 
        ORDER BY population
        LIMIT 3";
        
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) 
    {
        echo $record['town_name']. " " . $record['population']. "</br>";
        
    }
}

function noTown()
{
    global $conn;
    $sql="SELECT * FROM `mp_county` c
    LEFT JOIN mp_town t ON c.county_id=t.county_id 
    WHERE t.county_id IS NULL";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) 
    {
        echo $record['county_name']. "</br>";
        
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Practice </title>
    </head>
    <body>
        
        <hr>
        
        <?=getPopulation()?>
        <br/>
        <?=orderedPopulation()?>
        <br/>
        <?=listCountiesPop()?>
        <br/>
        <?=statePop()?>
        <br/>
        <?=leastPop()?>
        <br/>
        <?=noTown()?>
    </body>
</html>