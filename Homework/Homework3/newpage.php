<?php
//$girlBackground="makeupBack.jpg";
//$manBackground="blueback.jpg";


if(empty($_GET['name']) || empty($_GET['gender']) || empty($_GET['state']) || empty($_GET['address']) || empty($_GET['houseOptions']) )
{
    echo "ERROR! Must enter all text fields. Please go back and re submit.";
    return;
}

    if($_GET['gender']=="Female")
    {
        $url='makeupBack.jpg';
    }
    if($_GET['gender']=="Male")
    {
        $url='blueback.jpg';
    }
    
    $letterCount=count("name");
   if($letterCount<5)
    {
        
        $nameCount="SHORT NAME!";
    }
    else{
        $nameCount="LONG";
    }

    
    
    if($_GET['houseOptions']=="House")
    {
        $pic='house.jpg';
    }
    if($_GET['houseOptions']=="Apartment")
    {
        $pic='apartment.png';
    }
    
    if($_GET['state']=="CA")
    {
        $statePic='caliState.jpg';
    }
    if($_GET['state']=="NV")
    {
        $statePic='nvState.GIF';
    }
    if($_GET['state']=="AZ")
    {
        $statePic='azState.jpg';
    }
    if($_GET['state']=="OR")
    {
        $statePic='map.GIF';
    }
    
    

?>


<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8" />
        <title> New Page </title>
        <style>
       @import url("css/styles.css");
       
       body
        {
            background-image:url('<?php echo $url ?>');
        }
       </style>
       
       
        
    
       
      
    </head>
    
        
        <body>
            
        <div id="borderAround">
        <div id="newInfo">
        <h1><stong>Confirmation Page</stong></h1>
        <p>Thank you! Your gift will be sent within 5-10 business days. Have a beauty-ful day!</p>
        
        Name: <?php echo $_GET[name]; ?> <br>
        Gender: <?php echo $_GET[gender]; ?> <br>
        Address: <?php echo $_GET[address]; ?> <br>
        State: <?php echo $_GET[state]; ?> <br>
        Housing: <?php echo $_GET[houseOptions]; ?> <br>
        <br>
        <figure id="housePic">
        <img src="<?php echo $pic ?>"width=300 height=300 />
        </figure>
        
        <figure id="statePic">
            <img src="<?php echo $statePic ?>" width=400 height=400 />
        </figure>
        
        <?php
        echo $letterCount;
        ?>
        
        </div>
        
        </div>
    </body>
</html>